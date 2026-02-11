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
class PokemonSpeciesDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\PokemonSpeciesDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\PokemonSpeciesDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\PokemonSpeciesDetail();
        if (\array_key_exists('is_baby', $data) && \is_int($data['is_baby'])) {
            $data['is_baby'] = (bool) $data['is_baby'];
        }
        if (\array_key_exists('is_legendary', $data) && \is_int($data['is_legendary'])) {
            $data['is_legendary'] = (bool) $data['is_legendary'];
        }
        if (\array_key_exists('is_mythical', $data) && \is_int($data['is_mythical'])) {
            $data['is_mythical'] = (bool) $data['is_mythical'];
        }
        if (\array_key_exists('has_gender_differences', $data) && \is_int($data['has_gender_differences'])) {
            $data['has_gender_differences'] = (bool) $data['has_gender_differences'];
        }
        if (\array_key_exists('forms_switchable', $data) && \is_int($data['forms_switchable'])) {
            $data['forms_switchable'] = (bool) $data['forms_switchable'];
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
        if (\array_key_exists('gender_rate', $data) && $data['gender_rate'] !== null) {
            $object->setGenderRate($data['gender_rate']);
            unset($data['gender_rate']);
        }
        elseif (\array_key_exists('gender_rate', $data) && $data['gender_rate'] === null) {
            $object->setGenderRate(null);
        }
        if (\array_key_exists('capture_rate', $data) && $data['capture_rate'] !== null) {
            $object->setCaptureRate($data['capture_rate']);
            unset($data['capture_rate']);
        }
        elseif (\array_key_exists('capture_rate', $data) && $data['capture_rate'] === null) {
            $object->setCaptureRate(null);
        }
        if (\array_key_exists('base_happiness', $data) && $data['base_happiness'] !== null) {
            $object->setBaseHappiness($data['base_happiness']);
            unset($data['base_happiness']);
        }
        elseif (\array_key_exists('base_happiness', $data) && $data['base_happiness'] === null) {
            $object->setBaseHappiness(null);
        }
        if (\array_key_exists('is_baby', $data)) {
            $object->setIsBaby($data['is_baby']);
            unset($data['is_baby']);
        }
        if (\array_key_exists('is_legendary', $data)) {
            $object->setIsLegendary($data['is_legendary']);
            unset($data['is_legendary']);
        }
        if (\array_key_exists('is_mythical', $data)) {
            $object->setIsMythical($data['is_mythical']);
            unset($data['is_mythical']);
        }
        if (\array_key_exists('hatch_counter', $data) && $data['hatch_counter'] !== null) {
            $object->setHatchCounter($data['hatch_counter']);
            unset($data['hatch_counter']);
        }
        elseif (\array_key_exists('hatch_counter', $data) && $data['hatch_counter'] === null) {
            $object->setHatchCounter(null);
        }
        if (\array_key_exists('has_gender_differences', $data)) {
            $object->setHasGenderDifferences($data['has_gender_differences']);
            unset($data['has_gender_differences']);
        }
        if (\array_key_exists('forms_switchable', $data)) {
            $object->setFormsSwitchable($data['forms_switchable']);
            unset($data['forms_switchable']);
        }
        if (\array_key_exists('growth_rate', $data)) {
            $object->setGrowthRate($this->denormalizer->denormalize($data['growth_rate'], \App\Generated\PokeApi\Model\GrowthRateSummary::class, 'json', $context));
            unset($data['growth_rate']);
        }
        if (\array_key_exists('pokedex_numbers', $data)) {
            $values = [];
            foreach ($data['pokedex_numbers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PokeApi\Model\PokemonDexEntry::class, 'json', $context);
            }
            $object->setPokedexNumbers($values);
            unset($data['pokedex_numbers']);
        }
        if (\array_key_exists('egg_groups', $data)) {
            $values_1 = [];
            foreach ($data['egg_groups'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \App\Generated\PokeApi\Model\PokemonSpeciesDetailEggGroupsItem::class, 'json', $context);
            }
            $object->setEggGroups($values_1);
            unset($data['egg_groups']);
        }
        if (\array_key_exists('color', $data)) {
            $object->setColor($this->denormalizer->denormalize($data['color'], \App\Generated\PokeApi\Model\PokemonColorSummary::class, 'json', $context));
            unset($data['color']);
        }
        if (\array_key_exists('shape', $data)) {
            $object->setShape($this->denormalizer->denormalize($data['shape'], \App\Generated\PokeApi\Model\PokemonShapeSummary::class, 'json', $context));
            unset($data['shape']);
        }
        if (\array_key_exists('evolves_from_species', $data)) {
            $object->setEvolvesFromSpecies($this->denormalizer->denormalize($data['evolves_from_species'], \App\Generated\PokeApi\Model\PokemonSpeciesSummary::class, 'json', $context));
            unset($data['evolves_from_species']);
        }
        if (\array_key_exists('evolution_chain', $data)) {
            $object->setEvolutionChain($this->denormalizer->denormalize($data['evolution_chain'], \App\Generated\PokeApi\Model\EvolutionChainSummary::class, 'json', $context));
            unset($data['evolution_chain']);
        }
        if (\array_key_exists('habitat', $data)) {
            $object->setHabitat($this->denormalizer->denormalize($data['habitat'], \App\Generated\PokeApi\Model\PokemonHabitatSummary::class, 'json', $context));
            unset($data['habitat']);
        }
        if (\array_key_exists('generation', $data)) {
            $object->setGeneration($this->denormalizer->denormalize($data['generation'], \App\Generated\PokeApi\Model\GenerationSummary::class, 'json', $context));
            unset($data['generation']);
        }
        if (\array_key_exists('names', $data)) {
            $values_2 = [];
            foreach ($data['names'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \App\Generated\PokeApi\Model\PokemonSpeciesDetailNamesItem::class, 'json', $context);
            }
            $object->setNames($values_2);
            unset($data['names']);
        }
        if (\array_key_exists('pal_park_encounters', $data)) {
            $values_3 = [];
            foreach ($data['pal_park_encounters'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \App\Generated\PokeApi\Model\PokemonSpeciesDetailPalParkEncountersItem::class, 'json', $context);
            }
            $object->setPalParkEncounters($values_3);
            unset($data['pal_park_encounters']);
        }
        if (\array_key_exists('form_descriptions', $data)) {
            $values_4 = [];
            foreach ($data['form_descriptions'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \App\Generated\PokeApi\Model\PokemonSpeciesDescription::class, 'json', $context);
            }
            $object->setFormDescriptions($values_4);
            unset($data['form_descriptions']);
        }
        if (\array_key_exists('flavor_text_entries', $data)) {
            $values_5 = [];
            foreach ($data['flavor_text_entries'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \App\Generated\PokeApi\Model\PokemonSpeciesFlavorText::class, 'json', $context);
            }
            $object->setFlavorTextEntries($values_5);
            unset($data['flavor_text_entries']);
        }
        if (\array_key_exists('genera', $data)) {
            $values_6 = [];
            foreach ($data['genera'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \App\Generated\PokeApi\Model\PokemonSpeciesDetailGeneraItem::class, 'json', $context);
            }
            $object->setGenera($values_6);
            unset($data['genera']);
        }
        if (\array_key_exists('varieties', $data)) {
            $values_7 = [];
            foreach ($data['varieties'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \App\Generated\PokeApi\Model\PokemonSpeciesDetailVarietiesItem::class, 'json', $context);
            }
            $object->setVarieties($values_7);
            unset($data['varieties']);
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
        if ($data->isInitialized('order')) {
            $dataArray['order'] = $data->getOrder();
        }
        if ($data->isInitialized('genderRate')) {
            $dataArray['gender_rate'] = $data->getGenderRate();
        }
        if ($data->isInitialized('captureRate')) {
            $dataArray['capture_rate'] = $data->getCaptureRate();
        }
        if ($data->isInitialized('baseHappiness')) {
            $dataArray['base_happiness'] = $data->getBaseHappiness();
        }
        if ($data->isInitialized('isBaby') && null !== $data->getIsBaby()) {
            $dataArray['is_baby'] = $data->getIsBaby();
        }
        if ($data->isInitialized('isLegendary') && null !== $data->getIsLegendary()) {
            $dataArray['is_legendary'] = $data->getIsLegendary();
        }
        if ($data->isInitialized('isMythical') && null !== $data->getIsMythical()) {
            $dataArray['is_mythical'] = $data->getIsMythical();
        }
        if ($data->isInitialized('hatchCounter')) {
            $dataArray['hatch_counter'] = $data->getHatchCounter();
        }
        if ($data->isInitialized('hasGenderDifferences') && null !== $data->getHasGenderDifferences()) {
            $dataArray['has_gender_differences'] = $data->getHasGenderDifferences();
        }
        if ($data->isInitialized('formsSwitchable') && null !== $data->getFormsSwitchable()) {
            $dataArray['forms_switchable'] = $data->getFormsSwitchable();
        }
        $dataArray['growth_rate'] = $this->normalizer->normalize($data->getGrowthRate(), 'json', $context);
        $dataArray['color'] = $this->normalizer->normalize($data->getColor(), 'json', $context);
        $dataArray['shape'] = $this->normalizer->normalize($data->getShape(), 'json', $context);
        $dataArray['evolves_from_species'] = $this->normalizer->normalize($data->getEvolvesFromSpecies(), 'json', $context);
        $dataArray['evolution_chain'] = $this->normalizer->normalize($data->getEvolutionChain(), 'json', $context);
        $dataArray['habitat'] = $this->normalizer->normalize($data->getHabitat(), 'json', $context);
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
        return [\App\Generated\PokeApi\Model\PokemonSpeciesDetail::class => false];
    }
}