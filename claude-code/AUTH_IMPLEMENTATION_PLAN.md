# Implementation Plan: User Authentication for Pokefony

## Overview

This plan implements a complete user authentication system for the Pokefony Pokédex app, including user registration, login, logout, and session management. This provides the foundation for future user-specific features like favorites, teams, and collection tracking.

## Requirements

- User registration with email and password
- Secure login with form authentication
- Logout functionality
- Password hashing and security
- Session management with "remember me"
- Navigation bar updates showing auth state
- Protected routes for authenticated users

## Architecture Decisions

### Authentication Method
- **Form login** (email/password) using Symfony's built-in security component
- CSRF protection enabled for all forms
- Remember me functionality for better UX (1 week session)
- Auto password hasher (bcrypt) for secure password storage

### Security Configuration
- Form-based authentication with login_path and check_path
- Logout redirects to Pokédex home
- Access control rules for public vs protected routes
- User provider loads from User entity via email

---

## PHASE 1: Security Configuration

### 1.1 Update Security Configuration

**File:** `config/packages/security.yaml`

**Changes:**
```yaml
security:
    password_hashers:
        Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface: 'auto'

    providers:
        app_user_provider:
            entity:
                class: App\Entity\User
                property: email

    firewalls:
        dev:
            pattern: ^/(_profiler|_wdt|assets|build)/
            security: false

        main:
            lazy: true
            provider: app_user_provider
            form_login:
                login_path: app_login
                check_path: app_login
                enable_csrf: true
                default_target_path: app_pokedex_region
            logout:
                path: app_logout
                target: app_pokedex_region
            remember_me:
                secret: '%kernel.secret%'
                lifetime: 604800
                path: /
                always_remember_me: true

    access_control:
        - { path: ^/login, roles: PUBLIC_ACCESS }
        - { path: ^/register, roles: PUBLIC_ACCESS }
```

---

## PHASE 2: Registration Form & Controller

### 2.1 Create Registration Form Type

**File:** `src/Form/RegistrationFormType.php` (NEW)

```php
<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Email(),
                ],
                'attr' => ['class' => 'form-control', 'placeholder' => 'your.email@example.com'],
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options'  => [
                    'label' => 'Password',
                    'attr' => ['class' => 'form-control', 'placeholder' => 'Password'],
                    'constraints' => [
                        new Assert\NotBlank(),
                        new Assert\Length(['min' => 6]),
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirm Password',
                    'attr' => ['class' => 'form-control', 'placeholder' => 'Confirm Password'],
                ],
                'invalid_message' => 'The password fields must match.',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
```

### 2.2 Create Security Controller

**File:** `src/Controller/SecurityController.php` (NEW)

```php
<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

final class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_pokedex_region', ['region' => 'national', 'page' => 1]);
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_pokedex_region', ['region' => 'national', 'page' => 1]);
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordHasher->hashPassword($user, $form->get('password')->getData())
            );

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Account created successfully! Please log in.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
```

---

## PHASE 3: Authentication Templates

### 3.1 Create Login Template

**File:** `templates/security/login.html.twig` (NEW)

```twig
{% extends 'base.html.twig' %}

{% block title %}Login - Pokefony{% endblock %}

{% block body %}
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-4">
                    <h2 class="card-title text-center mb-4">Login</h2>

                    {% if error %}
                        <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    {% for message in app.flashes('success') %}
                        <div class="alert alert-success">{{ message }}</div>
                    {% endfor %}

                    <form method="post">
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" value="{{ last_username }}" name="_username" id="inputEmail" class="form-control" autocomplete="email" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" name="_password" id="inputPassword" class="form-control" autocomplete="current-password" required>
                        </div>

                        <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">

                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Sign in</button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <p>Don't have an account? <a href="{{ path('app_register') }}">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
```

### 3.2 Create Registration Template

**File:** `templates/security/register.html.twig` (NEW)

```twig
{% extends 'base.html.twig' %}

{% block title %}Register - Pokefony{% endblock %}

{% block body %}
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-4">
                    <h2 class="card-title text-center mb-4">Register</h2>

                    {{ form_start(registrationForm) }}
                        <div class="mb-3">
                            {{ form_label(registrationForm.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.email) }}
                            {{ form_errors(registrationForm.email) }}
                        </div>

                        <div class="mb-3">
                            {{ form_label(registrationForm.password.first, 'Password', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.password.first) }}
                            {{ form_errors(registrationForm.password.first) }}
                        </div>

                        <div class="mb-3">
                            {{ form_label(registrationForm.password.second, 'Confirm Password', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.password.second) }}
                            {{ form_errors(registrationForm.password.second) }}
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    {{ form_end(registrationForm) }}

                    <div class="text-center mt-3">
                        <p>Already have an account? <a href="{{ path('app_login') }}">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
```

---

## PHASE 4: Navigation Bar Updates

### 4.1 Update Base Template

**File:** `templates/base.html.twig` (MODIFY)

Update the navbar section (around line 25-40) to add authentication links. Replace the existing `<nav>` content with:

```twig
<nav class="navbar navbar-expand navbar-dark bg-primary d-flex justify-content-between px-4">
    <div class="navbar-brand fw-bold">
        POKEFONY
    </div>

    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link active fw-bold" href="{{ path('app_pokedex_region', {region: 'national', page: 1}) }}" aria-current="page">
                Pokédex
                <span class="visually-hidden">(current)</span>
            </a>
        </li>
    </ul>

    <ul class="nav navbar-nav ms-auto">
        {% if is_granted('ROLE_USER') %}
            <li class="nav-item">
                <span class="nav-link text-white">{{ app.user.email }}</span>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="{{ path('app_logout') }}">Logout</a>
            </li>
        {% else %}
            <li class="nav-item">
                <a class="nav-link fw-bold" href="{{ path('app_login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" href="{{ path('app_register') }}">Register</a>
            </li>
        {% endif %}
    </ul>
</nav>
```

---

## PHASE 5: Database Migration

### 5.1 Generate and Run Migration

Run commands:
```bash
php bin/console doctrine:migrations:diff
php bin/console doctrine:migrations:migrate
```

This creates the `user` table with columns: id, email, roles (JSON), password.

---

## Testing & Verification

After implementation, verify:

- [ ] Can register a new account with email and password
- [ ] Registration validates email format
- [ ] Registration requires password confirmation match
- [ ] Registration requires minimum 6 character password
- [ ] Cannot register with duplicate email
- [ ] Can log in with correct credentials
- [ ] Cannot log in with wrong password
- [ ] Cannot log in with non-existent email
- [ ] Error messages display correctly on login page
- [ ] Success message displays after registration
- [ ] Can log out successfully
- [ ] Navbar shows "Login" and "Register" when logged out
- [ ] Navbar shows user email and "Logout" when logged in
- [ ] Redirects to Pokédex after login
- [ ] Redirects to Pokédex after logout
- [ ] Already logged-in users redirected from /login and /register
- [ ] Remember me keeps session alive (test by closing/reopening browser)
- [ ] Session persists across page navigation

---

## Critical Files Summary

### Files to Modify (2 existing files)
1. **config/packages/security.yaml** - Enable form_login, logout, remember_me, access_control
2. **templates/base.html.twig** - Add authentication links to navbar

### Files to Create (4 new files)
1. **src/Form/RegistrationFormType.php** - Registration form with email and password validation
2. **src/Controller/SecurityController.php** - Login, register, logout routes with password hashing
3. **templates/security/login.html.twig** - Login page with form
4. **templates/security/register.html.twig** - Registration page with form

### Database Migration
- Run `php bin/console doctrine:migrations:diff` to generate migration for `user` table
- Run `php bin/console doctrine:migrations:migrate` to apply migration

---

## Security Features

### Password Security
- Passwords hashed using auto hasher (bcrypt with appropriate cost)
- Password confirmation required during registration
- Minimum 6 character password length enforced
- Password never stored in plain text

### Session Security
- CSRF tokens on all forms (login, registration)
- Sessions managed by Symfony security component
- Remember me uses secure hashing with kernel secret
- Sessions expire appropriately

### Route Protection
- Login and register routes are PUBLIC_ACCESS
- Future user-specific routes can be protected with ROLE_USER
- Logged-in users redirected away from login/register pages

---

## Future Enhancements (Post-MVP)

After authentication is working, you can add:

1. **Password Reset** - Forgot password flow with email verification
2. **Email Confirmation** - Require email verification before login
3. **OAuth Login** - Login with Google, GitHub, Discord
4. **Profile Page** - User settings and profile customization
5. **User Features** - Favorites, teams, collection tracking, etc.

---

## Implementation Notes

### Why Form Login?
- Simple to implement (Symfony built-in)
- No external dependencies required
- Full control over user data
- Works in local development
- Can add OAuth later if needed

### Database Schema
The User entity already exists with the correct structure:
- `id` - Primary key (auto-increment)
- `email` - Unique identifier (VARCHAR 180)
- `roles` - User roles (JSON array)
- `password` - Hashed password (VARCHAR 255)

### Symfony Version Compatibility
- Uses Symfony 8 attribute-based routing (`#[Route]`)
- Uses PHP 8.4 constructor property promotion
- Compatible with Doctrine 3.5
- Uses modern Symfony security component

---

## Phase-by-Phase Implementation Order

**Phase 1: Security Configuration** (30 minutes)
1. Update `config/packages/security.yaml`
2. Generate and run migration for user table

**Phase 2: Registration** (1 hour)
1. Create `RegistrationFormType`
2. Create `SecurityController` with `register()` method
3. Create `register.html.twig` template

**Phase 3: Login/Logout** (30 minutes)
1. Add `login()` method to `SecurityController`
2. Create `login.html.twig` template
3. Add `logout()` method (blank, handled by firewall)

**Phase 4: Navigation** (15 minutes)
1. Update `base.html.twig` navbar with conditional links

**Phase 5: Testing** (30 minutes)
1. Test registration flow
2. Test login/logout flow
3. Verify security protections
4. Check edge cases

**Total Estimated Time: 3 hours**
