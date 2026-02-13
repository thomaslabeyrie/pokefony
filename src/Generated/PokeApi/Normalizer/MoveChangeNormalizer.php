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

class MoveChangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\MoveChange::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\MoveChange::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\MoveChange();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accuracy', $data) && null !== $data['accuracy']) {
            $object->setAccuracy($data['accuracy']);
            unset($data['accuracy']);
        } elseif (\array_key_exists('accuracy', $data) && null === $data['accuracy']) {
            $object->setAccuracy(null);
        }
        if (\array_key_exists('power', $data) && null !== $data['power']) {
            $object->setPower($data['power']);
            unset($data['power']);
        } elseif (\array_key_exists('power', $data) && null === $data['power']) {
            $object->setPower(null);
        }
        if (\array_key_exists('pp', $data) && null !== $data['pp']) {
            $object->setPp($data['pp']);
            unset($data['pp']);
        } elseif (\array_key_exists('pp', $data) && null === $data['pp']) {
            $object->setPp(null);
        }
        if (\array_key_exists('effect_chance', $data)) {
            $object->setEffectChance($data['effect_chance']);
            unset($data['effect_chance']);
        }
        if (\array_key_exists('effect_entries', $data)) {
            $values = [];
            foreach ($data['effect_entries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\MoveChangeEffectEntriesItem::class, 'json', $context);
            }
            $object->setEffectEntries($values);
            unset($data['effect_entries']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($this->denormalizer->denormalize($data['type'], \App\Generated\PokeApi\Model\TypeSummary::class, 'json', $context));
            unset($data['type']);
        }
        if (\array_key_exists('version_group', $data)) {
            $object->setVersionGroup($this->denormalizer->denormalize($data['version_group'], \App\Generated\PokeApi\Model\VersionGroupSummary::class, 'json', $context));
            unset($data['version_group']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('accuracy')) {
            $dataArray['accuracy'] = $data->getAccuracy();
        }
        if ($data->isInitialized('power')) {
            $dataArray['power'] = $data->getPower();
        }
        if ($data->isInitialized('pp')) {
            $dataArray['pp'] = $data->getPp();
        }
        $dataArray['effect_chance'] = $data->getEffectChance();
        $dataArray['type'] = $this->normalizer->normalize($data->getType(), 'json', $context);
        $dataArray['version_group'] = $this->normalizer->normalize($data->getVersionGroup(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\MoveChange::class => false];
    }
}
