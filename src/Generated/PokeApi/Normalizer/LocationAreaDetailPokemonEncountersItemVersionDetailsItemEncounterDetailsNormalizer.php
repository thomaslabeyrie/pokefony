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

class LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('min_level', $data)) {
            $object->setMinLevel($data['min_level']);
            unset($data['min_level']);
        }
        if (\array_key_exists('max_level', $data)) {
            $object->setMaxLevel($data['max_level']);
            unset($data['max_level']);
        }
        if (\array_key_exists('condition_values', $data)) {
            $object->setConditionValues($this->denormalizer->denormalize($data['condition_values'], \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValues::class, 'json', $context));
            unset($data['condition_values']);
        }
        if (\array_key_exists('chance', $data)) {
            $object->setChance($data['chance']);
            unset($data['chance']);
        }
        if (\array_key_exists('method', $data)) {
            $object->setMethod($this->denormalizer->denormalize($data['method'], \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethod::class, 'json', $context));
            unset($data['method']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['min_level'] = $data->getMinLevel();
        $dataArray['max_level'] = $data->getMaxLevel();
        if ($data->isInitialized('conditionValues') && null !== $data->getConditionValues()) {
            $dataArray['condition_values'] = $this->normalizer->normalize($data->getConditionValues(), 'json', $context);
        }
        $dataArray['chance'] = $data->getChance();
        $dataArray['method'] = $this->normalizer->normalize($data->getMethod(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails::class => false];
    }
}
