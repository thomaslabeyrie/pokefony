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
class GenerationDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\GenerationDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\GenerationDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\GenerationDetail();
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
        if (\array_key_exists('abilities', $data)) {
            $values = [];
            foreach ($data['abilities'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\AbilitySummary::class, 'json', $context);
            }
            $object->setAbilities($values);
            unset($data['abilities']);
        }
        if (\array_key_exists('main_region', $data)) {
            $object->setMainRegion($this->denormalizer->denormalize($data['main_region'], \App\Generated\PokeApi\Model\RegionSummary::class, 'json', $context));
            unset($data['main_region']);
        }
        if (\array_key_exists('moves', $data)) {
            $values_1 = [];
            foreach ($data['moves'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\MoveSummary::class, 'json', $context);
            }
            $object->setMoves($values_1);
            unset($data['moves']);
        }
        if (\array_key_exists('names', $data)) {
            $values_2 = [];
            foreach ($data['names'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \App\Generated\PokeApi\Model\GenerationName::class, 'json', $context);
            }
            $object->setNames($values_2);
            unset($data['names']);
        }
        if (\array_key_exists('pokemon_species', $data)) {
            $values_3 = [];
            foreach ($data['pokemon_species'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \App\Generated\PokeApi\Model\PokemonSpeciesSummary::class, 'json', $context);
            }
            $object->setPokemonSpecies($values_3);
            unset($data['pokemon_species']);
        }
        if (\array_key_exists('types', $data)) {
            $values_4 = [];
            foreach ($data['types'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \App\Generated\PokeApi\Model\TypeSummary::class, 'json', $context);
            }
            $object->setTypes($values_4);
            unset($data['types']);
        }
        if (\array_key_exists('version_groups', $data)) {
            $values_5 = [];
            foreach ($data['version_groups'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \App\Generated\PokeApi\Model\VersionGroupSummary::class, 'json', $context);
            }
            $object->setVersionGroups($values_5);
            unset($data['version_groups']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $dataArray['main_region'] = $this->normalizer->normalize($data->getMainRegion(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\GenerationDetail::class => false];
    }
}