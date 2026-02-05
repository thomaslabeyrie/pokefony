# Pokefony - Codebase Overview

**Last Updated:** February 2, 2026  
**Version:** 1.0  
**Framework:** Symfony 8.0 (PHP 8.4+)

---

## Table of Contents

1. [Project Summary](#project-summary)
2. [What is This Application?](#what-is-this-application)
3. [Technology Stack](#technology-stack)
4. [Architecture Overview](#architecture-overview)
5. [Core Features](#core-features)
6. [Database Schema](#database-schema)
7. [Key Components](#key-components)
8. [Directory Structure](#directory-structure)
9. [Frontend Technologies](#frontend-technologies)
10. [External Dependencies](#external-dependencies)
11. [Security & Authentication](#security--authentication)
12. [How the Application Works](#how-the-application-works)

---

## Project Summary

**Pokefony** is a web application that allows users to browse Pokémon from different regions, mark their favorites, and create teams of up to 6 Pokémon. The application integrates with the [PokeAPI](https://pokeapi.co/) to fetch real-time Pokémon data and provides an interactive, modern user experience built with Symfony and Hotwire Turbo.

---

## What is This Application?

Think of Pokefony as a "Pokémon team builder and manager." Here's what users can do:

1. **Browse Pokémon by Region** - View Pokémon from different game regions (Kanto, Johto, Hoenn, etc.) in a paginated list
2. **View Detailed Information** - See comprehensive stats, types, abilities, evolution chains, and type effectiveness for each Pokémon
3. **Save Favorites** - Mark Pokémon as favorites for quick access
4. **Build Teams** - Create named teams with up to 6 Pokémon each
5. **Manage Multiple Teams** - Create and organize multiple teams simultaneously
6. **User Accounts** - Register and login to save personal favorites and teams

---

## Technology Stack

### Backend

- **PHP:** 8.4+
- **Framework:** Symfony 8.0
- **ORM:** Doctrine ORM 3.5
- **Database:** PostgreSQL (via Docker)
- **HTTP Client:** Symfony HttpClient (for API calls)
- **Caching:** Symfony Cache component

### Frontend

- **Template Engine:** Twig
- **CSS Framework:** Bootstrap 5
- **Icons:** Bootstrap Icons
- **JavaScript:** Stimulus (Hotwire)
- **AJAX Navigation:** Turbo (Hotwire UX)
- **Asset Management:** Symfony AssetMapper

### Infrastructure

- **Containerization:** Docker & Docker Compose
- **Web Server:** Symfony Local Server
- **Database Admin:** Adminer (included)

### Development Tools

- **Testing:** PHPUnit
- **Static Analysis:** PHPStan
- **Database Migrations:** Doctrine Migrations

---

## Architecture Overview

Pokefony follows the **MVC (Model-View-Controller)** architecture pattern with service-oriented design principles:

```
┌─────────────┐
│   Browser   │
└──────┬──────┘
       │
       ▼
┌─────────────────────────────────┐
│      Controllers                │ ◄─── Routes
│  (Handle HTTP Requests)         │
└────────┬────────────────────────┘
         │
         ├─────────► Services ────────► External API (PokeAPI)
         │           (Business Logic)
         │
         ├─────────► Repositories ───► Doctrine ORM
         │           (Data Access)              │
         │                                      ▼
         ▼                                 Database
    Twig Templates ────────────────────► Response (HTML)
```

---

## Core Features

### 1. **Pokédex Browser**

- Browse Pokémon by region (National, Kanto, Johto, Hoenn, etc.)
- Paginated listings (20 per page)
- Search functionality by name or ID
- Visual indicators for favorites and team membership

### 2. **Pokémon Details**

- Complete stats (HP, Attack, Defense, Special Attack, Special Defense, Speed)
- Type information with visual badges
- Abilities (regular and hidden)
- Evolution chains
- Type effectiveness calculator (weaknesses, resistances, immunities)
- Animated and static sprites from multiple generations

### 3. **Favorites System**

- Toggle favorite status with a single click
- Dedicated favorites page showing all saved Pokémon
- Real-time UI updates using Turbo Frames
- Persistent storage in database

### 4. **Team Management**

- Create multiple teams with custom names
- Add up to 6 Pokémon per team
- Remove Pokémon from teams
- Rename teams
- Delete teams
- Visual team composition on detail pages
- Quick-add modal from Pokédex view

### 5. **User Authentication**

- User registration with email validation
- Secure login/logout
- Password hashing (Symfony Security)
- Protected routes requiring authentication

---

## Database Schema

### **User** Table

- `id` (Primary Key)
- `email` (Unique)
- `password` (Hashed)
- `roles` (Array)
- **Relationships:**
    - One-to-Many with `Team`
    - Many-to-Many with `Pokemon` (favorites)

### **Pokemon** Table

- `id` (Primary Key)
- `pokemon_id` (PokeAPI ID)
- `name`
- `types` (JSON array)
- `sprite_url`
- **Relationships:**
    - Many-to-Many with `User` (favorites)
    - Many-to-Many with `Team`

### **Team** Table

- `id` (Primary Key)
- `name` (Unique per user)
- `user_id` (Foreign Key to User)
- `created_at`
- **Relationships:**
    - Many-to-One with `User`
    - Many-to-Many with `Pokemon`

### **Join Tables**

- `user_pokemon` - Links users to favorite Pokémon
- `team_pokemon` - Links teams to their Pokémon

---

## Key Components

### Controllers

#### **HomeController**

- **Route:** `/`
- **Purpose:** Landing page

#### **PokedexController**

- **Routes:**
    - `/pokedex/{region}/{page}` - Browse by region
    - `/pokemon/{name}` - Individual Pokémon details
    - `/search` - Search functionality
- **Purpose:** Main Pokédex browsing and detail views

#### **FavoritesController**

- **Routes:**
    - `/favorites` - View all favorites
    - `/favorites/toggle/{pokemonId}` - Toggle favorite status
- **Purpose:** Manage user's favorite Pokémon

#### **TeamsController**

- **Routes:**
    - `/teams` - List all teams
    - `/teams/{id}` - View team details
    - `/teams/modal/{pokemonId}` - Modal for adding to team
    - `/teams/create` - Create new team
    - `/teams/{teamId}/add/{pokemonId}` - Add Pokémon to team
    - `/teams/{teamId}/remove/{pokemonId}` - Remove from team
    - `/teams/{id}/rename` - Rename team
    - `/teams/{id}/delete` - Delete team
- **Purpose:** Complete team management

#### **RegistrationController**

- **Route:** `/register`
- **Purpose:** User registration

#### **LoginController**

- **Routes:** `/login`, `/logout`
- **Purpose:** User authentication

### Services

#### **PokeApiService**

- **Responsibility:** External API integration
- **Key Methods:**
    - `getPokemonsByRegion($region, $page)` - Fetch paginated Pokémon list
    - `getPokemon($identifier)` - Fetch detailed Pokémon data
- **Features:**
    - Caching (24-hour TTL)
    - HTTP client for PokeAPI calls
    - DTO transformation

#### **PokemonManager**

- **Responsibility:** Pokemon entity management
- **Key Methods:**
    - `getOrCreatePokemon($identifier)` - Get from DB or fetch from API
- **Features:**
    - Prevents duplicate Pokemon entries
    - Automatic sprite and type storage

#### **TeamManager**

- **Responsibility:** Team business logic
- **Key Methods:**
    - `createTeam($user, $teamName, $pokemonId)` - Create new team
    - `addPokemonToTeam($team, $pokemonId)` - Add Pokémon
    - `removePokemonFromTeam($team, $pokemonId)` - Remove Pokémon
    - `getAvailableTeamsForPokemon($user, $pokemonId)` - Filter teams
- **Features:**
    - Team size validation (max 6 Pokémon)
    - Duplicate prevention

### DTOs (Data Transfer Objects)

The application uses DTOs to structure data from PokeAPI:

- **PokemonDTO** - Main Pokémon data
- **SpeciesDTO** - Species-specific information
- **StatDTO** - Individual stats
- **TypeDTO** - Type information
- **TypeEffectivenessDTO** - Type matchup calculations
- **AbilityDTO** - Ability details
- **EvolutionChainDTO** - Evolution data
- **SpritesDTO** - Image URLs for sprites
- **AnimatedSpritesDTO** - Animated sprite URLs
- **GenerationSpritesDTO** - Generation-specific sprites

---

## Directory Structure

```
pokefony/
├── assets/                      # Frontend assets
│   ├── app.js                   # Main JavaScript entry
│   ├── controllers/             # Stimulus controllers
│   │   ├── csrf_protection_controller.js
│   │   ├── favorite_toast_controller.js
│   │   ├── favorites_list_controller.js
│   │   ├── team_modal_controller.js
│   │   └── team_rename_controller.js
│   ├── styles/                  # CSS files
│   └── vendor/                  # NPM packages (managed by AssetMapper)
├── bin/                         # Executables
├── config/                      # Configuration files
│   ├── packages/                # Bundle configurations
│   └── routes/                  # Routing configurations
├── migrations/                  # Database migrations
├── public/                      # Web root
│   ├── index.php               # Front controller
│   └── adminer.php             # Database admin tool
├── src/
│   ├── Controller/             # HTTP request handlers
│   ├── DTO/                    # Data Transfer Objects
│   ├── Entity/                 # Database entities
│   ├── Form/                   # Form types
│   ├── Repository/             # Data access layer
│   └── Service/                # Business logic
├── templates/                   # Twig templates
│   ├── base.html.twig          # Base layout
│   ├── favorites/              # Favorites views
│   ├── home/                   # Home page
│   ├── pokemon/                # Pokédex views
│   ├── registration/           # Registration forms
│   ├── security/               # Login forms
│   └── teams/                  # Team management views
├── tests/                       # Unit/Integration tests
├── var/                        # Cache, logs, sessions
├── vendor/                     # Composer dependencies
├── compose.yaml                # Docker Compose configuration
├── composer.json               # PHP dependencies
└── importmap.php               # Frontend dependencies
```

---

## Frontend Technologies

### Hotwire Turbo

- **Purpose:** SPA-like navigation without full page reloads
- **Usage:**
    - Turbo Frames for partial page updates (favorites, modals)
    - Turbo Streams for real-time updates
    - Minimal JavaScript required

### Stimulus Controllers

1. **csrf_protection_controller.js** - Handles CSRF token injection
2. **favorite_toast_controller.js** - Toast notifications for favorite actions
3. **favorites_list_controller.js** - Manages favorites list interactions
4. **team_modal_controller.js** - Controls team addition modal
5. **team_modal_trigger_controller.js** - Triggers team modal opening
6. **team_rename_controller.js** - Inline team renaming

### Bootstrap 5

- Responsive grid system
- Pre-built components (modals, cards, badges)
- Bootstrap Icons for visual elements

---

## External Dependencies

### PokeAPI

- **URL:** https://pokeapi.co/api/v2/
- **Purpose:** Source of all Pokémon data
- **Endpoints Used:**
    - `/pokedex/{region}` - Regional Pokédex listings
    - `/pokemon/{id or name}` - Detailed Pokémon data
    - `/pokemon-species/{id}` - Species data (evolution, etc.)
    - `/type/{id}` - Type effectiveness data

### Caching Strategy

- All API responses cached for 24 hours
- Reduces API load and improves performance
- Cache keys: `pokedex_{region}_page_{page}`, `pokemon_{identifier}`

---

## Security & Authentication

### User Authentication

- **Provider:** Symfony Security Component
- **Password Hashing:** Native PHP password hashing (bcrypt/argon2)
- **Session Management:** Symfony session handling
- **CSRF Protection:** Enabled on all forms

### Route Protection

- Most routes require `ROLE_USER` authentication
- Implemented via `#[IsGranted('ROLE_USER')]` attribute
- Anonymous access: Home, Pokédex browsing, Pokémon details
- Protected: Favorites, Teams, Registration

### Data Validation

- Email uniqueness constraint
- Team name uniqueness per user
- Form validation via Symfony Validator
- Input sanitization on all user inputs

---

## How the Application Works

### User Flow Example: Adding a Pokémon to a Team

1. **User browses Pokédex**
    - PokedexController fetches data from PokeAPI (cached)
    - Twig template renders Pokémon grid

2. **User clicks "Add to Team" button**
    - Stimulus controller triggers modal
    - Turbo Frame loads modal content via `/teams/modal/{pokemonId}`
    - TeamsController returns modal with available teams

3. **User selects "Create New Team"**
    - Form submitted to `/teams/create`
    - TeamsController validates input
    - TeamManager creates team via PokemonManager
    - PokemonManager checks if Pokemon exists in DB
    - If not, fetches from PokeAPI and creates entity
    - Team entity created with Pokemon relationship
    - Database persisted via Doctrine

4. **User sees updated UI**
    - Turbo Frame updates without page reload
    - Team badge appears on Pokémon card
    - Success notification displayed

### Data Flow: Viewing a Pokémon

```
User Request
    ↓
PokedexController::show($name)
    ↓
PokeApiService::getPokemon($name)
    ↓
Check Cache
    ├─ Hit: Return cached DTO
    └─ Miss: HTTP Request to PokeAPI
              ↓
         Parse JSON Response
              ↓
         Create DTOs (Pokemon, Stats, Types, etc.)
              ↓
         Store in Cache
              ↓
         Return DTO
    ↓
Controller passes DTO to Twig
    ↓
Template renders HTML
    ↓
Response sent to browser
```

---

## Getting Started (For Developers)

### Prerequisites

- PHP 8.4+
- Composer
- Docker & Docker Compose
- Symfony CLI (optional but recommended)

### Installation Steps

1. **Clone repository**

    ```bash
    git clone <repository-url>
    cd pokefony
    ```

2. **Install dependencies**

    ```bash
    composer install
    ```

3. **Start Docker containers**

    ```bash
    docker compose up -d
    ```

4. **Run database migrations**

    ```bash
    php bin/console doctrine:migrations:migrate
    ```

5. **Start Symfony server**

    ```bash
    symfony server:start
    ```

6. **Access application**
    - App: http://localhost:8000
    - Adminer: http://localhost:8000/adminer.php

### Environment Configuration

- Database connection configured in `compose.yaml`
- Environment variables in `.env` (not tracked in git)
- PokeAPI URL hardcoded in service (public API, no auth needed)

---

## Key Design Decisions

1. **Caching Strategy**
    - 24-hour cache for Pokémon data (static, rarely changes)
    - Improves performance and reduces API dependency

2. **Entity Reuse**
    - Pokemon entities shared between favorites and teams
    - Prevents data duplication
    - Uses Many-to-Many relationships

3. **Hotwire Turbo**
    - Chosen for SPA-like experience with minimal JavaScript
    - Server-rendered HTML with progressive enhancement
    - Better SEO and accessibility than pure client-side rendering

4. **Service Layer**
    - Business logic separated from controllers
    - Services are reusable and testable
    - Clear separation of concerns

5. **DTO Pattern**
    - Transforms raw API responses into typed objects
    - Provides IDE autocompletion and type safety
    - Easier to maintain and refactor

---

## Future Enhancement Ideas

Based on the codebase structure, potential features could include:

- Team analysis (type coverage, weaknesses)
- Battle simulation between teams
- Pokémon comparison tool
- Advanced filtering and sorting
- Export/import teams
- Public team sharing
- User profiles and avatars
- Team strategy notes
- Move set management

---

## Troubleshooting

### Common Issues

1. **"No route found" errors**
    - Clear cache: `php bin/console cache:clear`

2. **Database connection failed**
    - Ensure Docker containers are running: `docker compose ps`
    - Check credentials in `compose.yaml`

3. **PokeAPI requests failing**
    - Check internet connection
    - Clear cache: `php bin/console cache:pool:clear cache.app`

4. **Missing sprites/images**
    - PokeAPI sprite URLs may change; update DTO mappings

---

## Credits

- **Pokémon Data:** [PokeAPI](https://pokeapi.co/)
- **Framework:** [Symfony](https://symfony.com/)
- **Frontend:** [Hotwire Turbo](https://turbo.hotwired.dev/)
- **UI:** [Bootstrap](https://getbootstrap.com/)

---

**End of Report**
