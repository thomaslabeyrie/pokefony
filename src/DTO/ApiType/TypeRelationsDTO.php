<?php

namespace App\DTO\ApiType;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class TypeRelationsDTO
{
    /** @var NamedResourceDTO[] */
    #[SerializedName('no_damage_to')]
    private array $noDamageTo;

    /** @var NamedResourceDTO[] */
    #[SerializedName('half_damage_to')]
    private array $halfDamageTo;

    /** @var NamedResourceDTO[] */
    #[SerializedName('double_damage_to')]
    private array $doubleDamageTo;

    /** @var NamedResourceDTO[] */
    #[SerializedName('no_damage_from')]
    private array $noDamageFrom;

    /** @var NamedResourceDTO[] */
    #[SerializedName('half_damage_from')]
    private array $halfDamageFrom;

    /** @var NamedResourceDTO[] */
    #[SerializedName('double_damage_from')]
    private array $doubleDamageFrom;

    /**
     * @return NamedResourceDTO[]
     */
    public function getNoDamageTo(): array
    {
        return $this->noDamageTo;
    }

    /**
     * @param NamedResourceDTO[] $noDamageTo
     */
    public function setNoDamageTo(array $noDamageTo): self
    {
        $this->noDamageTo = $noDamageTo;

        return $this;
    }

    /**
     * @return NamedResourceDTO[]
     */
    public function getHalfDamageTo(): array
    {
        return $this->halfDamageTo;
    }

    /**
     * @param NamedResourceDTO[] $halfDamageTo
     */
    public function setHalfDamageTo(array $halfDamageTo): self
    {
        $this->halfDamageTo = $halfDamageTo;

        return $this;
    }

    /**
     * @return NamedResourceDTO[]
     */
    public function getDoubleDamageTo(): array
    {
        return $this->doubleDamageTo;
    }

    /**
     * @param NamedResourceDTO[] $doubleDamageTo
     */
    public function setDoubleDamageTo(array $doubleDamageTo): self
    {
        $this->doubleDamageTo = $doubleDamageTo;

        return $this;
    }

    /**
     * @return NamedResourceDTO[]
     */
    public function getNoDamageFrom(): array
    {
        return $this->noDamageFrom;
    }

    /**
     * @param NamedResourceDTO[] $noDamageFrom
     */
    public function setNoDamageFrom(array $noDamageFrom): self
    {
        $this->noDamageFrom = $noDamageFrom;

        return $this;
    }

    /**
     * @return NamedResourceDTO[]
     */
    public function getHalfDamageFrom(): array
    {
        return $this->halfDamageFrom;
    }

    /**
     * @param NamedResourceDTO[] $halfDamageFrom
     */
    public function setHalfDamageFrom(array $halfDamageFrom): self
    {
        $this->halfDamageFrom = $halfDamageFrom;

        return $this;
    }

    /**
     * @return NamedResourceDTO[]
     */
    public function getDoubleDamageFrom(): array
    {
        return $this->doubleDamageFrom;
    }

    /**
     * @param NamedResourceDTO[] $doubleDamageFrom
     */
    public function setDoubleDamageFrom(array $doubleDamageFrom): self
    {
        $this->doubleDamageFrom = $doubleDamageFrom;

        return $this;
    }
}
