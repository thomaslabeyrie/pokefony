<?php

namespace App\Generated\PokeApi\Model;

class TypeDetailDamageRelations extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<TypeDetailDamageRelationsNoDamageToItem>
     */
    protected $noDamageTo;
    /**
     * @var list<TypeDetailDamageRelationsHalfDamageToItem>
     */
    protected $halfDamageTo;
    /**
     * @var list<TypeDetailDamageRelationsDoubleDamageToItem>
     */
    protected $doubleDamageTo;
    /**
     * @var list<TypeDetailDamageRelationsNoDamageFromItem>
     */
    protected $noDamageFrom;
    /**
     * @var list<TypeDetailDamageRelationsHalfDamageFromItem>
     */
    protected $halfDamageFrom;
    /**
     * @var list<TypeDetailDamageRelationsDoubleDamageFromItem>
     */
    protected $doubleDamageFrom;
    /**
     * @return list<TypeDetailDamageRelationsNoDamageToItem>
     */
    public function getNoDamageTo(): array
    {
        return $this->noDamageTo;
    }
    /**
     * @param list<TypeDetailDamageRelationsNoDamageToItem> $noDamageTo
     *
     * @return self
     */
    public function setNoDamageTo(array $noDamageTo): self
    {
        $this->initialized['noDamageTo'] = true;
        $this->noDamageTo = $noDamageTo;
        return $this;
    }
    /**
     * @return list<TypeDetailDamageRelationsHalfDamageToItem>
     */
    public function getHalfDamageTo(): array
    {
        return $this->halfDamageTo;
    }
    /**
     * @param list<TypeDetailDamageRelationsHalfDamageToItem> $halfDamageTo
     *
     * @return self
     */
    public function setHalfDamageTo(array $halfDamageTo): self
    {
        $this->initialized['halfDamageTo'] = true;
        $this->halfDamageTo = $halfDamageTo;
        return $this;
    }
    /**
     * @return list<TypeDetailDamageRelationsDoubleDamageToItem>
     */
    public function getDoubleDamageTo(): array
    {
        return $this->doubleDamageTo;
    }
    /**
     * @param list<TypeDetailDamageRelationsDoubleDamageToItem> $doubleDamageTo
     *
     * @return self
     */
    public function setDoubleDamageTo(array $doubleDamageTo): self
    {
        $this->initialized['doubleDamageTo'] = true;
        $this->doubleDamageTo = $doubleDamageTo;
        return $this;
    }
    /**
     * @return list<TypeDetailDamageRelationsNoDamageFromItem>
     */
    public function getNoDamageFrom(): array
    {
        return $this->noDamageFrom;
    }
    /**
     * @param list<TypeDetailDamageRelationsNoDamageFromItem> $noDamageFrom
     *
     * @return self
     */
    public function setNoDamageFrom(array $noDamageFrom): self
    {
        $this->initialized['noDamageFrom'] = true;
        $this->noDamageFrom = $noDamageFrom;
        return $this;
    }
    /**
     * @return list<TypeDetailDamageRelationsHalfDamageFromItem>
     */
    public function getHalfDamageFrom(): array
    {
        return $this->halfDamageFrom;
    }
    /**
     * @param list<TypeDetailDamageRelationsHalfDamageFromItem> $halfDamageFrom
     *
     * @return self
     */
    public function setHalfDamageFrom(array $halfDamageFrom): self
    {
        $this->initialized['halfDamageFrom'] = true;
        $this->halfDamageFrom = $halfDamageFrom;
        return $this;
    }
    /**
     * @return list<TypeDetailDamageRelationsDoubleDamageFromItem>
     */
    public function getDoubleDamageFrom(): array
    {
        return $this->doubleDamageFrom;
    }
    /**
     * @param list<TypeDetailDamageRelationsDoubleDamageFromItem> $doubleDamageFrom
     *
     * @return self
     */
    public function setDoubleDamageFrom(array $doubleDamageFrom): self
    {
        $this->initialized['doubleDamageFrom'] = true;
        $this->doubleDamageFrom = $doubleDamageFrom;
        return $this;
    }
}