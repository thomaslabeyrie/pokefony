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
class EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem();
        if (\array_key_exists('needs_multiplayer', $data) && \is_int($data['needs_multiplayer'])) {
            $data['needs_multiplayer'] = (bool) $data['needs_multiplayer'];
        }
        if (\array_key_exists('needs_overworld_rain', $data) && \is_int($data['needs_overworld_rain'])) {
            $data['needs_overworld_rain'] = (bool) $data['needs_overworld_rain'];
        }
        if (\array_key_exists('turn_upside_down', $data) && \is_int($data['turn_upside_down'])) {
            $data['turn_upside_down'] = (bool) $data['turn_upside_down'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('gender', $data) && $data['gender'] !== null) {
            $object->setGender($this->denormalizer->denormalize($data['gender'], \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGender::class, 'json', $context));
            unset($data['gender']);
        }
        elseif (\array_key_exists('gender', $data) && $data['gender'] === null) {
            $object->setGender(null);
        }
        if (\array_key_exists('held_item', $data) && $data['held_item'] !== null) {
            $object->setHeldItem($this->denormalizer->denormalize($data['held_item'], \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItem::class, 'json', $context));
            unset($data['held_item']);
        }
        elseif (\array_key_exists('held_item', $data) && $data['held_item'] === null) {
            $object->setHeldItem(null);
        }
        if (\array_key_exists('item', $data) && $data['item'] !== null) {
            $object->setItem($this->denormalizer->denormalize($data['item'], \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItem::class, 'json', $context));
            unset($data['item']);
        }
        elseif (\array_key_exists('item', $data) && $data['item'] === null) {
            $object->setItem(null);
        }
        if (\array_key_exists('known_move', $data) && $data['known_move'] !== null) {
            $object->setKnownMove($data['known_move']);
            unset($data['known_move']);
        }
        elseif (\array_key_exists('known_move', $data) && $data['known_move'] === null) {
            $object->setKnownMove(null);
        }
        if (\array_key_exists('known_move_type', $data) && $data['known_move_type'] !== null) {
            $object->setKnownMoveType($data['known_move_type']);
            unset($data['known_move_type']);
        }
        elseif (\array_key_exists('known_move_type', $data) && $data['known_move_type'] === null) {
            $object->setKnownMoveType(null);
        }
        if (\array_key_exists('location', $data) && $data['location'] !== null) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocation::class, 'json', $context));
            unset($data['location']);
        }
        elseif (\array_key_exists('location', $data) && $data['location'] === null) {
            $object->setLocation(null);
        }
        if (\array_key_exists('min_affection', $data) && $data['min_affection'] !== null) {
            $object->setMinAffection($data['min_affection']);
            unset($data['min_affection']);
        }
        elseif (\array_key_exists('min_affection', $data) && $data['min_affection'] === null) {
            $object->setMinAffection(null);
        }
        if (\array_key_exists('min_beauty', $data) && $data['min_beauty'] !== null) {
            $object->setMinBeauty($data['min_beauty']);
            unset($data['min_beauty']);
        }
        elseif (\array_key_exists('min_beauty', $data) && $data['min_beauty'] === null) {
            $object->setMinBeauty(null);
        }
        if (\array_key_exists('min_damage_taken', $data) && $data['min_damage_taken'] !== null) {
            $object->setMinDamageTaken($data['min_damage_taken']);
            unset($data['min_damage_taken']);
        }
        elseif (\array_key_exists('min_damage_taken', $data) && $data['min_damage_taken'] === null) {
            $object->setMinDamageTaken(null);
        }
        if (\array_key_exists('min_happiness', $data) && $data['min_happiness'] !== null) {
            $object->setMinHappiness($data['min_happiness']);
            unset($data['min_happiness']);
        }
        elseif (\array_key_exists('min_happiness', $data) && $data['min_happiness'] === null) {
            $object->setMinHappiness(null);
        }
        if (\array_key_exists('min_level', $data) && $data['min_level'] !== null) {
            $object->setMinLevel($data['min_level']);
            unset($data['min_level']);
        }
        elseif (\array_key_exists('min_level', $data) && $data['min_level'] === null) {
            $object->setMinLevel(null);
        }
        if (\array_key_exists('min_move_count', $data) && $data['min_move_count'] !== null) {
            $object->setMinMoveCount($data['min_move_count']);
            unset($data['min_move_count']);
        }
        elseif (\array_key_exists('min_move_count', $data) && $data['min_move_count'] === null) {
            $object->setMinMoveCount(null);
        }
        if (\array_key_exists('min_steps', $data) && $data['min_steps'] !== null) {
            $object->setMinSteps($data['min_steps']);
            unset($data['min_steps']);
        }
        elseif (\array_key_exists('min_steps', $data) && $data['min_steps'] === null) {
            $object->setMinSteps(null);
        }
        if (\array_key_exists('needs_multiplayer', $data) && $data['needs_multiplayer'] !== null) {
            $object->setNeedsMultiplayer($data['needs_multiplayer']);
            unset($data['needs_multiplayer']);
        }
        elseif (\array_key_exists('needs_multiplayer', $data) && $data['needs_multiplayer'] === null) {
            $object->setNeedsMultiplayer(null);
        }
        if (\array_key_exists('needs_overworld_rain', $data) && $data['needs_overworld_rain'] !== null) {
            $object->setNeedsOverworldRain($data['needs_overworld_rain']);
            unset($data['needs_overworld_rain']);
        }
        elseif (\array_key_exists('needs_overworld_rain', $data) && $data['needs_overworld_rain'] === null) {
            $object->setNeedsOverworldRain(null);
        }
        if (\array_key_exists('party_species', $data) && $data['party_species'] !== null) {
            $object->setPartySpecies($data['party_species']);
            unset($data['party_species']);
        }
        elseif (\array_key_exists('party_species', $data) && $data['party_species'] === null) {
            $object->setPartySpecies(null);
        }
        if (\array_key_exists('party_type', $data) && $data['party_type'] !== null) {
            $object->setPartyType($data['party_type']);
            unset($data['party_type']);
        }
        elseif (\array_key_exists('party_type', $data) && $data['party_type'] === null) {
            $object->setPartyType(null);
        }
        if (\array_key_exists('relative_physical_stats', $data) && $data['relative_physical_stats'] !== null) {
            $object->setRelativePhysicalStats($data['relative_physical_stats']);
            unset($data['relative_physical_stats']);
        }
        elseif (\array_key_exists('relative_physical_stats', $data) && $data['relative_physical_stats'] === null) {
            $object->setRelativePhysicalStats(null);
        }
        if (\array_key_exists('time_of_day', $data)) {
            $object->setTimeOfDay($data['time_of_day']);
            unset($data['time_of_day']);
        }
        if (\array_key_exists('trade_species', $data) && $data['trade_species'] !== null) {
            $object->setTradeSpecies($data['trade_species']);
            unset($data['trade_species']);
        }
        elseif (\array_key_exists('trade_species', $data) && $data['trade_species'] === null) {
            $object->setTradeSpecies(null);
        }
        if (\array_key_exists('trigger', $data)) {
            $object->setTrigger($this->denormalizer->denormalize($data['trigger'], \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTrigger::class, 'json', $context));
            unset($data['trigger']);
        }
        if (\array_key_exists('turn_upside_down', $data)) {
            $object->setTurnUpsideDown($data['turn_upside_down']);
            unset($data['turn_upside_down']);
        }
        if (\array_key_exists('used_move', $data) && $data['used_move'] !== null) {
            $object->setUsedMove($data['used_move']);
            unset($data['used_move']);
        }
        elseif (\array_key_exists('used_move', $data) && $data['used_move'] === null) {
            $object->setUsedMove(null);
        }
        if (\array_key_exists('region_id', $data) && $data['region_id'] !== null) {
            $object->setRegionId($this->denormalizer->denormalize($data['region_id'], \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionId::class, 'json', $context));
            unset($data['region_id']);
        }
        elseif (\array_key_exists('region_id', $data) && $data['region_id'] === null) {
            $object->setRegionId(null);
        }
        if (\array_key_exists('base_form_id', $data) && $data['base_form_id'] !== null) {
            $object->setBaseFormId($this->denormalizer->denormalize($data['base_form_id'], \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormId::class, 'json', $context));
            unset($data['base_form_id']);
        }
        elseif (\array_key_exists('base_form_id', $data) && $data['base_form_id'] === null) {
            $object->setBaseFormId(null);
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
        $dataArray['gender'] = $this->normalizer->normalize($data->getGender(), 'json', $context);
        $dataArray['held_item'] = $this->normalizer->normalize($data->getHeldItem(), 'json', $context);
        $dataArray['item'] = $this->normalizer->normalize($data->getItem(), 'json', $context);
        $dataArray['known_move'] = $data->getKnownMove();
        $dataArray['known_move_type'] = $data->getKnownMoveType();
        $dataArray['location'] = $this->normalizer->normalize($data->getLocation(), 'json', $context);
        $dataArray['min_affection'] = $data->getMinAffection();
        $dataArray['min_beauty'] = $data->getMinBeauty();
        $dataArray['min_damage_taken'] = $data->getMinDamageTaken();
        $dataArray['min_happiness'] = $data->getMinHappiness();
        $dataArray['min_level'] = $data->getMinLevel();
        $dataArray['min_move_count'] = $data->getMinMoveCount();
        $dataArray['min_steps'] = $data->getMinSteps();
        $dataArray['needs_multiplayer'] = $data->getNeedsMultiplayer();
        $dataArray['needs_overworld_rain'] = $data->getNeedsOverworldRain();
        $dataArray['party_species'] = $data->getPartySpecies();
        $dataArray['party_type'] = $data->getPartyType();
        $dataArray['relative_physical_stats'] = $data->getRelativePhysicalStats();
        $dataArray['time_of_day'] = $data->getTimeOfDay();
        $dataArray['trade_species'] = $data->getTradeSpecies();
        $dataArray['trigger'] = $this->normalizer->normalize($data->getTrigger(), 'json', $context);
        $dataArray['turn_upside_down'] = $data->getTurnUpsideDown();
        $dataArray['used_move'] = $data->getUsedMove();
        $dataArray['region_id'] = $this->normalizer->normalize($data->getRegionId(), 'json', $context);
        $dataArray['base_form_id'] = $this->normalizer->normalize($data->getBaseFormId(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem::class => false];
    }
}