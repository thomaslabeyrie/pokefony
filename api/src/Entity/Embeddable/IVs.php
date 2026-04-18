<?php

namespace App\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Embeddable;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Embeddable]
class IVs
{
    #[ORM\Column]
    #[Assert\Range(min: 0, max: 31)]
    private ?int $hp = null;

    #[ORM\Column]
    #[Assert\Range(min: 0, max: 31)]
    private ?int $atk = null;

    #[ORM\Column]
    #[Assert\Range(min: 0, max: 31)]
    private ?int $def = null;

    #[ORM\Column]
    #[Assert\Range(min: 0, max: 31)]
    private ?int $spAtk = null;

    #[ORM\Column]
    #[Assert\Range(min: 0, max: 31)]
    private ?int $spDef = null;

    #[ORM\Column]
    #[Assert\Range(min: 0, max: 31)]
    private ?int $speed = null;

    public function getHp(): int
    {
        return $this->hp;
    }

    public function setHp(int $hp): static
    {
        $this->hp = $hp;
        return $this;
    }

    public function getAtk(): int
    {
        return $this->atk;
    }

    public function setAtk(int $atk): static
    {
        $this->atk = $atk;
        return $this;
    }

    public function getDef(): int
    {
        return $this->def;
    }

    public function setDef(int $def): static
    {
        $this->def = $def;
        return $this;
    }

    public function getSpAtk(): int
    {
        return $this->spAtk;
    }

    public function setSpAtk(int $spAtk): static
    {
        $this->spAtk = $spAtk;
        return $this;
    }

    public function getSpDef(): int
    {
        return $this->spDef;
    }

    public function setSpDef(int $spDef): static
    {
        $this->spDef = $spDef;
        return $this;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): static
    {
        $this->speed = $speed;
        return $this;
    }
}
