<?php

namespace App\PokeApiClient\DTO\Type;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class TypeRelationsDTO
{
    /** @var NamedResourceDTO[] */
    #[SerializedName('no_damage_to')]
    public array $noDamageTo;

    /** @var NamedResourceDTO[] */
    #[SerializedName('half_damage_to')]
    public array $halfDamageTo;

    /** @var NamedResourceDTO[] */
    #[SerializedName('double_damage_to')]
    public array $doubleDamageTo;

    /** @var NamedResourceDTO[] */
    #[SerializedName('no_damage_from')]
    public array $noDamageFrom;

    /** @var NamedResourceDTO[] */
    #[SerializedName('half_damage_from')]
    public array $halfDamageFrom;

    /** @var NamedResourceDTO[] */
    #[SerializedName('double_damage_from')]
    public array $doubleDamageFrom;
}
