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
class PokedexDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\PokedexDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\PokedexDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\PokedexDetail();
        if (\array_key_exists('is_main_series', $data) && \is_int($data['is_main_series'])) {
            $data['is_main_series'] = (bool) $data['is_main_series'];
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
        if (\array_key_exists('is_main_series', $data)) {
            $object->setIsMainSeries($data['is_main_series']);
            unset($data['is_main_series']);
        }
        if (\array_key_exists('descriptions', $data)) {
            $values = [];
            foreach ($data['descriptions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\PokedexDescription::class, 'json', $context);
            }
            $object->setDescriptions($values);
            unset($data['descriptions']);
        }
        if (\array_key_exists('names', $data)) {
            $values_1 = [];
            foreach ($data['names'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\PokedexName::class, 'json', $context);
            }
            $object->setNames($values_1);
            unset($data['names']);
        }
        if (\array_key_exists('pokemon_entries', $data)) {
            $values_2 = [];
            foreach ($data['pokemon_entries'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \App\Generated\PokeApi\Model\PokedexDetailPokemonEntriesItem::class, 'json', $context);
            }
            $object->setPokemonEntries($values_2);
            unset($data['pokemon_entries']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($this->denormalizer->denormalize($data['region'], \App\Generated\PokeApi\Model\RegionSummary::class, 'json', $context));
            unset($data['region']);
        }
        if (\array_key_exists('version_groups', $data)) {
            $values_3 = [];
            foreach ($data['version_groups'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \App\Generated\PokeApi\Model\PokedexDetailVersionGroupsItem::class, 'json', $context);
            }
            $object->setVersionGroups($values_3);
            unset($data['version_groups']);
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
        if ($data->isInitialized('isMainSeries') && null !== $data->getIsMainSeries()) {
            $dataArray['is_main_series'] = $data->getIsMainSeries();
        }
        $dataArray['region'] = $this->normalizer->normalize($data->getRegion(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\PokedexDetail::class => false];
    }
}