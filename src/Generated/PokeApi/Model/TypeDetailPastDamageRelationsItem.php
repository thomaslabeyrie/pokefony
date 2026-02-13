<?php

namespace App\Generated\PokeApi\Model;

class TypeDetailPastDamageRelationsItem extends \ArrayObject
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
     * @var TypeDetailPastDamageRelationsItemGeneration
     */
    protected $generation;
    /**
     * @var TypeDetailPastDamageRelationsItemDamageRelations
     */
    protected $damageRelations;

    public function getGeneration(): TypeDetailPastDamageRelationsItemGeneration
    {
        return $this->generation;
    }

    public function setGeneration(TypeDetailPastDamageRelationsItemGeneration $generation): self
    {
        $this->initialized['generation'] = true;
        $this->generation = $generation;

        return $this;
    }

    public function getDamageRelations(): TypeDetailPastDamageRelationsItemDamageRelations
    {
        return $this->damageRelations;
    }

    public function setDamageRelations(TypeDetailPastDamageRelationsItemDamageRelations $damageRelations): self
    {
        $this->initialized['damageRelations'] = true;
        $this->damageRelations = $damageRelations;

        return $this;
    }
}
