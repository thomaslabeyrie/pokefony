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

class MoveDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \App\Generated\PokeApi\Model\MoveDetail::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && \App\Generated\PokeApi\Model\MoveDetail::class === get_class($data);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\MoveDetail();
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
        if (\array_key_exists('accuracy', $data) && null !== $data['accuracy']) {
            $object->setAccuracy($data['accuracy']);
            unset($data['accuracy']);
        } elseif (\array_key_exists('accuracy', $data) && null === $data['accuracy']) {
            $object->setAccuracy(null);
        }
        if (\array_key_exists('effect_chance', $data)) {
            $object->setEffectChance($data['effect_chance']);
            unset($data['effect_chance']);
        }
        if (\array_key_exists('pp', $data) && null !== $data['pp']) {
            $object->setPp($data['pp']);
            unset($data['pp']);
        } elseif (\array_key_exists('pp', $data) && null === $data['pp']) {
            $object->setPp(null);
        }
        if (\array_key_exists('priority', $data) && null !== $data['priority']) {
            $object->setPriority($data['priority']);
            unset($data['priority']);
        } elseif (\array_key_exists('priority', $data) && null === $data['priority']) {
            $object->setPriority(null);
        }
        if (\array_key_exists('power', $data) && null !== $data['power']) {
            $object->setPower($data['power']);
            unset($data['power']);
        } elseif (\array_key_exists('power', $data) && null === $data['power']) {
            $object->setPower(null);
        }
        if (\array_key_exists('contest_combos', $data)) {
            $object->setContestCombos($this->denormalizer->denormalize($data['contest_combos'], \App\Generated\PokeApi\Model\MoveDetailContestCombos::class, 'json', $context));
            unset($data['contest_combos']);
        }
        if (\array_key_exists('contest_type', $data)) {
            $object->setContestType($this->denormalizer->denormalize($data['contest_type'], \App\Generated\PokeApi\Model\ContestTypeSummary::class, 'json', $context));
            unset($data['contest_type']);
        }
        if (\array_key_exists('contest_effect', $data)) {
            $object->setContestEffect($this->denormalizer->denormalize($data['contest_effect'], \App\Generated\PokeApi\Model\ContestEffectSummary::class, 'json', $context));
            unset($data['contest_effect']);
        }
        if (\array_key_exists('damage_class', $data)) {
            $object->setDamageClass($this->denormalizer->denormalize($data['damage_class'], \App\Generated\PokeApi\Model\MoveDamageClassSummary::class, 'json', $context));
            unset($data['damage_class']);
        }
        if (\array_key_exists('effect_entries', $data)) {
            $values = [];
            foreach ($data['effect_entries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\MoveDetailEffectEntriesItem::class, 'json', $context);
            }
            $object->setEffectEntries($values);
            unset($data['effect_entries']);
        }
        if (\array_key_exists('effect_changes', $data)) {
            $values_1 = [];
            foreach ($data['effect_changes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\MoveDetailEffectChangesItem::class, 'json', $context);
            }
            $object->setEffectChanges($values_1);
            unset($data['effect_changes']);
        }
        if (\array_key_exists('generation', $data)) {
            $object->setGeneration($this->denormalizer->denormalize($data['generation'], \App\Generated\PokeApi\Model\GenerationSummary::class, 'json', $context));
            unset($data['generation']);
        }
        if (\array_key_exists('meta', $data)) {
            $object->setMeta($this->denormalizer->denormalize($data['meta'], \App\Generated\PokeApi\Model\MoveDetailMeta::class, 'json', $context));
            unset($data['meta']);
        }
        if (\array_key_exists('names', $data)) {
            $values_2 = [];
            foreach ($data['names'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \App\Generated\PokeApi\Model\MoveName::class, 'json', $context);
            }
            $object->setNames($values_2);
            unset($data['names']);
        }
        if (\array_key_exists('past_values', $data)) {
            $values_3 = [];
            foreach ($data['past_values'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \App\Generated\PokeApi\Model\MoveChange::class, 'json', $context);
            }
            $object->setPastValues($values_3);
            unset($data['past_values']);
        }
        if (\array_key_exists('stat_changes', $data)) {
            $values_4 = [];
            foreach ($data['stat_changes'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \App\Generated\PokeApi\Model\MoveDetailStatChangesItem::class, 'json', $context);
            }
            $object->setStatChanges($values_4);
            unset($data['stat_changes']);
        }
        if (\array_key_exists('super_contest_effect', $data)) {
            $object->setSuperContestEffect($this->denormalizer->denormalize($data['super_contest_effect'], \App\Generated\PokeApi\Model\SuperContestEffectSummary::class, 'json', $context));
            unset($data['super_contest_effect']);
        }
        if (\array_key_exists('target', $data)) {
            $object->setTarget($this->denormalizer->denormalize($data['target'], \App\Generated\PokeApi\Model\MoveTargetSummary::class, 'json', $context));
            unset($data['target']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($this->denormalizer->denormalize($data['type'], \App\Generated\PokeApi\Model\TypeSummary::class, 'json', $context));
            unset($data['type']);
        }
        if (\array_key_exists('machines', $data)) {
            $values_5 = [];
            foreach ($data['machines'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \App\Generated\PokeApi\Model\MoveDetailMachinesItem::class, 'json', $context);
            }
            $object->setMachines($values_5);
            unset($data['machines']);
        }
        if (\array_key_exists('flavor_text_entries', $data)) {
            $values_6 = [];
            foreach ($data['flavor_text_entries'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \App\Generated\PokeApi\Model\MoveFlavorText::class, 'json', $context);
            }
            $object->setFlavorTextEntries($values_6);
            unset($data['flavor_text_entries']);
        }
        if (\array_key_exists('learned_by_pokemon', $data)) {
            $values_7 = [];
            foreach ($data['learned_by_pokemon'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \App\Generated\PokeApi\Model\MoveDetailLearnedByPokemonItem::class, 'json', $context);
            }
            $object->setLearnedByPokemon($values_7);
            unset($data['learned_by_pokemon']);
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_8;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('accuracy')) {
            $dataArray['accuracy'] = $data->getAccuracy();
        }
        $dataArray['effect_chance'] = $data->getEffectChance();
        if ($data->isInitialized('pp')) {
            $dataArray['pp'] = $data->getPp();
        }
        if ($data->isInitialized('priority')) {
            $dataArray['priority'] = $data->getPriority();
        }
        if ($data->isInitialized('power')) {
            $dataArray['power'] = $data->getPower();
        }
        $dataArray['contest_type'] = $this->normalizer->normalize($data->getContestType(), 'json', $context);
        $dataArray['contest_effect'] = $this->normalizer->normalize($data->getContestEffect(), 'json', $context);
        $dataArray['damage_class'] = $this->normalizer->normalize($data->getDamageClass(), 'json', $context);
        $dataArray['generation'] = $this->normalizer->normalize($data->getGeneration(), 'json', $context);
        $dataArray['super_contest_effect'] = $this->normalizer->normalize($data->getSuperContestEffect(), 'json', $context);
        $dataArray['target'] = $this->normalizer->normalize($data->getTarget(), 'json', $context);
        $dataArray['type'] = $this->normalizer->normalize($data->getType(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\MoveDetail::class => false];
    }
}
