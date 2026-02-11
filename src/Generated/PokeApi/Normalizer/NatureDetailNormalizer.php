<?php

namespace App\Generated\PokeApi\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use App\Generated\PokeApi\Runtime\Normalizer\CheckArray;
use App\Generated\PokeApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NatureDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\NatureDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\NatureDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\NatureDetail();
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
        if (\array_key_exists('decreased_stat', $data)) {
            $object->setDecreasedStat($this->denormalizer->denormalize($data['decreased_stat'], \App\Generated\PokeApi\Model\StatSummary::class, 'json', $context));
            unset($data['decreased_stat']);
        }
        if (\array_key_exists('increased_stat', $data)) {
            $object->setIncreasedStat($this->denormalizer->denormalize($data['increased_stat'], \App\Generated\PokeApi\Model\StatSummary::class, 'json', $context));
            unset($data['increased_stat']);
        }
        if (\array_key_exists('likes_flavor', $data)) {
            $object->setLikesFlavor($this->denormalizer->denormalize($data['likes_flavor'], \App\Generated\PokeApi\Model\BerryFlavorSummary::class, 'json', $context));
            unset($data['likes_flavor']);
        }
        if (\array_key_exists('hates_flavor', $data)) {
            $object->setHatesFlavor($this->denormalizer->denormalize($data['hates_flavor'], \App\Generated\PokeApi\Model\BerryFlavorSummary::class, 'json', $context));
            unset($data['hates_flavor']);
        }
        if (\array_key_exists('berries', $data)) {
            $values = [];
            foreach ($data['berries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\BerrySummary::class, 'json', $context);
            }
            $object->setBerries($values);
            unset($data['berries']);
        }
        if (\array_key_exists('pokeathlon_stat_changes', $data)) {
            $values_1 = [];
            foreach ($data['pokeathlon_stat_changes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\NatureDetailPokeathlonStatChangesItem::class, 'json', $context);
            }
            $object->setPokeathlonStatChanges($values_1);
            unset($data['pokeathlon_stat_changes']);
        }
        if (\array_key_exists('move_battle_style_preferences', $data)) {
            $values_2 = [];
            foreach ($data['move_battle_style_preferences'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \App\Generated\PokeApi\Model\NatureBattleStylePreference::class, 'json', $context);
            }
            $object->setMoveBattleStylePreferences($values_2);
            unset($data['move_battle_style_preferences']);
        }
        if (\array_key_exists('names', $data)) {
            $values_3 = [];
            foreach ($data['names'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \App\Generated\PokeApi\Model\NatureName::class, 'json', $context);
            }
            $object->setNames($values_3);
            unset($data['names']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $dataArray['decreased_stat'] = $this->normalizer->normalize($data->getDecreasedStat(), 'json', $context);
        $dataArray['increased_stat'] = $this->normalizer->normalize($data->getIncreasedStat(), 'json', $context);
        $dataArray['likes_flavor'] = $this->normalizer->normalize($data->getLikesFlavor(), 'json', $context);
        $dataArray['hates_flavor'] = $this->normalizer->normalize($data->getHatesFlavor(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\NatureDetail::class => false];
    }
}