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

class ContestEffectDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\ContestEffectDetail::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\ContestEffectDetail::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\ContestEffectDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('appeal', $data)) {
            $object->setAppeal($data['appeal']);
            unset($data['appeal']);
        }
        if (\array_key_exists('jam', $data)) {
            $object->setJam($data['jam']);
            unset($data['jam']);
        }
        if (\array_key_exists('effect_entries', $data)) {
            $values = [];
            foreach ($data['effect_entries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\ContestEffectEffectText::class, 'json', $context);
            }
            $object->setEffectEntries($values);
            unset($data['effect_entries']);
        }
        if (\array_key_exists('flavor_text_entries', $data)) {
            $values_1 = [];
            foreach ($data['flavor_text_entries'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\ContestEffectFlavorText::class, 'json', $context);
            }
            $object->setFlavorTextEntries($values_1);
            unset($data['flavor_text_entries']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['appeal'] = $data->getAppeal();
        $dataArray['jam'] = $data->getJam();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\ContestEffectDetail::class => false];
    }
}
