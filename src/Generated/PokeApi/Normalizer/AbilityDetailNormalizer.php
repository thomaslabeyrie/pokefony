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

class AbilityDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\AbilityDetail::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\AbilityDetail::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\AbilityDetail();
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
        if (\array_key_exists('generation', $data)) {
            $object->setGeneration($this->denormalizer->denormalize($data['generation'], \App\Generated\PokeApi\Model\GenerationSummary::class, 'json', $context));
            unset($data['generation']);
        }
        if (\array_key_exists('names', $data)) {
            $values = [];
            foreach ($data['names'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\AbilityName::class, 'json', $context);
            }
            $object->setNames($values);
            unset($data['names']);
        }
        if (\array_key_exists('effect_entries', $data)) {
            $values_1 = [];
            foreach ($data['effect_entries'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\AbilityEffectText::class, 'json', $context);
            }
            $object->setEffectEntries($values_1);
            unset($data['effect_entries']);
        }
        if (\array_key_exists('effect_changes', $data)) {
            $values_2 = [];
            foreach ($data['effect_changes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \App\Generated\PokeApi\Model\AbilityChange::class, 'json', $context);
            }
            $object->setEffectChanges($values_2);
            unset($data['effect_changes']);
        }
        if (\array_key_exists('flavor_text_entries', $data)) {
            $values_3 = [];
            foreach ($data['flavor_text_entries'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \App\Generated\PokeApi\Model\AbilityFlavorText::class, 'json', $context);
            }
            $object->setFlavorTextEntries($values_3);
            unset($data['flavor_text_entries']);
        }
        if (\array_key_exists('pokemon', $data)) {
            $values_4 = [];
            foreach ($data['pokemon'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \App\Generated\PokeApi\Model\AbilityDetailPokemonItem::class, 'json', $context);
            }
            $object->setPokemon($values_4);
            unset($data['pokemon']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
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
        $dataArray['generation'] = $this->normalizer->normalize($data->getGeneration(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\AbilityDetail::class => false];
    }
}
