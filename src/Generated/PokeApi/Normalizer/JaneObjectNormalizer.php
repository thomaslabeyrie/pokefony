<?php

namespace App\Generated\PokeApi\Normalizer;

use App\Generated\PokeApi\Runtime\Normalizer\CheckArray;
use App\Generated\PokeApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \App\Generated\PokeApi\Model\AbilityChange::class => \App\Generated\PokeApi\Normalizer\AbilityChangeNormalizer::class,
        
        \App\Generated\PokeApi\Model\AbilityChangeEffectText::class => \App\Generated\PokeApi\Normalizer\AbilityChangeEffectTextNormalizer::class,
        
        \App\Generated\PokeApi\Model\AbilityDetail::class => \App\Generated\PokeApi\Normalizer\AbilityDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\AbilityDetailPokemonItem::class => \App\Generated\PokeApi\Normalizer\AbilityDetailPokemonItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\AbilityDetailPokemonItemPokemon::class => \App\Generated\PokeApi\Normalizer\AbilityDetailPokemonItemPokemonNormalizer::class,
        
        \App\Generated\PokeApi\Model\AbilityEffectText::class => \App\Generated\PokeApi\Normalizer\AbilityEffectTextNormalizer::class,
        
        \App\Generated\PokeApi\Model\AbilityFlavorText::class => \App\Generated\PokeApi\Normalizer\AbilityFlavorTextNormalizer::class,
        
        \App\Generated\PokeApi\Model\AbilityName::class => \App\Generated\PokeApi\Normalizer\AbilityNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\AbilitySummary::class => \App\Generated\PokeApi\Normalizer\AbilitySummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerryDetail::class => \App\Generated\PokeApi\Normalizer\BerryDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerryDetailFlavorsItem::class => \App\Generated\PokeApi\Normalizer\BerryDetailFlavorsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerryDetailFlavorsItemFlavor::class => \App\Generated\PokeApi\Normalizer\BerryDetailFlavorsItemFlavorNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerryFirmnessDetail::class => \App\Generated\PokeApi\Normalizer\BerryFirmnessDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerryFirmnessName::class => \App\Generated\PokeApi\Normalizer\BerryFirmnessNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerryFirmnessSummary::class => \App\Generated\PokeApi\Normalizer\BerryFirmnessSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerryFlavorDetail::class => \App\Generated\PokeApi\Normalizer\BerryFlavorDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerryFlavorDetailBerriesItem::class => \App\Generated\PokeApi\Normalizer\BerryFlavorDetailBerriesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerryFlavorDetailBerriesItemBerry::class => \App\Generated\PokeApi\Normalizer\BerryFlavorDetailBerriesItemBerryNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerryFlavorName::class => \App\Generated\PokeApi\Normalizer\BerryFlavorNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerryFlavorSummary::class => \App\Generated\PokeApi\Normalizer\BerryFlavorSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\BerrySummary::class => \App\Generated\PokeApi\Normalizer\BerrySummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\CharacteristicDescription::class => \App\Generated\PokeApi\Normalizer\CharacteristicDescriptionNormalizer::class,
        
        \App\Generated\PokeApi\Model\CharacteristicDetail::class => \App\Generated\PokeApi\Normalizer\CharacteristicDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\CharacteristicSummary::class => \App\Generated\PokeApi\Normalizer\CharacteristicSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\ContestEffectDetail::class => \App\Generated\PokeApi\Normalizer\ContestEffectDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\ContestEffectEffectText::class => \App\Generated\PokeApi\Normalizer\ContestEffectEffectTextNormalizer::class,
        
        \App\Generated\PokeApi\Model\ContestEffectFlavorText::class => \App\Generated\PokeApi\Normalizer\ContestEffectFlavorTextNormalizer::class,
        
        \App\Generated\PokeApi\Model\ContestEffectSummary::class => \App\Generated\PokeApi\Normalizer\ContestEffectSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\ContestTypeDetail::class => \App\Generated\PokeApi\Normalizer\ContestTypeDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\ContestTypeDetailBerryFlavor::class => \App\Generated\PokeApi\Normalizer\ContestTypeDetailBerryFlavorNormalizer::class,
        
        \App\Generated\PokeApi\Model\ContestTypeName::class => \App\Generated\PokeApi\Normalizer\ContestTypeNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\ContestTypeSummary::class => \App\Generated\PokeApi\Normalizer\ContestTypeSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\EggGroupDetail::class => \App\Generated\PokeApi\Normalizer\EggGroupDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\EggGroupDetailPokemonSpeciesItem::class => \App\Generated\PokeApi\Normalizer\EggGroupDetailPokemonSpeciesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\EggGroupName::class => \App\Generated\PokeApi\Normalizer\EggGroupNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\EggGroupSummary::class => \App\Generated\PokeApi\Normalizer\EggGroupSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\EncounterConditionDetail::class => \App\Generated\PokeApi\Normalizer\EncounterConditionDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\EncounterConditionName::class => \App\Generated\PokeApi\Normalizer\EncounterConditionNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\EncounterConditionSummary::class => \App\Generated\PokeApi\Normalizer\EncounterConditionSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\EncounterConditionValueDetail::class => \App\Generated\PokeApi\Normalizer\EncounterConditionValueDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\EncounterConditionValueName::class => \App\Generated\PokeApi\Normalizer\EncounterConditionValueNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\EncounterConditionValueSummary::class => \App\Generated\PokeApi\Normalizer\EncounterConditionValueSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\EncounterMethodDetail::class => \App\Generated\PokeApi\Normalizer\EncounterMethodDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\EncounterMethodName::class => \App\Generated\PokeApi\Normalizer\EncounterMethodNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\EncounterMethodSummary::class => \App\Generated\PokeApi\Normalizer\EncounterMethodSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetail::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChain::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItem::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainEvolvesToItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGender::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGenderNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItem::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItem::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocation::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocationNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTrigger::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTriggerNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionId::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionIdNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormId::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormIdNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemSpecies::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainEvolvesToItemSpeciesNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainDetailChainSpecies::class => \App\Generated\PokeApi\Normalizer\EvolutionChainDetailChainSpeciesNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionChainSummary::class => \App\Generated\PokeApi\Normalizer\EvolutionChainSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionTriggerDetail::class => \App\Generated\PokeApi\Normalizer\EvolutionTriggerDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionTriggerDetailPokemonSpeciesItem::class => \App\Generated\PokeApi\Normalizer\EvolutionTriggerDetailPokemonSpeciesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionTriggerName::class => \App\Generated\PokeApi\Normalizer\EvolutionTriggerNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\EvolutionTriggerSummary::class => \App\Generated\PokeApi\Normalizer\EvolutionTriggerSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\Experience::class => \App\Generated\PokeApi\Normalizer\ExperienceNormalizer::class,
        
        \App\Generated\PokeApi\Model\GenderDetail::class => \App\Generated\PokeApi\Normalizer\GenderDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\GenderDetailPokemonSpeciesDetailsItem::class => \App\Generated\PokeApi\Normalizer\GenderDetailPokemonSpeciesDetailsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\GenderDetailPokemonSpeciesDetailsItemPokemonSpecies::class => \App\Generated\PokeApi\Normalizer\GenderDetailPokemonSpeciesDetailsItemPokemonSpeciesNormalizer::class,
        
        \App\Generated\PokeApi\Model\GenderDetailRequiredForEvolutionItem::class => \App\Generated\PokeApi\Normalizer\GenderDetailRequiredForEvolutionItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\GenderSummary::class => \App\Generated\PokeApi\Normalizer\GenderSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\GenerationDetail::class => \App\Generated\PokeApi\Normalizer\GenerationDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\GenerationName::class => \App\Generated\PokeApi\Normalizer\GenerationNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\GenerationSummary::class => \App\Generated\PokeApi\Normalizer\GenerationSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\GrowthRateDescription::class => \App\Generated\PokeApi\Normalizer\GrowthRateDescriptionNormalizer::class,
        
        \App\Generated\PokeApi\Model\GrowthRateDetail::class => \App\Generated\PokeApi\Normalizer\GrowthRateDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\GrowthRateSummary::class => \App\Generated\PokeApi\Normalizer\GrowthRateSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemAttributeDescription::class => \App\Generated\PokeApi\Normalizer\ItemAttributeDescriptionNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemAttributeDetail::class => \App\Generated\PokeApi\Normalizer\ItemAttributeDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemAttributeDetailItemsItem::class => \App\Generated\PokeApi\Normalizer\ItemAttributeDetailItemsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemAttributeName::class => \App\Generated\PokeApi\Normalizer\ItemAttributeNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemAttributeSummary::class => \App\Generated\PokeApi\Normalizer\ItemAttributeSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemCategoryDetail::class => \App\Generated\PokeApi\Normalizer\ItemCategoryDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemCategoryName::class => \App\Generated\PokeApi\Normalizer\ItemCategoryNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemCategorySummary::class => \App\Generated\PokeApi\Normalizer\ItemCategorySummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemDetail::class => \App\Generated\PokeApi\Normalizer\ItemDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemDetailAttributesItem::class => \App\Generated\PokeApi\Normalizer\ItemDetailAttributesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItem::class => \App\Generated\PokeApi\Normalizer\ItemDetailHeldByPokemonItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItemPokemon::class => \App\Generated\PokeApi\Normalizer\ItemDetailHeldByPokemonItemPokemonNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItemVersionDetailsItem::class => \App\Generated\PokeApi\Normalizer\ItemDetailHeldByPokemonItemVersionDetailsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItemVersionDetailsItemVersion::class => \App\Generated\PokeApi\Normalizer\ItemDetailHeldByPokemonItemVersionDetailsItemVersionNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemDetailSprites::class => \App\Generated\PokeApi\Normalizer\ItemDetailSpritesNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemDetailBabyTriggerFor::class => \App\Generated\PokeApi\Normalizer\ItemDetailBabyTriggerForNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemDetailMachinesItem::class => \App\Generated\PokeApi\Normalizer\ItemDetailMachinesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemDetailMachinesItemVersionGroup::class => \App\Generated\PokeApi\Normalizer\ItemDetailMachinesItemVersionGroupNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemEffectText::class => \App\Generated\PokeApi\Normalizer\ItemEffectTextNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemFlavorText::class => \App\Generated\PokeApi\Normalizer\ItemFlavorTextNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemFlingEffectDetail::class => \App\Generated\PokeApi\Normalizer\ItemFlingEffectDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemFlingEffectEffectText::class => \App\Generated\PokeApi\Normalizer\ItemFlingEffectEffectTextNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemFlingEffectSummary::class => \App\Generated\PokeApi\Normalizer\ItemFlingEffectSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemGameIndex::class => \App\Generated\PokeApi\Normalizer\ItemGameIndexNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemName::class => \App\Generated\PokeApi\Normalizer\ItemNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemPocketDetail::class => \App\Generated\PokeApi\Normalizer\ItemPocketDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemPocketName::class => \App\Generated\PokeApi\Normalizer\ItemPocketNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemPocketSummary::class => \App\Generated\PokeApi\Normalizer\ItemPocketSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\ItemSummary::class => \App\Generated\PokeApi\Normalizer\ItemSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\LanguageDetail::class => \App\Generated\PokeApi\Normalizer\LanguageDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\LanguageName::class => \App\Generated\PokeApi\Normalizer\LanguageNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\LanguageSummary::class => \App\Generated\PokeApi\Normalizer\LanguageSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetail::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItem::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailEncounterMethodRatesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItemEncounterMethod::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailEncounterMethodRatesItemEncounterMethodNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItemVersionDetailsItem::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemVersion::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemVersionNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItem::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailPokemonEncountersItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemPokemon::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailPokemonEncountersItemPokemonNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItem::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailPokemonEncountersItemVersionDetailsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersion::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersionNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValues::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValuesNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethod::class => \App\Generated\PokeApi\Normalizer\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethodNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaName::class => \App\Generated\PokeApi\Normalizer\LocationAreaNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationAreaSummary::class => \App\Generated\PokeApi\Normalizer\LocationAreaSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationDetail::class => \App\Generated\PokeApi\Normalizer\LocationDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationGameIndex::class => \App\Generated\PokeApi\Normalizer\LocationGameIndexNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationName::class => \App\Generated\PokeApi\Normalizer\LocationNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\LocationSummary::class => \App\Generated\PokeApi\Normalizer\LocationSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\MachineDetail::class => \App\Generated\PokeApi\Normalizer\MachineDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\MachineSummary::class => \App\Generated\PokeApi\Normalizer\MachineSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveBattleStyleDetail::class => \App\Generated\PokeApi\Normalizer\MoveBattleStyleDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveBattleStyleName::class => \App\Generated\PokeApi\Normalizer\MoveBattleStyleNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveBattleStyleSummary::class => \App\Generated\PokeApi\Normalizer\MoveBattleStyleSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveChange::class => \App\Generated\PokeApi\Normalizer\MoveChangeNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveChangeEffectEntriesItem::class => \App\Generated\PokeApi\Normalizer\MoveChangeEffectEntriesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveChangeEffectEntriesItemLanguage::class => \App\Generated\PokeApi\Normalizer\MoveChangeEffectEntriesItemLanguageNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDamageClassDescription::class => \App\Generated\PokeApi\Normalizer\MoveDamageClassDescriptionNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDamageClassDetail::class => \App\Generated\PokeApi\Normalizer\MoveDamageClassDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDamageClassName::class => \App\Generated\PokeApi\Normalizer\MoveDamageClassNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDamageClassSummary::class => \App\Generated\PokeApi\Normalizer\MoveDamageClassSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetail::class => \App\Generated\PokeApi\Normalizer\MoveDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailContestCombos::class => \App\Generated\PokeApi\Normalizer\MoveDetailContestCombosNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailContestCombosNormal::class => \App\Generated\PokeApi\Normalizer\MoveDetailContestCombosNormalNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailContestCombosNormalUseBeforeItem::class => \App\Generated\PokeApi\Normalizer\MoveDetailContestCombosNormalUseBeforeItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailContestCombosNormalUseAfterItem::class => \App\Generated\PokeApi\Normalizer\MoveDetailContestCombosNormalUseAfterItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailContestCombosSuper::class => \App\Generated\PokeApi\Normalizer\MoveDetailContestCombosSuperNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailContestCombosSuperUseBeforeItem::class => \App\Generated\PokeApi\Normalizer\MoveDetailContestCombosSuperUseBeforeItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailContestCombosSuperUseAfterItem::class => \App\Generated\PokeApi\Normalizer\MoveDetailContestCombosSuperUseAfterItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailEffectEntriesItem::class => \App\Generated\PokeApi\Normalizer\MoveDetailEffectEntriesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailEffectEntriesItemLanguage::class => \App\Generated\PokeApi\Normalizer\MoveDetailEffectEntriesItemLanguageNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailEffectChangesItem::class => \App\Generated\PokeApi\Normalizer\MoveDetailEffectChangesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailEffectChangesItemEffectEntriesItem::class => \App\Generated\PokeApi\Normalizer\MoveDetailEffectChangesItemEffectEntriesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailEffectChangesItemEffectEntriesItemLanguage::class => \App\Generated\PokeApi\Normalizer\MoveDetailEffectChangesItemEffectEntriesItemLanguageNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailEffectChangesItemVersionGroup::class => \App\Generated\PokeApi\Normalizer\MoveDetailEffectChangesItemVersionGroupNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailMeta::class => \App\Generated\PokeApi\Normalizer\MoveDetailMetaNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailStatChangesItem::class => \App\Generated\PokeApi\Normalizer\MoveDetailStatChangesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailStatChangesItemStat::class => \App\Generated\PokeApi\Normalizer\MoveDetailStatChangesItemStatNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailMachinesItem::class => \App\Generated\PokeApi\Normalizer\MoveDetailMachinesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailMachinesItemMachine::class => \App\Generated\PokeApi\Normalizer\MoveDetailMachinesItemMachineNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailMachinesItemVersionGroup::class => \App\Generated\PokeApi\Normalizer\MoveDetailMachinesItemVersionGroupNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveDetailLearnedByPokemonItem::class => \App\Generated\PokeApi\Normalizer\MoveDetailLearnedByPokemonItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveFlavorText::class => \App\Generated\PokeApi\Normalizer\MoveFlavorTextNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveLearnMethodDescription::class => \App\Generated\PokeApi\Normalizer\MoveLearnMethodDescriptionNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveLearnMethodDetail::class => \App\Generated\PokeApi\Normalizer\MoveLearnMethodDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveLearnMethodDetailVersionGroupsItem::class => \App\Generated\PokeApi\Normalizer\MoveLearnMethodDetailVersionGroupsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveLearnMethodName::class => \App\Generated\PokeApi\Normalizer\MoveLearnMethodNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveLearnMethodSummary::class => \App\Generated\PokeApi\Normalizer\MoveLearnMethodSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveMeta::class => \App\Generated\PokeApi\Normalizer\MoveMetaNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveMetaAilmentDetail::class => \App\Generated\PokeApi\Normalizer\MoveMetaAilmentDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveMetaAilmentDetailMovesItem::class => \App\Generated\PokeApi\Normalizer\MoveMetaAilmentDetailMovesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveMetaAilmentName::class => \App\Generated\PokeApi\Normalizer\MoveMetaAilmentNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveMetaAilmentSummary::class => \App\Generated\PokeApi\Normalizer\MoveMetaAilmentSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveMetaCategoryDescription::class => \App\Generated\PokeApi\Normalizer\MoveMetaCategoryDescriptionNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveMetaCategoryDetail::class => \App\Generated\PokeApi\Normalizer\MoveMetaCategoryDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveMetaCategoryDetailMovesItem::class => \App\Generated\PokeApi\Normalizer\MoveMetaCategoryDetailMovesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveMetaCategorySummary::class => \App\Generated\PokeApi\Normalizer\MoveMetaCategorySummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveName::class => \App\Generated\PokeApi\Normalizer\MoveNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveSummary::class => \App\Generated\PokeApi\Normalizer\MoveSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveTargetDescription::class => \App\Generated\PokeApi\Normalizer\MoveTargetDescriptionNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveTargetDetail::class => \App\Generated\PokeApi\Normalizer\MoveTargetDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveTargetName::class => \App\Generated\PokeApi\Normalizer\MoveTargetNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\MoveTargetSummary::class => \App\Generated\PokeApi\Normalizer\MoveTargetSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\NatureBattleStylePreference::class => \App\Generated\PokeApi\Normalizer\NatureBattleStylePreferenceNormalizer::class,
        
        \App\Generated\PokeApi\Model\NatureDetail::class => \App\Generated\PokeApi\Normalizer\NatureDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\NatureDetailPokeathlonStatChangesItem::class => \App\Generated\PokeApi\Normalizer\NatureDetailPokeathlonStatChangesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\NatureDetailPokeathlonStatChangesItemPokeathlonStat::class => \App\Generated\PokeApi\Normalizer\NatureDetailPokeathlonStatChangesItemPokeathlonStatNormalizer::class,
        
        \App\Generated\PokeApi\Model\NatureName::class => \App\Generated\PokeApi\Normalizer\NatureNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\NatureSummary::class => \App\Generated\PokeApi\Normalizer\NatureSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedAbilitySummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedAbilitySummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedBerryFirmnessSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedBerryFirmnessSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedBerryFlavorSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedBerryFlavorSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedBerrySummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedBerrySummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedCharacteristicSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedCharacteristicSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedContestEffectSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedContestEffectSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedContestTypeSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedContestTypeSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedEggGroupSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedEggGroupSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedEncounterConditionSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedEncounterConditionSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedEncounterConditionValueSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedEncounterConditionValueSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedEncounterMethodSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedEncounterMethodSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedEvolutionChainSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedEvolutionChainSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedEvolutionTriggerSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedEvolutionTriggerSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedGenderSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedGenderSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedGenerationSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedGenerationSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedGrowthRateSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedGrowthRateSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedItemAttributeSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedItemAttributeSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedItemCategorySummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedItemCategorySummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedItemFlingEffectSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedItemFlingEffectSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedItemPocketSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedItemPocketSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedItemSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedItemSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedLanguageSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedLanguageSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedLocationAreaSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedLocationAreaSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedLocationSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedLocationSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedMachineSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedMachineSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedMoveBattleStyleSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedMoveBattleStyleSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedMoveDamageClassSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedMoveDamageClassSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedMoveLearnMethodSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedMoveLearnMethodSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedMoveMetaAilmentSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedMoveMetaAilmentSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedMoveMetaCategorySummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedMoveMetaCategorySummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedMoveSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedMoveSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedMoveTargetSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedMoveTargetSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedNatureSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedNatureSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedPalParkAreaSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedPalParkAreaSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedPokeathlonStatSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedPokeathlonStatSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedPokedexSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedPokedexSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedPokemonColorSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedPokemonColorSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedPokemonFormSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedPokemonFormSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedPokemonHabitatSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedPokemonHabitatSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedPokemonShapeSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedPokemonShapeSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedPokemonSpeciesSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedPokemonSpeciesSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedPokemonSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedPokemonSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedRegionSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedRegionSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedStatSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedStatSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedSuperContestEffectSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedSuperContestEffectSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedTypeSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedTypeSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedVersionGroupSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedVersionGroupSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PaginatedVersionSummaryList::class => \App\Generated\PokeApi\Normalizer\PaginatedVersionSummaryListNormalizer::class,
        
        \App\Generated\PokeApi\Model\PalParkAreaDetail::class => \App\Generated\PokeApi\Normalizer\PalParkAreaDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\PalParkAreaDetailPokemonEncountersItem::class => \App\Generated\PokeApi\Normalizer\PalParkAreaDetailPokemonEncountersItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PalParkAreaDetailPokemonEncountersItemPokemonSpecies::class => \App\Generated\PokeApi\Normalizer\PalParkAreaDetailPokemonEncountersItemPokemonSpeciesNormalizer::class,
        
        \App\Generated\PokeApi\Model\PalParkAreaName::class => \App\Generated\PokeApi\Normalizer\PalParkAreaNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\PalParkAreaSummary::class => \App\Generated\PokeApi\Normalizer\PalParkAreaSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokeathlonStatDetail::class => \App\Generated\PokeApi\Normalizer\PokeathlonStatDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNatures::class => \App\Generated\PokeApi\Normalizer\PokeathlonStatDetailAffectingNaturesNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesDecreaseItem::class => \App\Generated\PokeApi\Normalizer\PokeathlonStatDetailAffectingNaturesDecreaseItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesDecreaseItemNature::class => \App\Generated\PokeApi\Normalizer\PokeathlonStatDetailAffectingNaturesDecreaseItemNatureNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesIncreaseItem::class => \App\Generated\PokeApi\Normalizer\PokeathlonStatDetailAffectingNaturesIncreaseItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesIncreaseItemNature::class => \App\Generated\PokeApi\Normalizer\PokeathlonStatDetailAffectingNaturesIncreaseItemNatureNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokeathlonStatName::class => \App\Generated\PokeApi\Normalizer\PokeathlonStatNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokeathlonStatSummary::class => \App\Generated\PokeApi\Normalizer\PokeathlonStatSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokedexDescription::class => \App\Generated\PokeApi\Normalizer\PokedexDescriptionNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokedexDetail::class => \App\Generated\PokeApi\Normalizer\PokedexDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokedexDetailPokemonEntriesItem::class => \App\Generated\PokeApi\Normalizer\PokedexDetailPokemonEntriesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokedexDetailPokemonEntriesItemPokemonSpecies::class => \App\Generated\PokeApi\Normalizer\PokedexDetailPokemonEntriesItemPokemonSpeciesNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokedexDetailVersionGroupsItem::class => \App\Generated\PokeApi\Normalizer\PokedexDetailVersionGroupsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokedexName::class => \App\Generated\PokeApi\Normalizer\PokedexNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokedexSummary::class => \App\Generated\PokeApi\Normalizer\PokedexSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonColorDetail::class => \App\Generated\PokeApi\Normalizer\PokemonColorDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonColorName::class => \App\Generated\PokeApi\Normalizer\PokemonColorNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonColorSummary::class => \App\Generated\PokeApi\Normalizer\PokemonColorSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetail::class => \App\Generated\PokeApi\Normalizer\PokemonDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailAbilitiesItem::class => \App\Generated\PokeApi\Normalizer\PokemonDetailAbilitiesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailAbilitiesItemAbility::class => \App\Generated\PokeApi\Normalizer\PokemonDetailAbilitiesItemAbilityNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItem::class => \App\Generated\PokeApi\Normalizer\PokemonDetailPastAbilitiesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItemAbilitiesItem::class => \App\Generated\PokeApi\Normalizer\PokemonDetailPastAbilitiesItemAbilitiesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItemAbilitiesItemAbility::class => \App\Generated\PokeApi\Normalizer\PokemonDetailPastAbilitiesItemAbilitiesItemAbilityNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItemGeneration::class => \App\Generated\PokeApi\Normalizer\PokemonDetailPastAbilitiesItemGenerationNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItem::class => \App\Generated\PokeApi\Normalizer\PokemonDetailHeldItemsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItemItem::class => \App\Generated\PokeApi\Normalizer\PokemonDetailHeldItemsItemItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItemVersionDetailsItem::class => \App\Generated\PokeApi\Normalizer\PokemonDetailHeldItemsItemVersionDetailsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItemVersionDetailsItemVersion::class => \App\Generated\PokeApi\Normalizer\PokemonDetailHeldItemsItemVersionDetailsItemVersionNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailMovesItem::class => \App\Generated\PokeApi\Normalizer\PokemonDetailMovesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailMovesItemMove::class => \App\Generated\PokeApi\Normalizer\PokemonDetailMovesItemMoveNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailMovesItemVersionGroupDetailsItem::class => \App\Generated\PokeApi\Normalizer\PokemonDetailMovesItemVersionGroupDetailsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethod::class => \App\Generated\PokeApi\Normalizer\PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethodNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailMovesItemVersionGroupDetailsItemVersionGroup::class => \App\Generated\PokeApi\Normalizer\PokemonDetailMovesItemVersionGroupDetailsItemVersionGroupNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailSprites::class => \App\Generated\PokeApi\Normalizer\PokemonDetailSpritesNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailCries::class => \App\Generated\PokeApi\Normalizer\PokemonDetailCriesNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailTypesItem::class => \App\Generated\PokeApi\Normalizer\PokemonDetailTypesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailTypesItemType::class => \App\Generated\PokeApi\Normalizer\PokemonDetailTypesItemTypeNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailPastTypesItem::class => \App\Generated\PokeApi\Normalizer\PokemonDetailPastTypesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailPastTypesItemGeneration::class => \App\Generated\PokeApi\Normalizer\PokemonDetailPastTypesItemGenerationNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailPastTypesItemTypesItem::class => \App\Generated\PokeApi\Normalizer\PokemonDetailPastTypesItemTypesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDetailPastTypesItemTypesItemType::class => \App\Generated\PokeApi\Normalizer\PokemonDetailPastTypesItemTypesItemTypeNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonDexEntry::class => \App\Generated\PokeApi\Normalizer\PokemonDexEntryNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonFormDetail::class => \App\Generated\PokeApi\Normalizer\PokemonFormDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonFormDetailSprites::class => \App\Generated\PokeApi\Normalizer\PokemonFormDetailSpritesNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonFormDetailFormNamesItem::class => \App\Generated\PokeApi\Normalizer\PokemonFormDetailFormNamesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonFormDetailFormNamesItemLanguage::class => \App\Generated\PokeApi\Normalizer\PokemonFormDetailFormNamesItemLanguageNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonFormDetailNamesItem::class => \App\Generated\PokeApi\Normalizer\PokemonFormDetailNamesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonFormDetailNamesItemLanguage::class => \App\Generated\PokeApi\Normalizer\PokemonFormDetailNamesItemLanguageNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonFormDetailTypesItem::class => \App\Generated\PokeApi\Normalizer\PokemonFormDetailTypesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonFormDetailTypesItemType::class => \App\Generated\PokeApi\Normalizer\PokemonFormDetailTypesItemTypeNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonFormSummary::class => \App\Generated\PokeApi\Normalizer\PokemonFormSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonGameIndex::class => \App\Generated\PokeApi\Normalizer\PokemonGameIndexNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonHabitatDetail::class => \App\Generated\PokeApi\Normalizer\PokemonHabitatDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonHabitatName::class => \App\Generated\PokeApi\Normalizer\PokemonHabitatNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonHabitatSummary::class => \App\Generated\PokeApi\Normalizer\PokemonHabitatSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonShapeDetail::class => \App\Generated\PokeApi\Normalizer\PokemonShapeDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonShapeDetailAwesomeNamesItem::class => \App\Generated\PokeApi\Normalizer\PokemonShapeDetailAwesomeNamesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonShapeDetailAwesomeNamesItemLanguage::class => \App\Generated\PokeApi\Normalizer\PokemonShapeDetailAwesomeNamesItemLanguageNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonShapeDetailNamesItem::class => \App\Generated\PokeApi\Normalizer\PokemonShapeDetailNamesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonShapeSummary::class => \App\Generated\PokeApi\Normalizer\PokemonShapeSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesDescription::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesDescriptionNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesDetail::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesDetailEggGroupsItem::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesDetailEggGroupsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesDetailNamesItem::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesDetailNamesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesDetailNamesItemLanguage::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesDetailNamesItemLanguageNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesDetailPalParkEncountersItem::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesDetailPalParkEncountersItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesDetailPalParkEncountersItemArea::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesDetailPalParkEncountersItemAreaNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesDetailGeneraItem::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesDetailGeneraItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesDetailGeneraItemLanguage::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesDetailGeneraItemLanguageNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesDetailVarietiesItem::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesDetailVarietiesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesDetailVarietiesItemPokemon::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesDetailVarietiesItemPokemonNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesFlavorText::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesFlavorTextNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSpeciesSummary::class => \App\Generated\PokeApi\Normalizer\PokemonSpeciesSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonStat::class => \App\Generated\PokeApi\Normalizer\PokemonStatNormalizer::class,
        
        \App\Generated\PokeApi\Model\PokemonSummary::class => \App\Generated\PokeApi\Normalizer\PokemonSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\RegionDetail::class => \App\Generated\PokeApi\Normalizer\RegionDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\RegionDetailMainGeneration::class => \App\Generated\PokeApi\Normalizer\RegionDetailMainGenerationNormalizer::class,
        
        \App\Generated\PokeApi\Model\RegionDetailVersionGroupsItem::class => \App\Generated\PokeApi\Normalizer\RegionDetailVersionGroupsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\RegionName::class => \App\Generated\PokeApi\Normalizer\RegionNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\RegionSummary::class => \App\Generated\PokeApi\Normalizer\RegionSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\StatDetail::class => \App\Generated\PokeApi\Normalizer\StatDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\StatDetailAffectingMoves::class => \App\Generated\PokeApi\Normalizer\StatDetailAffectingMovesNormalizer::class,
        
        \App\Generated\PokeApi\Model\StatDetailAffectingMovesIncreaseItem::class => \App\Generated\PokeApi\Normalizer\StatDetailAffectingMovesIncreaseItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\StatDetailAffectingMovesIncreaseItemMove::class => \App\Generated\PokeApi\Normalizer\StatDetailAffectingMovesIncreaseItemMoveNormalizer::class,
        
        \App\Generated\PokeApi\Model\StatDetailAffectingMovesDecreaseItem::class => \App\Generated\PokeApi\Normalizer\StatDetailAffectingMovesDecreaseItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\StatDetailAffectingMovesDecreaseItemMove::class => \App\Generated\PokeApi\Normalizer\StatDetailAffectingMovesDecreaseItemMoveNormalizer::class,
        
        \App\Generated\PokeApi\Model\StatDetailAffectingNatures::class => \App\Generated\PokeApi\Normalizer\StatDetailAffectingNaturesNormalizer::class,
        
        \App\Generated\PokeApi\Model\StatDetailAffectingNaturesIncreaseItem::class => \App\Generated\PokeApi\Normalizer\StatDetailAffectingNaturesIncreaseItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\StatDetailAffectingNaturesDecreaseItem::class => \App\Generated\PokeApi\Normalizer\StatDetailAffectingNaturesDecreaseItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\StatName::class => \App\Generated\PokeApi\Normalizer\StatNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\StatSummary::class => \App\Generated\PokeApi\Normalizer\StatSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\SuperContestEffectDetail::class => \App\Generated\PokeApi\Normalizer\SuperContestEffectDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\SuperContestEffectFlavorText::class => \App\Generated\PokeApi\Normalizer\SuperContestEffectFlavorTextNormalizer::class,
        
        \App\Generated\PokeApi\Model\SuperContestEffectSummary::class => \App\Generated\PokeApi\Normalizer\SuperContestEffectSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetail::class => \App\Generated\PokeApi\Normalizer\TypeDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailDamageRelations::class => \App\Generated\PokeApi\Normalizer\TypeDetailDamageRelationsNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsNoDamageToItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailDamageRelationsNoDamageToItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsHalfDamageToItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailDamageRelationsHalfDamageToItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsDoubleDamageToItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailDamageRelationsDoubleDamageToItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsNoDamageFromItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailDamageRelationsNoDamageFromItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsHalfDamageFromItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailDamageRelationsHalfDamageFromItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsDoubleDamageFromItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailDamageRelationsDoubleDamageFromItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailPastDamageRelationsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemGeneration::class => \App\Generated\PokeApi\Normalizer\TypeDetailPastDamageRelationsItemGenerationNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelations::class => \App\Generated\PokeApi\Normalizer\TypeDetailPastDamageRelationsItemDamageRelationsNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsNoDamageToItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailPastDamageRelationsItemDamageRelationsNoDamageToItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageToItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageToItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageToItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageToItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsNoDamageFromItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailPastDamageRelationsItemDamageRelationsNoDamageFromItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageFromItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageFromItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageFromItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageFromItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailPokemonItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailPokemonItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailPokemonItemPokemon::class => \App\Generated\PokeApi\Normalizer\TypeDetailPokemonItemPokemonNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeDetailSpritesItemItem::class => \App\Generated\PokeApi\Normalizer\TypeDetailSpritesItemItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeGameIndex::class => \App\Generated\PokeApi\Normalizer\TypeGameIndexNormalizer::class,
        
        \App\Generated\PokeApi\Model\TypeSummary::class => \App\Generated\PokeApi\Normalizer\TypeSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\VersionDetail::class => \App\Generated\PokeApi\Normalizer\VersionDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\VersionGroupDetail::class => \App\Generated\PokeApi\Normalizer\VersionGroupDetailNormalizer::class,
        
        \App\Generated\PokeApi\Model\VersionGroupDetailMoveLearnMethodsItem::class => \App\Generated\PokeApi\Normalizer\VersionGroupDetailMoveLearnMethodsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\VersionGroupDetailPokedexesItem::class => \App\Generated\PokeApi\Normalizer\VersionGroupDetailPokedexesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\VersionGroupDetailRegionsItem::class => \App\Generated\PokeApi\Normalizer\VersionGroupDetailRegionsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\VersionGroupSummary::class => \App\Generated\PokeApi\Normalizer\VersionGroupSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\VersionName::class => \App\Generated\PokeApi\Normalizer\VersionNameNormalizer::class,
        
        \App\Generated\PokeApi\Model\VersionSummary::class => \App\Generated\PokeApi\Normalizer\VersionSummaryNormalizer::class,
        
        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200Item::class => \App\Generated\PokeApi\Normalizer\ApiV2PokemonPokemonIdEncountersGetResponse200ItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemLocationArea::class => \App\Generated\PokeApi\Normalizer\ApiV2PokemonPokemonIdEncountersGetResponse200ItemLocationAreaNormalizer::class,
        
        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem::class => \App\Generated\PokeApi\Normalizer\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem::class => \App\Generated\PokeApi\Normalizer\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemConditionValuesItem::class => \App\Generated\PokeApi\Normalizer\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemConditionValuesItemNormalizer::class,
        
        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethod::class => \App\Generated\PokeApi\Normalizer\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethodNormalizer::class,
        
        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemVersion::class => \App\Generated\PokeApi\Normalizer\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemVersionNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \App\Generated\PokeApi\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \App\Generated\PokeApi\Model\AbilityChange::class => false,
            \App\Generated\PokeApi\Model\AbilityChangeEffectText::class => false,
            \App\Generated\PokeApi\Model\AbilityDetail::class => false,
            \App\Generated\PokeApi\Model\AbilityDetailPokemonItem::class => false,
            \App\Generated\PokeApi\Model\AbilityDetailPokemonItemPokemon::class => false,
            \App\Generated\PokeApi\Model\AbilityEffectText::class => false,
            \App\Generated\PokeApi\Model\AbilityFlavorText::class => false,
            \App\Generated\PokeApi\Model\AbilityName::class => false,
            \App\Generated\PokeApi\Model\AbilitySummary::class => false,
            \App\Generated\PokeApi\Model\BerryDetail::class => false,
            \App\Generated\PokeApi\Model\BerryDetailFlavorsItem::class => false,
            \App\Generated\PokeApi\Model\BerryDetailFlavorsItemFlavor::class => false,
            \App\Generated\PokeApi\Model\BerryFirmnessDetail::class => false,
            \App\Generated\PokeApi\Model\BerryFirmnessName::class => false,
            \App\Generated\PokeApi\Model\BerryFirmnessSummary::class => false,
            \App\Generated\PokeApi\Model\BerryFlavorDetail::class => false,
            \App\Generated\PokeApi\Model\BerryFlavorDetailBerriesItem::class => false,
            \App\Generated\PokeApi\Model\BerryFlavorDetailBerriesItemBerry::class => false,
            \App\Generated\PokeApi\Model\BerryFlavorName::class => false,
            \App\Generated\PokeApi\Model\BerryFlavorSummary::class => false,
            \App\Generated\PokeApi\Model\BerrySummary::class => false,
            \App\Generated\PokeApi\Model\CharacteristicDescription::class => false,
            \App\Generated\PokeApi\Model\CharacteristicDetail::class => false,
            \App\Generated\PokeApi\Model\CharacteristicSummary::class => false,
            \App\Generated\PokeApi\Model\ContestEffectDetail::class => false,
            \App\Generated\PokeApi\Model\ContestEffectEffectText::class => false,
            \App\Generated\PokeApi\Model\ContestEffectFlavorText::class => false,
            \App\Generated\PokeApi\Model\ContestEffectSummary::class => false,
            \App\Generated\PokeApi\Model\ContestTypeDetail::class => false,
            \App\Generated\PokeApi\Model\ContestTypeDetailBerryFlavor::class => false,
            \App\Generated\PokeApi\Model\ContestTypeName::class => false,
            \App\Generated\PokeApi\Model\ContestTypeSummary::class => false,
            \App\Generated\PokeApi\Model\EggGroupDetail::class => false,
            \App\Generated\PokeApi\Model\EggGroupDetailPokemonSpeciesItem::class => false,
            \App\Generated\PokeApi\Model\EggGroupName::class => false,
            \App\Generated\PokeApi\Model\EggGroupSummary::class => false,
            \App\Generated\PokeApi\Model\EncounterConditionDetail::class => false,
            \App\Generated\PokeApi\Model\EncounterConditionName::class => false,
            \App\Generated\PokeApi\Model\EncounterConditionSummary::class => false,
            \App\Generated\PokeApi\Model\EncounterConditionValueDetail::class => false,
            \App\Generated\PokeApi\Model\EncounterConditionValueName::class => false,
            \App\Generated\PokeApi\Model\EncounterConditionValueSummary::class => false,
            \App\Generated\PokeApi\Model\EncounterMethodDetail::class => false,
            \App\Generated\PokeApi\Model\EncounterMethodName::class => false,
            \App\Generated\PokeApi\Model\EncounterMethodSummary::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetail::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChain::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItem::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGender::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItem::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItem::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocation::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTrigger::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionId::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormId::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemSpecies::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainDetailChainSpecies::class => false,
            \App\Generated\PokeApi\Model\EvolutionChainSummary::class => false,
            \App\Generated\PokeApi\Model\EvolutionTriggerDetail::class => false,
            \App\Generated\PokeApi\Model\EvolutionTriggerDetailPokemonSpeciesItem::class => false,
            \App\Generated\PokeApi\Model\EvolutionTriggerName::class => false,
            \App\Generated\PokeApi\Model\EvolutionTriggerSummary::class => false,
            \App\Generated\PokeApi\Model\Experience::class => false,
            \App\Generated\PokeApi\Model\GenderDetail::class => false,
            \App\Generated\PokeApi\Model\GenderDetailPokemonSpeciesDetailsItem::class => false,
            \App\Generated\PokeApi\Model\GenderDetailPokemonSpeciesDetailsItemPokemonSpecies::class => false,
            \App\Generated\PokeApi\Model\GenderDetailRequiredForEvolutionItem::class => false,
            \App\Generated\PokeApi\Model\GenderSummary::class => false,
            \App\Generated\PokeApi\Model\GenerationDetail::class => false,
            \App\Generated\PokeApi\Model\GenerationName::class => false,
            \App\Generated\PokeApi\Model\GenerationSummary::class => false,
            \App\Generated\PokeApi\Model\GrowthRateDescription::class => false,
            \App\Generated\PokeApi\Model\GrowthRateDetail::class => false,
            \App\Generated\PokeApi\Model\GrowthRateSummary::class => false,
            \App\Generated\PokeApi\Model\ItemAttributeDescription::class => false,
            \App\Generated\PokeApi\Model\ItemAttributeDetail::class => false,
            \App\Generated\PokeApi\Model\ItemAttributeDetailItemsItem::class => false,
            \App\Generated\PokeApi\Model\ItemAttributeName::class => false,
            \App\Generated\PokeApi\Model\ItemAttributeSummary::class => false,
            \App\Generated\PokeApi\Model\ItemCategoryDetail::class => false,
            \App\Generated\PokeApi\Model\ItemCategoryName::class => false,
            \App\Generated\PokeApi\Model\ItemCategorySummary::class => false,
            \App\Generated\PokeApi\Model\ItemDetail::class => false,
            \App\Generated\PokeApi\Model\ItemDetailAttributesItem::class => false,
            \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItem::class => false,
            \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItemPokemon::class => false,
            \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItemVersionDetailsItem::class => false,
            \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItemVersionDetailsItemVersion::class => false,
            \App\Generated\PokeApi\Model\ItemDetailSprites::class => false,
            \App\Generated\PokeApi\Model\ItemDetailBabyTriggerFor::class => false,
            \App\Generated\PokeApi\Model\ItemDetailMachinesItem::class => false,
            \App\Generated\PokeApi\Model\ItemDetailMachinesItemVersionGroup::class => false,
            \App\Generated\PokeApi\Model\ItemEffectText::class => false,
            \App\Generated\PokeApi\Model\ItemFlavorText::class => false,
            \App\Generated\PokeApi\Model\ItemFlingEffectDetail::class => false,
            \App\Generated\PokeApi\Model\ItemFlingEffectEffectText::class => false,
            \App\Generated\PokeApi\Model\ItemFlingEffectSummary::class => false,
            \App\Generated\PokeApi\Model\ItemGameIndex::class => false,
            \App\Generated\PokeApi\Model\ItemName::class => false,
            \App\Generated\PokeApi\Model\ItemPocketDetail::class => false,
            \App\Generated\PokeApi\Model\ItemPocketName::class => false,
            \App\Generated\PokeApi\Model\ItemPocketSummary::class => false,
            \App\Generated\PokeApi\Model\ItemSummary::class => false,
            \App\Generated\PokeApi\Model\LanguageDetail::class => false,
            \App\Generated\PokeApi\Model\LanguageName::class => false,
            \App\Generated\PokeApi\Model\LanguageSummary::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetail::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItem::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItemEncounterMethod::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItemVersionDetailsItem::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemVersion::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItem::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemPokemon::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItem::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersion::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValues::class => false,
            \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethod::class => false,
            \App\Generated\PokeApi\Model\LocationAreaName::class => false,
            \App\Generated\PokeApi\Model\LocationAreaSummary::class => false,
            \App\Generated\PokeApi\Model\LocationDetail::class => false,
            \App\Generated\PokeApi\Model\LocationGameIndex::class => false,
            \App\Generated\PokeApi\Model\LocationName::class => false,
            \App\Generated\PokeApi\Model\LocationSummary::class => false,
            \App\Generated\PokeApi\Model\MachineDetail::class => false,
            \App\Generated\PokeApi\Model\MachineSummary::class => false,
            \App\Generated\PokeApi\Model\MoveBattleStyleDetail::class => false,
            \App\Generated\PokeApi\Model\MoveBattleStyleName::class => false,
            \App\Generated\PokeApi\Model\MoveBattleStyleSummary::class => false,
            \App\Generated\PokeApi\Model\MoveChange::class => false,
            \App\Generated\PokeApi\Model\MoveChangeEffectEntriesItem::class => false,
            \App\Generated\PokeApi\Model\MoveChangeEffectEntriesItemLanguage::class => false,
            \App\Generated\PokeApi\Model\MoveDamageClassDescription::class => false,
            \App\Generated\PokeApi\Model\MoveDamageClassDetail::class => false,
            \App\Generated\PokeApi\Model\MoveDamageClassName::class => false,
            \App\Generated\PokeApi\Model\MoveDamageClassSummary::class => false,
            \App\Generated\PokeApi\Model\MoveDetail::class => false,
            \App\Generated\PokeApi\Model\MoveDetailContestCombos::class => false,
            \App\Generated\PokeApi\Model\MoveDetailContestCombosNormal::class => false,
            \App\Generated\PokeApi\Model\MoveDetailContestCombosNormalUseBeforeItem::class => false,
            \App\Generated\PokeApi\Model\MoveDetailContestCombosNormalUseAfterItem::class => false,
            \App\Generated\PokeApi\Model\MoveDetailContestCombosSuper::class => false,
            \App\Generated\PokeApi\Model\MoveDetailContestCombosSuperUseBeforeItem::class => false,
            \App\Generated\PokeApi\Model\MoveDetailContestCombosSuperUseAfterItem::class => false,
            \App\Generated\PokeApi\Model\MoveDetailEffectEntriesItem::class => false,
            \App\Generated\PokeApi\Model\MoveDetailEffectEntriesItemLanguage::class => false,
            \App\Generated\PokeApi\Model\MoveDetailEffectChangesItem::class => false,
            \App\Generated\PokeApi\Model\MoveDetailEffectChangesItemEffectEntriesItem::class => false,
            \App\Generated\PokeApi\Model\MoveDetailEffectChangesItemEffectEntriesItemLanguage::class => false,
            \App\Generated\PokeApi\Model\MoveDetailEffectChangesItemVersionGroup::class => false,
            \App\Generated\PokeApi\Model\MoveDetailMeta::class => false,
            \App\Generated\PokeApi\Model\MoveDetailStatChangesItem::class => false,
            \App\Generated\PokeApi\Model\MoveDetailStatChangesItemStat::class => false,
            \App\Generated\PokeApi\Model\MoveDetailMachinesItem::class => false,
            \App\Generated\PokeApi\Model\MoveDetailMachinesItemMachine::class => false,
            \App\Generated\PokeApi\Model\MoveDetailMachinesItemVersionGroup::class => false,
            \App\Generated\PokeApi\Model\MoveDetailLearnedByPokemonItem::class => false,
            \App\Generated\PokeApi\Model\MoveFlavorText::class => false,
            \App\Generated\PokeApi\Model\MoveLearnMethodDescription::class => false,
            \App\Generated\PokeApi\Model\MoveLearnMethodDetail::class => false,
            \App\Generated\PokeApi\Model\MoveLearnMethodDetailVersionGroupsItem::class => false,
            \App\Generated\PokeApi\Model\MoveLearnMethodName::class => false,
            \App\Generated\PokeApi\Model\MoveLearnMethodSummary::class => false,
            \App\Generated\PokeApi\Model\MoveMeta::class => false,
            \App\Generated\PokeApi\Model\MoveMetaAilmentDetail::class => false,
            \App\Generated\PokeApi\Model\MoveMetaAilmentDetailMovesItem::class => false,
            \App\Generated\PokeApi\Model\MoveMetaAilmentName::class => false,
            \App\Generated\PokeApi\Model\MoveMetaAilmentSummary::class => false,
            \App\Generated\PokeApi\Model\MoveMetaCategoryDescription::class => false,
            \App\Generated\PokeApi\Model\MoveMetaCategoryDetail::class => false,
            \App\Generated\PokeApi\Model\MoveMetaCategoryDetailMovesItem::class => false,
            \App\Generated\PokeApi\Model\MoveMetaCategorySummary::class => false,
            \App\Generated\PokeApi\Model\MoveName::class => false,
            \App\Generated\PokeApi\Model\MoveSummary::class => false,
            \App\Generated\PokeApi\Model\MoveTargetDescription::class => false,
            \App\Generated\PokeApi\Model\MoveTargetDetail::class => false,
            \App\Generated\PokeApi\Model\MoveTargetName::class => false,
            \App\Generated\PokeApi\Model\MoveTargetSummary::class => false,
            \App\Generated\PokeApi\Model\NatureBattleStylePreference::class => false,
            \App\Generated\PokeApi\Model\NatureDetail::class => false,
            \App\Generated\PokeApi\Model\NatureDetailPokeathlonStatChangesItem::class => false,
            \App\Generated\PokeApi\Model\NatureDetailPokeathlonStatChangesItemPokeathlonStat::class => false,
            \App\Generated\PokeApi\Model\NatureName::class => false,
            \App\Generated\PokeApi\Model\NatureSummary::class => false,
            \App\Generated\PokeApi\Model\PaginatedAbilitySummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedBerryFirmnessSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedBerryFlavorSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedBerrySummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedCharacteristicSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedContestEffectSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedContestTypeSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedEggGroupSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedEncounterConditionSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedEncounterConditionValueSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedEncounterMethodSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedEvolutionChainSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedEvolutionTriggerSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedGenderSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedGenerationSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedGrowthRateSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedItemAttributeSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedItemCategorySummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedItemFlingEffectSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedItemPocketSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedItemSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedLanguageSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedLocationAreaSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedLocationSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedMachineSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedMoveBattleStyleSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedMoveDamageClassSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedMoveLearnMethodSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedMoveMetaAilmentSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedMoveMetaCategorySummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedMoveSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedMoveTargetSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedNatureSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedPalParkAreaSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedPokeathlonStatSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedPokedexSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedPokemonColorSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedPokemonFormSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedPokemonHabitatSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedPokemonShapeSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedPokemonSpeciesSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedPokemonSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedRegionSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedStatSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedSuperContestEffectSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedTypeSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedVersionGroupSummaryList::class => false,
            \App\Generated\PokeApi\Model\PaginatedVersionSummaryList::class => false,
            \App\Generated\PokeApi\Model\PalParkAreaDetail::class => false,
            \App\Generated\PokeApi\Model\PalParkAreaDetailPokemonEncountersItem::class => false,
            \App\Generated\PokeApi\Model\PalParkAreaDetailPokemonEncountersItemPokemonSpecies::class => false,
            \App\Generated\PokeApi\Model\PalParkAreaName::class => false,
            \App\Generated\PokeApi\Model\PalParkAreaSummary::class => false,
            \App\Generated\PokeApi\Model\PokeathlonStatDetail::class => false,
            \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNatures::class => false,
            \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesDecreaseItem::class => false,
            \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesDecreaseItemNature::class => false,
            \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesIncreaseItem::class => false,
            \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesIncreaseItemNature::class => false,
            \App\Generated\PokeApi\Model\PokeathlonStatName::class => false,
            \App\Generated\PokeApi\Model\PokeathlonStatSummary::class => false,
            \App\Generated\PokeApi\Model\PokedexDescription::class => false,
            \App\Generated\PokeApi\Model\PokedexDetail::class => false,
            \App\Generated\PokeApi\Model\PokedexDetailPokemonEntriesItem::class => false,
            \App\Generated\PokeApi\Model\PokedexDetailPokemonEntriesItemPokemonSpecies::class => false,
            \App\Generated\PokeApi\Model\PokedexDetailVersionGroupsItem::class => false,
            \App\Generated\PokeApi\Model\PokedexName::class => false,
            \App\Generated\PokeApi\Model\PokedexSummary::class => false,
            \App\Generated\PokeApi\Model\PokemonColorDetail::class => false,
            \App\Generated\PokeApi\Model\PokemonColorName::class => false,
            \App\Generated\PokeApi\Model\PokemonColorSummary::class => false,
            \App\Generated\PokeApi\Model\PokemonDetail::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailAbilitiesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailAbilitiesItemAbility::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItemAbilitiesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItemAbilitiesItemAbility::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItemGeneration::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItem::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItemItem::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItemVersionDetailsItem::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItemVersionDetailsItemVersion::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailMovesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailMovesItemMove::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailMovesItemVersionGroupDetailsItem::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethod::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailMovesItemVersionGroupDetailsItemVersionGroup::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailSprites::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailCries::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailTypesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailTypesItemType::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailPastTypesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailPastTypesItemGeneration::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailPastTypesItemTypesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonDetailPastTypesItemTypesItemType::class => false,
            \App\Generated\PokeApi\Model\PokemonDexEntry::class => false,
            \App\Generated\PokeApi\Model\PokemonFormDetail::class => false,
            \App\Generated\PokeApi\Model\PokemonFormDetailSprites::class => false,
            \App\Generated\PokeApi\Model\PokemonFormDetailFormNamesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonFormDetailFormNamesItemLanguage::class => false,
            \App\Generated\PokeApi\Model\PokemonFormDetailNamesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonFormDetailNamesItemLanguage::class => false,
            \App\Generated\PokeApi\Model\PokemonFormDetailTypesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonFormDetailTypesItemType::class => false,
            \App\Generated\PokeApi\Model\PokemonFormSummary::class => false,
            \App\Generated\PokeApi\Model\PokemonGameIndex::class => false,
            \App\Generated\PokeApi\Model\PokemonHabitatDetail::class => false,
            \App\Generated\PokeApi\Model\PokemonHabitatName::class => false,
            \App\Generated\PokeApi\Model\PokemonHabitatSummary::class => false,
            \App\Generated\PokeApi\Model\PokemonShapeDetail::class => false,
            \App\Generated\PokeApi\Model\PokemonShapeDetailAwesomeNamesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonShapeDetailAwesomeNamesItemLanguage::class => false,
            \App\Generated\PokeApi\Model\PokemonShapeDetailNamesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonShapeSummary::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesDescription::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesDetail::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesDetailEggGroupsItem::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesDetailNamesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesDetailNamesItemLanguage::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesDetailPalParkEncountersItem::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesDetailPalParkEncountersItemArea::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesDetailGeneraItem::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesDetailGeneraItemLanguage::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesDetailVarietiesItem::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesDetailVarietiesItemPokemon::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesFlavorText::class => false,
            \App\Generated\PokeApi\Model\PokemonSpeciesSummary::class => false,
            \App\Generated\PokeApi\Model\PokemonStat::class => false,
            \App\Generated\PokeApi\Model\PokemonSummary::class => false,
            \App\Generated\PokeApi\Model\RegionDetail::class => false,
            \App\Generated\PokeApi\Model\RegionDetailMainGeneration::class => false,
            \App\Generated\PokeApi\Model\RegionDetailVersionGroupsItem::class => false,
            \App\Generated\PokeApi\Model\RegionName::class => false,
            \App\Generated\PokeApi\Model\RegionSummary::class => false,
            \App\Generated\PokeApi\Model\StatDetail::class => false,
            \App\Generated\PokeApi\Model\StatDetailAffectingMoves::class => false,
            \App\Generated\PokeApi\Model\StatDetailAffectingMovesIncreaseItem::class => false,
            \App\Generated\PokeApi\Model\StatDetailAffectingMovesIncreaseItemMove::class => false,
            \App\Generated\PokeApi\Model\StatDetailAffectingMovesDecreaseItem::class => false,
            \App\Generated\PokeApi\Model\StatDetailAffectingMovesDecreaseItemMove::class => false,
            \App\Generated\PokeApi\Model\StatDetailAffectingNatures::class => false,
            \App\Generated\PokeApi\Model\StatDetailAffectingNaturesIncreaseItem::class => false,
            \App\Generated\PokeApi\Model\StatDetailAffectingNaturesDecreaseItem::class => false,
            \App\Generated\PokeApi\Model\StatName::class => false,
            \App\Generated\PokeApi\Model\StatSummary::class => false,
            \App\Generated\PokeApi\Model\SuperContestEffectDetail::class => false,
            \App\Generated\PokeApi\Model\SuperContestEffectFlavorText::class => false,
            \App\Generated\PokeApi\Model\SuperContestEffectSummary::class => false,
            \App\Generated\PokeApi\Model\TypeDetail::class => false,
            \App\Generated\PokeApi\Model\TypeDetailDamageRelations::class => false,
            \App\Generated\PokeApi\Model\TypeDetailDamageRelationsNoDamageToItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailDamageRelationsHalfDamageToItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailDamageRelationsDoubleDamageToItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailDamageRelationsNoDamageFromItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailDamageRelationsHalfDamageFromItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailDamageRelationsDoubleDamageFromItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemGeneration::class => false,
            \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelations::class => false,
            \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsNoDamageToItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageToItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageToItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsNoDamageFromItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageFromItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageFromItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailPokemonItem::class => false,
            \App\Generated\PokeApi\Model\TypeDetailPokemonItemPokemon::class => false,
            \App\Generated\PokeApi\Model\TypeDetailSpritesItemItem::class => false,
            \App\Generated\PokeApi\Model\TypeGameIndex::class => false,
            \App\Generated\PokeApi\Model\TypeSummary::class => false,
            \App\Generated\PokeApi\Model\VersionDetail::class => false,
            \App\Generated\PokeApi\Model\VersionGroupDetail::class => false,
            \App\Generated\PokeApi\Model\VersionGroupDetailMoveLearnMethodsItem::class => false,
            \App\Generated\PokeApi\Model\VersionGroupDetailPokedexesItem::class => false,
            \App\Generated\PokeApi\Model\VersionGroupDetailRegionsItem::class => false,
            \App\Generated\PokeApi\Model\VersionGroupSummary::class => false,
            \App\Generated\PokeApi\Model\VersionName::class => false,
            \App\Generated\PokeApi\Model\VersionSummary::class => false,
            \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200Item::class => false,
            \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemLocationArea::class => false,
            \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem::class => false,
            \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem::class => false,
            \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemConditionValuesItem::class => false,
            \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethod::class => false,
            \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemVersion::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}