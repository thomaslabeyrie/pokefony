<?php

namespace App\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Embeddable;

#[ORM\Embeddable]
class Moveset
{
    #[ORM\Column(nullable: true)]
    private ?string $move1 = null;

    #[ORM\Column(nullable: true)]
    private ?string $move2 = null;

    #[ORM\Column(nullable: true)]
    private ?string $move3 = null;

    #[ORM\Column(nullable: true)]
    private ?string $move4 = null;

    public function getMove1(): ?string
    {
        return $this->move1;
    }

    public function setMove1(?string $move1): static
    {
        $this->move1 = $move1;

        return $this;
    }

    public function getMove2(): ?string
    {
        return $this->move2;
    }

    public function setMove2(?string $move2): static
    {
        $this->move2 = $move2;

        return $this;
    }

    public function getMove3(): ?string
    {
        return $this->move3;
    }

    public function setMove3(?string $move3): static
    {
        $this->move3 = $move3;

        return $this;
    }

    public function getMove4(): ?string
    {
        return $this->move4;
    }

    public function setMove4(?string $move4): static
    {
        $this->move4 = $move4;

        return $this;
    }
}
