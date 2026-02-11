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
class ItemDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\ItemDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\ItemDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\ItemDetail();
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
        if (\array_key_exists('cost', $data) && $data['cost'] !== null) {
            $object->setCost($data['cost']);
            unset($data['cost']);
        }
        elseif (\array_key_exists('cost', $data) && $data['cost'] === null) {
            $object->setCost(null);
        }
        if (\array_key_exists('fling_power', $data) && $data['fling_power'] !== null) {
            $object->setFlingPower($data['fling_power']);
            unset($data['fling_power']);
        }
        elseif (\array_key_exists('fling_power', $data) && $data['fling_power'] === null) {
            $object->setFlingPower(null);
        }
        if (\array_key_exists('fling_effect', $data)) {
            $object->setFlingEffect($this->denormalizer->denormalize($data['fling_effect'], \App\Generated\PokeApi\Model\ItemFlingEffectSummary::class, 'json', $context));
            unset($data['fling_effect']);
        }
        if (\array_key_exists('attributes', $data)) {
            $values = [];
            foreach ($data['attributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\ItemDetailAttributesItem::class, 'json', $context);
            }
            $object->setAttributes($values);
            unset($data['attributes']);
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($this->denormalizer->denormalize($data['category'], \App\Generated\PokeApi\Model\ItemCategorySummary::class, 'json', $context));
            unset($data['category']);
        }
        if (\array_key_exists('effect_entries', $data)) {
            $values_1 = [];
            foreach ($data['effect_entries'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\ItemEffectText::class, 'json', $context);
            }
            $object->setEffectEntries($values_1);
            unset($data['effect_entries']);
        }
        if (\array_key_exists('flavor_text_entries', $data)) {
            $values_2 = [];
            foreach ($data['flavor_text_entries'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \App\Generated\PokeApi\Model\ItemFlavorText::class, 'json', $context);
            }
            $object->setFlavorTextEntries($values_2);
            unset($data['flavor_text_entries']);
        }
        if (\array_key_exists('game_indices', $data)) {
            $values_3 = [];
            foreach ($data['game_indices'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \App\Generated\PokeApi\Model\ItemGameIndex::class, 'json', $context);
            }
            $object->setGameIndices($values_3);
            unset($data['game_indices']);
        }
        if (\array_key_exists('names', $data)) {
            $values_4 = [];
            foreach ($data['names'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \App\Generated\PokeApi\Model\ItemName::class, 'json', $context);
            }
            $object->setNames($values_4);
            unset($data['names']);
        }
        if (\array_key_exists('held_by_pokemon', $data)) {
            $values_5 = [];
            foreach ($data['held_by_pokemon'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItem::class, 'json', $context);
            }
            $object->setHeldByPokemon($values_5);
            unset($data['held_by_pokemon']);
        }
        if (\array_key_exists('sprites', $data)) {
            $object->setSprites($this->denormalizer->denormalize($data['sprites'], \App\Generated\PokeApi\Model\ItemDetailSprites::class, 'json', $context));
            unset($data['sprites']);
        }
        if (\array_key_exists('baby_trigger_for', $data)) {
            $object->setBabyTriggerFor($this->denormalizer->denormalize($data['baby_trigger_for'], \App\Generated\PokeApi\Model\ItemDetailBabyTriggerFor::class, 'json', $context));
            unset($data['baby_trigger_for']);
        }
        if (\array_key_exists('machines', $data)) {
            $values_6 = [];
            foreach ($data['machines'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \App\Generated\PokeApi\Model\ItemDetailMachinesItem::class, 'json', $context);
            }
            $object->setMachines($values_6);
            unset($data['machines']);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('cost')) {
            $dataArray['cost'] = $data->getCost();
        }
        if ($data->isInitialized('flingPower')) {
            $dataArray['fling_power'] = $data->getFlingPower();
        }
        $dataArray['fling_effect'] = $this->normalizer->normalize($data->getFlingEffect(), 'json', $context);
        $dataArray['category'] = $this->normalizer->normalize($data->getCategory(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\ItemDetail::class => false];
    }
}