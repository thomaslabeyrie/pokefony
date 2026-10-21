<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

readonly class RegistrationRequest
{
    public function __construct(
        #[Assert\NotBlank]
        #[Assert\Email]
        public string $email = '',

        #[Assert\NotBlank]
        #[Assert\PasswordStrength]
        public string $plainPassword = '',

        #[Assert\IsTrue]
        public bool $agreeTerms = false,
    )
    {}
}
