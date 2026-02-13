<?php

namespace App\Generated\PokeApi\Normalizer;

use App\Generated\PokeApi\Runtime\Normalizer\CheckArray;
use App\Generated\PokeApi\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PokemonDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\PokemonDetail::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\PokemonDetail::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\PokemonDetail();
        if (\array_key_exists('is_default', $data) && \is_int($data['is_default'])) {
            $data['is_default'] = (bool) $data['is_default'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('base_experience', $data) && null !== $data['base_experience']) {
            $object->setBaseExperience($data['base_experience']);
            unset($data['base_experience']);
        } elseif (\array_key_exists('base_experience', $data) && null === $data['base_experience']) {
            $object->setBaseExperience(null);
        }
        if (\array_key_exists('height', $data) && null !== $data['height']) {
            $object->setHeight($data['height']);
            unset($data['height']);
        } elseif (\array_key_exists('height', $data) && null === $data['height']) {
            $object->setHeight(null);
        }
        if (\array_key_exists('is_default', $data)) {
            $object->setIsDefault($data['is_default']);
            unset($data['is_default']);
        }
        if (\array_key_exists('order', $data) && null !== $data['order']) {
            $object->setOrder($data['order']);
            unset($data['order']);
        } elseif (\array_key_exists('order', $data) && null === $data['order']) {
            $object->setOrder(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($data['weight']);
            unset($data['weight']);
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('abilities', $data)) {
            $values = [];
            foreach ($data['abilities'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\PokemonDetailAbilitiesItem::class, 'json', $context);
            }
            $object->setAbilities($values);
            unset($data['abilities']);
        }
        if (\array_key_exists('past_abilities', $data)) {
            $values_1 = [];
            foreach ($data['past_abilities'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItem::class, 'json', $context);
            }
            $object->setPastAbilities($values_1);
            unset($data['past_abilities']);
        }
        if (\array_key_exists('forms', $data)) {
            $values_2 = [];
            foreach ($data['forms'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \App\Generated\PokeApi\Model\PokemonFormSummary::class, 'json', $context);
            }
            $object->setForms($values_2);
            unset($data['forms']);
        }
        if (\array_key_exists('game_indices', $data)) {
            $values_3 = [];
            foreach ($data['game_indices'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \App\Generated\PokeApi\Model\PokemonGameIndex::class, 'json', $context);
            }
            $object->setGameIndices($values_3);
            unset($data['game_indices']);
        }
        if (\array_key_exists('held_items', $data)) {
            $values_4 = [];
            foreach ($data['held_items'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItem::class, 'json', $context);
            }
            $object->setHeldItems($values_4);
            unset($data['held_items']);
        }
        if (\array_key_exists('location_area_encounters', $data)) {
            $object->setLocationAreaEncounters($data['location_area_encounters']);
            unset($data['location_area_encounters']);
        }
        if (\array_key_exists('moves', $data)) {
            $values_5 = [];
            foreach ($data['moves'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \App\Generated\PokeApi\Model\PokemonDetailMovesItem::class, 'json', $context);
            }
            $object->setMoves($values_5);
            unset($data['moves']);
        }
        if (\array_key_exists('species', $data)) {
            $object->setSpecies($this->denormalizer->denormalize($data['species'], \App\Generated\PokeApi\Model\PokemonSpeciesSummary::class, 'json', $context));
            unset($data['species']);
        }
        if (\array_key_exists('sprites', $data)) {
            $object->setSprites($this->denormalizer->denormalize($data['sprites'], \App\Generated\PokeApi\Model\PokemonDetailSprites::class, 'json', $context));
            unset($data['sprites']);
        }
        if (\array_key_exists('cries', $data)) {
            $object->setCries($this->denormalizer->denormalize($data['cries'], \App\Generated\PokeApi\Model\PokemonDetailCries::class, 'json', $context));
            unset($data['cries']);
        }
        if (\array_key_exists('stats', $data)) {
            $values_6 = [];
            foreach ($data['stats'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \App\Generated\PokeApi\Model\PokemonStat::class, 'json', $context);
            }
            $object->setStats($values_6);
            unset($data['stats']);
        }
        if (\array_key_exists('types', $data)) {
            $values_7 = [];
            foreach ($data['types'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \App\Generated\PokeApi\Model\PokemonDetailTypesItem::class, 'json', $context);
            }
            $object->setTypes($values_7);
            unset($data['types']);
        }
        if (\array_key_exists('past_types', $data)) {
            $values_8 = [];
            foreach ($data['past_types'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \App\Generated\PokeApi\Model\PokemonDetailPastTypesItem::class, 'json', $context);
            }
            $object->setPastTypes($values_8);
            unset($data['past_types']);
        }
        foreach ($data as $key => $value_9) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_9;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('baseExperience')) {
            $dataArray['base_experience'] = $data->getBaseExperience();
        }
        if ($data->isInitialized('height')) {
            $dataArray['height'] = $data->getHeight();
        }
        if ($data->isInitialized('isDefault') && null !== $data->getIsDefault()) {
            $dataArray['is_default'] = $data->getIsDefault();
        }
        if ($data->isInitialized('order')) {
            $dataArray['order'] = $data->getOrder();
        }
        if ($data->isInitialized('weight')) {
            $dataArray['weight'] = $data->getWeight();
        }
        $dataArray['species'] = $this->normalizer->normalize($data->getSpecies(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\PokemonDetail::class => false];
    }
}
