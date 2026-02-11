<?php

namespace App\Generated\PokeApi\Model;

class TypeDetailPastDamageRelationsItemDamageRelations extends \ArrayObject
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
     * @var list<TypeDetailPastDamageRelationsItemDamageRelationsNoDamageToItem>
     */
    protected $noDamageTo;
    /**
     * @var list<TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageToItem>
     */
    protected $halfDamageTo;
    /**
     * @var list<TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageToItem>
     */
    protected $doubleDamageTo;
    /**
     * @var list<TypeDetailPastDamageRelationsItemDamageRelationsNoDamageFromItem>
     */
    protected $noDamageFrom;
    /**
     * @var list<TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageFromItem>
     */
    protected $halfDamageFrom;
    /**
     * @var list<TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageFromItem>
     */
    protected $doubleDamageFrom;
    /**
     * @return list<TypeDetailPastDamageRelationsItemDamageRelationsNoDamageToItem>
     */
    public function getNoDamageTo(): array
    {
        return $this->noDamageTo;
    }
    /**
     * @param list<TypeDetailPastDamageRelationsItemDamageRelationsNoDamageToItem> $noDamageTo
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
     * @return list<TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageToItem>
     */
    public function getHalfDamageTo(): array
    {
        return $this->halfDamageTo;
    }
    /**
     * @param list<TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageToItem> $halfDamageTo
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
     * @return list<TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageToItem>
     */
    public function getDoubleDamageTo(): array
    {
        return $this->doubleDamageTo;
    }
    /**
     * @param list<TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageToItem> $doubleDamageTo
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
     * @return list<TypeDetailPastDamageRelationsItemDamageRelationsNoDamageFromItem>
     */
    public function getNoDamageFrom(): array
    {
        return $this->noDamageFrom;
    }
    /**
     * @param list<TypeDetailPastDamageRelationsItemDamageRelationsNoDamageFromItem> $noDamageFrom
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
     * @return list<TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageFromItem>
     */
    public function getHalfDamageFrom(): array
    {
        return $this->halfDamageFrom;
    }
    /**
     * @param list<TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageFromItem> $halfDamageFrom
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
     * @return list<TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageFromItem>
     */
    public function getDoubleDamageFrom(): array
    {
        return $this->doubleDamageFrom;
    }
    /**
     * @param list<TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageFromItem> $doubleDamageFrom
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