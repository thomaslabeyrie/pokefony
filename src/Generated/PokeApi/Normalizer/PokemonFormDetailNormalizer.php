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
class PokemonFormDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\PokemonFormDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\PokemonFormDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\PokemonFormDetail();
        if (\array_key_exists('is_default', $data) && \is_int($data['is_default'])) {
            $data['is_default'] = (bool) $data['is_default'];
        }
        if (\array_key_exists('is_battle_only', $data) && \is_int($data['is_battle_only'])) {
            $data['is_battle_only'] = (bool) $data['is_battle_only'];
        }
        if (\array_key_exists('is_mega', $data) && \is_int($data['is_mega'])) {
            $data['is_mega'] = (bool) $data['is_mega'];
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
        if (\array_key_exists('order', $data) && $data['order'] !== null) {
            $object->setOrder($data['order']);
            unset($data['order']);
        }
        elseif (\array_key_exists('order', $data) && $data['order'] === null) {
            $object->setOrder(null);
        }
        if (\array_key_exists('form_order', $data) && $data['form_order'] !== null) {
            $object->setFormOrder($data['form_order']);
            unset($data['form_order']);
        }
        elseif (\array_key_exists('form_order', $data) && $data['form_order'] === null) {
            $object->setFormOrder(null);
        }
        if (\array_key_exists('is_default', $data)) {
            $object->setIsDefault($data['is_default']);
            unset($data['is_default']);
        }
        if (\array_key_exists('is_battle_only', $data)) {
            $object->setIsBattleOnly($data['is_battle_only']);
            unset($data['is_battle_only']);
        }
        if (\array_key_exists('is_mega', $data)) {
            $object->setIsMega($data['is_mega']);
            unset($data['is_mega']);
        }
        if (\array_key_exists('form_name', $data)) {
            $object->setFormName($data['form_name']);
            unset($data['form_name']);
        }
        if (\array_key_exists('pokemon', $data)) {
            $object->setPokemon($this->denormalizer->denormalize($data['pokemon'], \App\Generated\PokeApi\Model\PokemonSummary::class, 'json', $context));
            unset($data['pokemon']);
        }
        if (\array_key_exists('sprites', $data)) {
            $object->setSprites($this->denormalizer->denormalize($data['sprites'], \App\Generated\PokeApi\Model\PokemonFormDetailSprites::class, 'json', $context));
            unset($data['sprites']);
        }
        if (\array_key_exists('version_group', $data)) {
            $object->setVersionGroup($this->denormalizer->denormalize($data['version_group'], \App\Generated\PokeApi\Model\VersionGroupSummary::class, 'json', $context));
            unset($data['version_group']);
        }
        if (\array_key_exists('form_names', $data)) {
            $values = [];
            foreach ($data['form_names'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\PokemonFormDetailFormNamesItem::class, 'json', $context);
            }
            $object->setFormNames($values);
            unset($data['form_names']);
        }
        if (\array_key_exists('names', $data)) {
            $values_1 = [];
            foreach ($data['names'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\PokemonFormDetailNamesItem::class, 'json', $context);
            }
            $object->setNames($values_1);
            unset($data['names']);
        }
        if (\array_key_exists('types', $data)) {
            $values_2 = [];
            foreach ($data['types'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \App\Generated\PokeApi\Model\PokemonFormDetailTypesItem::class, 'json', $context);
            }
            $object->setTypes($values_2);
            unset($data['types']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('order')) {
            $dataArray['order'] = $data->getOrder();
        }
        if ($data->isInitialized('formOrder')) {
            $dataArray['form_order'] = $data->getFormOrder();
        }
        if ($data->isInitialized('isDefault') && null !== $data->getIsDefault()) {
            $dataArray['is_default'] = $data->getIsDefault();
        }
        if ($data->isInitialized('isBattleOnly') && null !== $data->getIsBattleOnly()) {
            $dataArray['is_battle_only'] = $data->getIsBattleOnly();
        }
        if ($data->isInitialized('isMega') && null !== $data->getIsMega()) {
            $dataArray['is_mega'] = $data->getIsMega();
        }
        $dataArray['form_name'] = $data->getFormName();
        $dataArray['pokemon'] = $this->normalizer->normalize($data->getPokemon(), 'json', $context);
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
        return [\App\Generated\PokeApi\Model\PokemonFormDetail::class => false];
    }
}