<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

readonly class RegistrationRequest
{
    public function __construct(
        #[Assert\Sequentially([
            new Assert\NotBlank(message: "Please enter your email address."),
            new Assert\Email(message: "Please enter a valid email address."),
            new Assert\Length(max: 180, maxMessage: "Your email address can't be longer than {{ limit }} characters."),
        ])]
        public string $email = '',

        #[Assert\Sequentially([
            new Assert\NotBlank(message: "Please choose a password."),
            new Assert\Length(max: 4096, maxMessage: "Your password is too long."),
            new Assert\PasswordStrength(message: "This password is too easy to guess. Try a longer one, mixing letters, numbers and symbols."),
        ])]
        public string $plainPassword = '',
    )
    {}
}
