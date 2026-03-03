<?php

namespace App\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Embeddable;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Embeddable]
class EVs
{
    #[ORM\Column]
    #[Assert\Range(min: 0, max: 252)]
    private ?int $hp = null;

    #[ORM\Column]
    #[Assert\Range(min: 0, max: 252)]
    private ?int $atk = null;

    #[ORM\Column]
    #[Assert\Range(min: 0, max: 252)]
    private ?int $def = null;

    #[ORM\Column]
    #[Assert\Range(min: 0, max: 252)]
    private ?int $spAtk = null;

    #[ORM\Column]
    #[Assert\Range(min: 0, max: 252)]
    private ?int $spDef = null;

    #[ORM\Column]
    #[Assert\Range(min: 0, max: 252)]
    private ?int $speed = null;

    #[Assert\Callback]
    public function validateTotal(ExecutionContextInterface $context): void
    {
        $total = $this->hp + $this->atk + $this->def
            + $this->spAtk + $this->spDef + $this->speed;

        if ($total > 510) {
            $context->buildViolation('Total EVs cannot exceed 510 (current: {{ total }})')
                ->setParameter('{{ total }}', $total)
                ->addViolation();
        }
    }

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
