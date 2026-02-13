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

class MoveMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\MoveMeta::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\MoveMeta::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\MoveMeta();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ailment', $data)) {
            $object->setAilment($this->denormalizer->denormalize($data['ailment'], \App\Generated\PokeApi\Model\MoveMetaAilmentSummary::class, 'json', $context));
            unset($data['ailment']);
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($this->denormalizer->denormalize($data['category'], \App\Generated\PokeApi\Model\MoveMetaCategorySummary::class, 'json', $context));
            unset($data['category']);
        }
        if (\array_key_exists('min_hits', $data) && null !== $data['min_hits']) {
            $object->setMinHits($data['min_hits']);
            unset($data['min_hits']);
        } elseif (\array_key_exists('min_hits', $data) && null === $data['min_hits']) {
            $object->setMinHits(null);
        }
        if (\array_key_exists('max_hits', $data) && null !== $data['max_hits']) {
            $object->setMaxHits($data['max_hits']);
            unset($data['max_hits']);
        } elseif (\array_key_exists('max_hits', $data) && null === $data['max_hits']) {
            $object->setMaxHits(null);
        }
        if (\array_key_exists('min_turns', $data) && null !== $data['min_turns']) {
            $object->setMinTurns($data['min_turns']);
            unset($data['min_turns']);
        } elseif (\array_key_exists('min_turns', $data) && null === $data['min_turns']) {
            $object->setMinTurns(null);
        }
        if (\array_key_exists('max_turns', $data) && null !== $data['max_turns']) {
            $object->setMaxTurns($data['max_turns']);
            unset($data['max_turns']);
        } elseif (\array_key_exists('max_turns', $data) && null === $data['max_turns']) {
            $object->setMaxTurns(null);
        }
        if (\array_key_exists('drain', $data) && null !== $data['drain']) {
            $object->setDrain($data['drain']);
            unset($data['drain']);
        } elseif (\array_key_exists('drain', $data) && null === $data['drain']) {
            $object->setDrain(null);
        }
        if (\array_key_exists('healing', $data) && null !== $data['healing']) {
            $object->setHealing($data['healing']);
            unset($data['healing']);
        } elseif (\array_key_exists('healing', $data) && null === $data['healing']) {
            $object->setHealing(null);
        }
        if (\array_key_exists('crit_rate', $data) && null !== $data['crit_rate']) {
            $object->setCritRate($data['crit_rate']);
            unset($data['crit_rate']);
        } elseif (\array_key_exists('crit_rate', $data) && null === $data['crit_rate']) {
            $object->setCritRate(null);
        }
        if (\array_key_exists('ailment_chance', $data) && null !== $data['ailment_chance']) {
            $object->setAilmentChance($data['ailment_chance']);
            unset($data['ailment_chance']);
        } elseif (\array_key_exists('ailment_chance', $data) && null === $data['ailment_chance']) {
            $object->setAilmentChance(null);
        }
        if (\array_key_exists('flinch_chance', $data) && null !== $data['flinch_chance']) {
            $object->setFlinchChance($data['flinch_chance']);
            unset($data['flinch_chance']);
        } elseif (\array_key_exists('flinch_chance', $data) && null === $data['flinch_chance']) {
            $object->setFlinchChance(null);
        }
        if (\array_key_exists('stat_chance', $data) && null !== $data['stat_chance']) {
            $object->setStatChance($data['stat_chance']);
            unset($data['stat_chance']);
        } elseif (\array_key_exists('stat_chance', $data) && null === $data['stat_chance']) {
            $object->setStatChance(null);
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
        $dataArray['ailment'] = $this->normalizer->normalize($data->getAilment(), 'json', $context);
        $dataArray['category'] = $this->normalizer->normalize($data->getCategory(), 'json', $context);
        if ($data->isInitialized('minHits')) {
            $dataArray['min_hits'] = $data->getMinHits();
        }
        if ($data->isInitialized('maxHits')) {
            $dataArray['max_hits'] = $data->getMaxHits();
        }
        if ($data->isInitialized('minTurns')) {
            $dataArray['min_turns'] = $data->getMinTurns();
        }
        if ($data->isInitialized('maxTurns')) {
            $dataArray['max_turns'] = $data->getMaxTurns();
        }
        if ($data->isInitialized('drain')) {
            $dataArray['drain'] = $data->getDrain();
        }
        if ($data->isInitialized('healing')) {
            $dataArray['healing'] = $data->getHealing();
        }
        if ($data->isInitialized('critRate')) {
            $dataArray['crit_rate'] = $data->getCritRate();
        }
        if ($data->isInitialized('ailmentChance')) {
            $dataArray['ailment_chance'] = $data->getAilmentChance();
        }
        if ($data->isInitialized('flinchChance')) {
            $dataArray['flinch_chance'] = $data->getFlinchChance();
        }
        if ($data->isInitialized('statChance')) {
            $dataArray['stat_chance'] = $data->getStatChance();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\MoveMeta::class => false];
    }
}
