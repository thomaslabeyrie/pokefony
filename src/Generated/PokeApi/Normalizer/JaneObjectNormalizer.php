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
        \App\Generated\PokeApi\Model\AbilityChange::class => AbilityChangeNormalizer::class,

        \App\Generated\PokeApi\Model\AbilityChangeEffectText::class => AbilityChangeEffectTextNormalizer::class,

        \App\Generated\PokeApi\Model\AbilityDetail::class => AbilityDetailNormalizer::class,

        \App\Generated\PokeApi\Model\AbilityDetailPokemonItem::class => AbilityDetailPokemonItemNormalizer::class,

        \App\Generated\PokeApi\Model\AbilityDetailPokemonItemPokemon::class => AbilityDetailPokemonItemPokemonNormalizer::class,

        \App\Generated\PokeApi\Model\AbilityEffectText::class => AbilityEffectTextNormalizer::class,

        \App\Generated\PokeApi\Model\AbilityFlavorText::class => AbilityFlavorTextNormalizer::class,

        \App\Generated\PokeApi\Model\AbilityName::class => AbilityNameNormalizer::class,

        \App\Generated\PokeApi\Model\AbilitySummary::class => AbilitySummaryNormalizer::class,

        \App\Generated\PokeApi\Model\BerryDetail::class => BerryDetailNormalizer::class,

        \App\Generated\PokeApi\Model\BerryDetailFlavorsItem::class => BerryDetailFlavorsItemNormalizer::class,

        \App\Generated\PokeApi\Model\BerryDetailFlavorsItemFlavor::class => BerryDetailFlavorsItemFlavorNormalizer::class,

        \App\Generated\PokeApi\Model\BerryFirmnessDetail::class => BerryFirmnessDetailNormalizer::class,

        \App\Generated\PokeApi\Model\BerryFirmnessName::class => BerryFirmnessNameNormalizer::class,

        \App\Generated\PokeApi\Model\BerryFirmnessSummary::class => BerryFirmnessSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\BerryFlavorDetail::class => BerryFlavorDetailNormalizer::class,

        \App\Generated\PokeApi\Model\BerryFlavorDetailBerriesItem::class => BerryFlavorDetailBerriesItemNormalizer::class,

        \App\Generated\PokeApi\Model\BerryFlavorDetailBerriesItemBerry::class => BerryFlavorDetailBerriesItemBerryNormalizer::class,

        \App\Generated\PokeApi\Model\BerryFlavorName::class => BerryFlavorNameNormalizer::class,

        \App\Generated\PokeApi\Model\BerryFlavorSummary::class => BerryFlavorSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\BerrySummary::class => BerrySummaryNormalizer::class,

        \App\Generated\PokeApi\Model\CharacteristicDescription::class => CharacteristicDescriptionNormalizer::class,

        \App\Generated\PokeApi\Model\CharacteristicDetail::class => CharacteristicDetailNormalizer::class,

        \App\Generated\PokeApi\Model\CharacteristicSummary::class => CharacteristicSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\ContestEffectDetail::class => ContestEffectDetailNormalizer::class,

        \App\Generated\PokeApi\Model\ContestEffectEffectText::class => ContestEffectEffectTextNormalizer::class,

        \App\Generated\PokeApi\Model\ContestEffectFlavorText::class => ContestEffectFlavorTextNormalizer::class,

        \App\Generated\PokeApi\Model\ContestEffectSummary::class => ContestEffectSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\ContestTypeDetail::class => ContestTypeDetailNormalizer::class,

        \App\Generated\PokeApi\Model\ContestTypeDetailBerryFlavor::class => ContestTypeDetailBerryFlavorNormalizer::class,

        \App\Generated\PokeApi\Model\ContestTypeName::class => ContestTypeNameNormalizer::class,

        \App\Generated\PokeApi\Model\ContestTypeSummary::class => ContestTypeSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\EggGroupDetail::class => EggGroupDetailNormalizer::class,

        \App\Generated\PokeApi\Model\EggGroupDetailPokemonSpeciesItem::class => EggGroupDetailPokemonSpeciesItemNormalizer::class,

        \App\Generated\PokeApi\Model\EggGroupName::class => EggGroupNameNormalizer::class,

        \App\Generated\PokeApi\Model\EggGroupSummary::class => EggGroupSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\EncounterConditionDetail::class => EncounterConditionDetailNormalizer::class,

        \App\Generated\PokeApi\Model\EncounterConditionName::class => EncounterConditionNameNormalizer::class,

        \App\Generated\PokeApi\Model\EncounterConditionSummary::class => EncounterConditionSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\EncounterConditionValueDetail::class => EncounterConditionValueDetailNormalizer::class,

        \App\Generated\PokeApi\Model\EncounterConditionValueName::class => EncounterConditionValueNameNormalizer::class,

        \App\Generated\PokeApi\Model\EncounterConditionValueSummary::class => EncounterConditionValueSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\EncounterMethodDetail::class => EncounterMethodDetailNormalizer::class,

        \App\Generated\PokeApi\Model\EncounterMethodName::class => EncounterMethodNameNormalizer::class,

        \App\Generated\PokeApi\Model\EncounterMethodSummary::class => EncounterMethodSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetail::class => EvolutionChainDetailNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChain::class => EvolutionChainDetailChainNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItem::class => EvolutionChainDetailChainEvolvesToItemNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem::class => EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGender::class => EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGenderNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItem::class => EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItemNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItem::class => EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItemNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocation::class => EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocationNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTrigger::class => EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTriggerNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionId::class => EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionIdNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormId::class => EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormIdNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChainEvolvesToItemSpecies::class => EvolutionChainDetailChainEvolvesToItemSpeciesNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainDetailChainSpecies::class => EvolutionChainDetailChainSpeciesNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionChainSummary::class => EvolutionChainSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionTriggerDetail::class => EvolutionTriggerDetailNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionTriggerDetailPokemonSpeciesItem::class => EvolutionTriggerDetailPokemonSpeciesItemNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionTriggerName::class => EvolutionTriggerNameNormalizer::class,

        \App\Generated\PokeApi\Model\EvolutionTriggerSummary::class => EvolutionTriggerSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\Experience::class => ExperienceNormalizer::class,

        \App\Generated\PokeApi\Model\GenderDetail::class => GenderDetailNormalizer::class,

        \App\Generated\PokeApi\Model\GenderDetailPokemonSpeciesDetailsItem::class => GenderDetailPokemonSpeciesDetailsItemNormalizer::class,

        \App\Generated\PokeApi\Model\GenderDetailPokemonSpeciesDetailsItemPokemonSpecies::class => GenderDetailPokemonSpeciesDetailsItemPokemonSpeciesNormalizer::class,

        \App\Generated\PokeApi\Model\GenderDetailRequiredForEvolutionItem::class => GenderDetailRequiredForEvolutionItemNormalizer::class,

        \App\Generated\PokeApi\Model\GenderSummary::class => GenderSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\GenerationDetail::class => GenerationDetailNormalizer::class,

        \App\Generated\PokeApi\Model\GenerationName::class => GenerationNameNormalizer::class,

        \App\Generated\PokeApi\Model\GenerationSummary::class => GenerationSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\GrowthRateDescription::class => GrowthRateDescriptionNormalizer::class,

        \App\Generated\PokeApi\Model\GrowthRateDetail::class => GrowthRateDetailNormalizer::class,

        \App\Generated\PokeApi\Model\GrowthRateSummary::class => GrowthRateSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\ItemAttributeDescription::class => ItemAttributeDescriptionNormalizer::class,

        \App\Generated\PokeApi\Model\ItemAttributeDetail::class => ItemAttributeDetailNormalizer::class,

        \App\Generated\PokeApi\Model\ItemAttributeDetailItemsItem::class => ItemAttributeDetailItemsItemNormalizer::class,

        \App\Generated\PokeApi\Model\ItemAttributeName::class => ItemAttributeNameNormalizer::class,

        \App\Generated\PokeApi\Model\ItemAttributeSummary::class => ItemAttributeSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\ItemCategoryDetail::class => ItemCategoryDetailNormalizer::class,

        \App\Generated\PokeApi\Model\ItemCategoryName::class => ItemCategoryNameNormalizer::class,

        \App\Generated\PokeApi\Model\ItemCategorySummary::class => ItemCategorySummaryNormalizer::class,

        \App\Generated\PokeApi\Model\ItemDetail::class => ItemDetailNormalizer::class,

        \App\Generated\PokeApi\Model\ItemDetailAttributesItem::class => ItemDetailAttributesItemNormalizer::class,

        \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItem::class => ItemDetailHeldByPokemonItemNormalizer::class,

        \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItemPokemon::class => ItemDetailHeldByPokemonItemPokemonNormalizer::class,

        \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItemVersionDetailsItem::class => ItemDetailHeldByPokemonItemVersionDetailsItemNormalizer::class,

        \App\Generated\PokeApi\Model\ItemDetailHeldByPokemonItemVersionDetailsItemVersion::class => ItemDetailHeldByPokemonItemVersionDetailsItemVersionNormalizer::class,

        \App\Generated\PokeApi\Model\ItemDetailSprites::class => ItemDetailSpritesNormalizer::class,

        \App\Generated\PokeApi\Model\ItemDetailBabyTriggerFor::class => ItemDetailBabyTriggerForNormalizer::class,

        \App\Generated\PokeApi\Model\ItemDetailMachinesItem::class => ItemDetailMachinesItemNormalizer::class,

        \App\Generated\PokeApi\Model\ItemDetailMachinesItemVersionGroup::class => ItemDetailMachinesItemVersionGroupNormalizer::class,

        \App\Generated\PokeApi\Model\ItemEffectText::class => ItemEffectTextNormalizer::class,

        \App\Generated\PokeApi\Model\ItemFlavorText::class => ItemFlavorTextNormalizer::class,

        \App\Generated\PokeApi\Model\ItemFlingEffectDetail::class => ItemFlingEffectDetailNormalizer::class,

        \App\Generated\PokeApi\Model\ItemFlingEffectEffectText::class => ItemFlingEffectEffectTextNormalizer::class,

        \App\Generated\PokeApi\Model\ItemFlingEffectSummary::class => ItemFlingEffectSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\ItemGameIndex::class => ItemGameIndexNormalizer::class,

        \App\Generated\PokeApi\Model\ItemName::class => ItemNameNormalizer::class,

        \App\Generated\PokeApi\Model\ItemPocketDetail::class => ItemPocketDetailNormalizer::class,

        \App\Generated\PokeApi\Model\ItemPocketName::class => ItemPocketNameNormalizer::class,

        \App\Generated\PokeApi\Model\ItemPocketSummary::class => ItemPocketSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\ItemSummary::class => ItemSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\LanguageDetail::class => LanguageDetailNormalizer::class,

        \App\Generated\PokeApi\Model\LanguageName::class => LanguageNameNormalizer::class,

        \App\Generated\PokeApi\Model\LanguageSummary::class => LanguageSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetail::class => LocationAreaDetailNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItem::class => LocationAreaDetailEncounterMethodRatesItemNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItemEncounterMethod::class => LocationAreaDetailEncounterMethodRatesItemEncounterMethodNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItemVersionDetailsItem::class => LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemVersion::class => LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemVersionNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItem::class => LocationAreaDetailPokemonEncountersItemNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemPokemon::class => LocationAreaDetailPokemonEncountersItemPokemonNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItem::class => LocationAreaDetailPokemonEncountersItemVersionDetailsItemNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersion::class => LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersionNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails::class => LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValues::class => LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValuesNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethod::class => LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethodNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaName::class => LocationAreaNameNormalizer::class,

        \App\Generated\PokeApi\Model\LocationAreaSummary::class => LocationAreaSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\LocationDetail::class => LocationDetailNormalizer::class,

        \App\Generated\PokeApi\Model\LocationGameIndex::class => LocationGameIndexNormalizer::class,

        \App\Generated\PokeApi\Model\LocationName::class => LocationNameNormalizer::class,

        \App\Generated\PokeApi\Model\LocationSummary::class => LocationSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\MachineDetail::class => MachineDetailNormalizer::class,

        \App\Generated\PokeApi\Model\MachineSummary::class => MachineSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\MoveBattleStyleDetail::class => MoveBattleStyleDetailNormalizer::class,

        \App\Generated\PokeApi\Model\MoveBattleStyleName::class => MoveBattleStyleNameNormalizer::class,

        \App\Generated\PokeApi\Model\MoveBattleStyleSummary::class => MoveBattleStyleSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\MoveChange::class => MoveChangeNormalizer::class,

        \App\Generated\PokeApi\Model\MoveChangeEffectEntriesItem::class => MoveChangeEffectEntriesItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveChangeEffectEntriesItemLanguage::class => MoveChangeEffectEntriesItemLanguageNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDamageClassDescription::class => MoveDamageClassDescriptionNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDamageClassDetail::class => MoveDamageClassDetailNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDamageClassName::class => MoveDamageClassNameNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDamageClassSummary::class => MoveDamageClassSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetail::class => MoveDetailNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailContestCombos::class => MoveDetailContestCombosNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailContestCombosNormal::class => MoveDetailContestCombosNormalNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailContestCombosNormalUseBeforeItem::class => MoveDetailContestCombosNormalUseBeforeItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailContestCombosNormalUseAfterItem::class => MoveDetailContestCombosNormalUseAfterItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailContestCombosSuper::class => MoveDetailContestCombosSuperNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailContestCombosSuperUseBeforeItem::class => MoveDetailContestCombosSuperUseBeforeItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailContestCombosSuperUseAfterItem::class => MoveDetailContestCombosSuperUseAfterItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailEffectEntriesItem::class => MoveDetailEffectEntriesItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailEffectEntriesItemLanguage::class => MoveDetailEffectEntriesItemLanguageNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailEffectChangesItem::class => MoveDetailEffectChangesItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailEffectChangesItemEffectEntriesItem::class => MoveDetailEffectChangesItemEffectEntriesItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailEffectChangesItemEffectEntriesItemLanguage::class => MoveDetailEffectChangesItemEffectEntriesItemLanguageNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailEffectChangesItemVersionGroup::class => MoveDetailEffectChangesItemVersionGroupNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailMeta::class => MoveDetailMetaNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailStatChangesItem::class => MoveDetailStatChangesItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailStatChangesItemStat::class => MoveDetailStatChangesItemStatNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailMachinesItem::class => MoveDetailMachinesItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailMachinesItemMachine::class => MoveDetailMachinesItemMachineNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailMachinesItemVersionGroup::class => MoveDetailMachinesItemVersionGroupNormalizer::class,

        \App\Generated\PokeApi\Model\MoveDetailLearnedByPokemonItem::class => MoveDetailLearnedByPokemonItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveFlavorText::class => MoveFlavorTextNormalizer::class,

        \App\Generated\PokeApi\Model\MoveLearnMethodDescription::class => MoveLearnMethodDescriptionNormalizer::class,

        \App\Generated\PokeApi\Model\MoveLearnMethodDetail::class => MoveLearnMethodDetailNormalizer::class,

        \App\Generated\PokeApi\Model\MoveLearnMethodDetailVersionGroupsItem::class => MoveLearnMethodDetailVersionGroupsItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveLearnMethodName::class => MoveLearnMethodNameNormalizer::class,

        \App\Generated\PokeApi\Model\MoveLearnMethodSummary::class => MoveLearnMethodSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\MoveMeta::class => MoveMetaNormalizer::class,

        \App\Generated\PokeApi\Model\MoveMetaAilmentDetail::class => MoveMetaAilmentDetailNormalizer::class,

        \App\Generated\PokeApi\Model\MoveMetaAilmentDetailMovesItem::class => MoveMetaAilmentDetailMovesItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveMetaAilmentName::class => MoveMetaAilmentNameNormalizer::class,

        \App\Generated\PokeApi\Model\MoveMetaAilmentSummary::class => MoveMetaAilmentSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\MoveMetaCategoryDescription::class => MoveMetaCategoryDescriptionNormalizer::class,

        \App\Generated\PokeApi\Model\MoveMetaCategoryDetail::class => MoveMetaCategoryDetailNormalizer::class,

        \App\Generated\PokeApi\Model\MoveMetaCategoryDetailMovesItem::class => MoveMetaCategoryDetailMovesItemNormalizer::class,

        \App\Generated\PokeApi\Model\MoveMetaCategorySummary::class => MoveMetaCategorySummaryNormalizer::class,

        \App\Generated\PokeApi\Model\MoveName::class => MoveNameNormalizer::class,

        \App\Generated\PokeApi\Model\MoveSummary::class => MoveSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\MoveTargetDescription::class => MoveTargetDescriptionNormalizer::class,

        \App\Generated\PokeApi\Model\MoveTargetDetail::class => MoveTargetDetailNormalizer::class,

        \App\Generated\PokeApi\Model\MoveTargetName::class => MoveTargetNameNormalizer::class,

        \App\Generated\PokeApi\Model\MoveTargetSummary::class => MoveTargetSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\NatureBattleStylePreference::class => NatureBattleStylePreferenceNormalizer::class,

        \App\Generated\PokeApi\Model\NatureDetail::class => NatureDetailNormalizer::class,

        \App\Generated\PokeApi\Model\NatureDetailPokeathlonStatChangesItem::class => NatureDetailPokeathlonStatChangesItemNormalizer::class,

        \App\Generated\PokeApi\Model\NatureDetailPokeathlonStatChangesItemPokeathlonStat::class => NatureDetailPokeathlonStatChangesItemPokeathlonStatNormalizer::class,

        \App\Generated\PokeApi\Model\NatureName::class => NatureNameNormalizer::class,

        \App\Generated\PokeApi\Model\NatureSummary::class => NatureSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedAbilitySummaryList::class => PaginatedAbilitySummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedBerryFirmnessSummaryList::class => PaginatedBerryFirmnessSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedBerryFlavorSummaryList::class => PaginatedBerryFlavorSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedBerrySummaryList::class => PaginatedBerrySummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedCharacteristicSummaryList::class => PaginatedCharacteristicSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedContestEffectSummaryList::class => PaginatedContestEffectSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedContestTypeSummaryList::class => PaginatedContestTypeSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedEggGroupSummaryList::class => PaginatedEggGroupSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedEncounterConditionSummaryList::class => PaginatedEncounterConditionSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedEncounterConditionValueSummaryList::class => PaginatedEncounterConditionValueSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedEncounterMethodSummaryList::class => PaginatedEncounterMethodSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedEvolutionChainSummaryList::class => PaginatedEvolutionChainSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedEvolutionTriggerSummaryList::class => PaginatedEvolutionTriggerSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedGenderSummaryList::class => PaginatedGenderSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedGenerationSummaryList::class => PaginatedGenerationSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedGrowthRateSummaryList::class => PaginatedGrowthRateSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedItemAttributeSummaryList::class => PaginatedItemAttributeSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedItemCategorySummaryList::class => PaginatedItemCategorySummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedItemFlingEffectSummaryList::class => PaginatedItemFlingEffectSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedItemPocketSummaryList::class => PaginatedItemPocketSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedItemSummaryList::class => PaginatedItemSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedLanguageSummaryList::class => PaginatedLanguageSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedLocationAreaSummaryList::class => PaginatedLocationAreaSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedLocationSummaryList::class => PaginatedLocationSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedMachineSummaryList::class => PaginatedMachineSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedMoveBattleStyleSummaryList::class => PaginatedMoveBattleStyleSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedMoveDamageClassSummaryList::class => PaginatedMoveDamageClassSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedMoveLearnMethodSummaryList::class => PaginatedMoveLearnMethodSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedMoveMetaAilmentSummaryList::class => PaginatedMoveMetaAilmentSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedMoveMetaCategorySummaryList::class => PaginatedMoveMetaCategorySummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedMoveSummaryList::class => PaginatedMoveSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedMoveTargetSummaryList::class => PaginatedMoveTargetSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedNatureSummaryList::class => PaginatedNatureSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedPalParkAreaSummaryList::class => PaginatedPalParkAreaSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedPokeathlonStatSummaryList::class => PaginatedPokeathlonStatSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedPokedexSummaryList::class => PaginatedPokedexSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedPokemonColorSummaryList::class => PaginatedPokemonColorSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedPokemonFormSummaryList::class => PaginatedPokemonFormSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedPokemonHabitatSummaryList::class => PaginatedPokemonHabitatSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedPokemonShapeSummaryList::class => PaginatedPokemonShapeSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedPokemonSpeciesSummaryList::class => PaginatedPokemonSpeciesSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedPokemonSummaryList::class => PaginatedPokemonSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedRegionSummaryList::class => PaginatedRegionSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedStatSummaryList::class => PaginatedStatSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedSuperContestEffectSummaryList::class => PaginatedSuperContestEffectSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedTypeSummaryList::class => PaginatedTypeSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedVersionGroupSummaryList::class => PaginatedVersionGroupSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PaginatedVersionSummaryList::class => PaginatedVersionSummaryListNormalizer::class,

        \App\Generated\PokeApi\Model\PalParkAreaDetail::class => PalParkAreaDetailNormalizer::class,

        \App\Generated\PokeApi\Model\PalParkAreaDetailPokemonEncountersItem::class => PalParkAreaDetailPokemonEncountersItemNormalizer::class,

        \App\Generated\PokeApi\Model\PalParkAreaDetailPokemonEncountersItemPokemonSpecies::class => PalParkAreaDetailPokemonEncountersItemPokemonSpeciesNormalizer::class,

        \App\Generated\PokeApi\Model\PalParkAreaName::class => PalParkAreaNameNormalizer::class,

        \App\Generated\PokeApi\Model\PalParkAreaSummary::class => PalParkAreaSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\PokeathlonStatDetail::class => PokeathlonStatDetailNormalizer::class,

        \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNatures::class => PokeathlonStatDetailAffectingNaturesNormalizer::class,

        \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesDecreaseItem::class => PokeathlonStatDetailAffectingNaturesDecreaseItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesDecreaseItemNature::class => PokeathlonStatDetailAffectingNaturesDecreaseItemNatureNormalizer::class,

        \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesIncreaseItem::class => PokeathlonStatDetailAffectingNaturesIncreaseItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokeathlonStatDetailAffectingNaturesIncreaseItemNature::class => PokeathlonStatDetailAffectingNaturesIncreaseItemNatureNormalizer::class,

        \App\Generated\PokeApi\Model\PokeathlonStatName::class => PokeathlonStatNameNormalizer::class,

        \App\Generated\PokeApi\Model\PokeathlonStatSummary::class => PokeathlonStatSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\PokedexDescription::class => PokedexDescriptionNormalizer::class,

        \App\Generated\PokeApi\Model\PokedexDetail::class => PokedexDetailNormalizer::class,

        \App\Generated\PokeApi\Model\PokedexDetailPokemonEntriesItem::class => PokedexDetailPokemonEntriesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokedexDetailPokemonEntriesItemPokemonSpecies::class => PokedexDetailPokemonEntriesItemPokemonSpeciesNormalizer::class,

        \App\Generated\PokeApi\Model\PokedexDetailVersionGroupsItem::class => PokedexDetailVersionGroupsItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokedexName::class => PokedexNameNormalizer::class,

        \App\Generated\PokeApi\Model\PokedexSummary::class => PokedexSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonColorDetail::class => PokemonColorDetailNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonColorName::class => PokemonColorNameNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonColorSummary::class => PokemonColorSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetail::class => PokemonDetailNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailAbilitiesItem::class => PokemonDetailAbilitiesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailAbilitiesItemAbility::class => PokemonDetailAbilitiesItemAbilityNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItem::class => PokemonDetailPastAbilitiesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItemAbilitiesItem::class => PokemonDetailPastAbilitiesItemAbilitiesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItemAbilitiesItemAbility::class => PokemonDetailPastAbilitiesItemAbilitiesItemAbilityNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailPastAbilitiesItemGeneration::class => PokemonDetailPastAbilitiesItemGenerationNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItem::class => PokemonDetailHeldItemsItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItemItem::class => PokemonDetailHeldItemsItemItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItemVersionDetailsItem::class => PokemonDetailHeldItemsItemVersionDetailsItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailHeldItemsItemVersionDetailsItemVersion::class => PokemonDetailHeldItemsItemVersionDetailsItemVersionNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailMovesItem::class => PokemonDetailMovesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailMovesItemMove::class => PokemonDetailMovesItemMoveNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailMovesItemVersionGroupDetailsItem::class => PokemonDetailMovesItemVersionGroupDetailsItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethod::class => PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethodNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailMovesItemVersionGroupDetailsItemVersionGroup::class => PokemonDetailMovesItemVersionGroupDetailsItemVersionGroupNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailSprites::class => PokemonDetailSpritesNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailCries::class => PokemonDetailCriesNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailTypesItem::class => PokemonDetailTypesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailTypesItemType::class => PokemonDetailTypesItemTypeNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailPastTypesItem::class => PokemonDetailPastTypesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailPastTypesItemGeneration::class => PokemonDetailPastTypesItemGenerationNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailPastTypesItemTypesItem::class => PokemonDetailPastTypesItemTypesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDetailPastTypesItemTypesItemType::class => PokemonDetailPastTypesItemTypesItemTypeNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonDexEntry::class => PokemonDexEntryNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonFormDetail::class => PokemonFormDetailNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonFormDetailSprites::class => PokemonFormDetailSpritesNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonFormDetailFormNamesItem::class => PokemonFormDetailFormNamesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonFormDetailFormNamesItemLanguage::class => PokemonFormDetailFormNamesItemLanguageNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonFormDetailNamesItem::class => PokemonFormDetailNamesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonFormDetailNamesItemLanguage::class => PokemonFormDetailNamesItemLanguageNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonFormDetailTypesItem::class => PokemonFormDetailTypesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonFormDetailTypesItemType::class => PokemonFormDetailTypesItemTypeNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonFormSummary::class => PokemonFormSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonGameIndex::class => PokemonGameIndexNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonHabitatDetail::class => PokemonHabitatDetailNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonHabitatName::class => PokemonHabitatNameNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonHabitatSummary::class => PokemonHabitatSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonShapeDetail::class => PokemonShapeDetailNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonShapeDetailAwesomeNamesItem::class => PokemonShapeDetailAwesomeNamesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonShapeDetailAwesomeNamesItemLanguage::class => PokemonShapeDetailAwesomeNamesItemLanguageNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonShapeDetailNamesItem::class => PokemonShapeDetailNamesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonShapeSummary::class => PokemonShapeSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesDescription::class => PokemonSpeciesDescriptionNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesDetail::class => PokemonSpeciesDetailNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesDetailEggGroupsItem::class => PokemonSpeciesDetailEggGroupsItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesDetailNamesItem::class => PokemonSpeciesDetailNamesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesDetailNamesItemLanguage::class => PokemonSpeciesDetailNamesItemLanguageNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesDetailPalParkEncountersItem::class => PokemonSpeciesDetailPalParkEncountersItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesDetailPalParkEncountersItemArea::class => PokemonSpeciesDetailPalParkEncountersItemAreaNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesDetailGeneraItem::class => PokemonSpeciesDetailGeneraItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesDetailGeneraItemLanguage::class => PokemonSpeciesDetailGeneraItemLanguageNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesDetailVarietiesItem::class => PokemonSpeciesDetailVarietiesItemNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesDetailVarietiesItemPokemon::class => PokemonSpeciesDetailVarietiesItemPokemonNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesFlavorText::class => PokemonSpeciesFlavorTextNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSpeciesSummary::class => PokemonSpeciesSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonStat::class => PokemonStatNormalizer::class,

        \App\Generated\PokeApi\Model\PokemonSummary::class => PokemonSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\RegionDetail::class => RegionDetailNormalizer::class,

        \App\Generated\PokeApi\Model\RegionDetailMainGeneration::class => RegionDetailMainGenerationNormalizer::class,

        \App\Generated\PokeApi\Model\RegionDetailVersionGroupsItem::class => RegionDetailVersionGroupsItemNormalizer::class,

        \App\Generated\PokeApi\Model\RegionName::class => RegionNameNormalizer::class,

        \App\Generated\PokeApi\Model\RegionSummary::class => RegionSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\StatDetail::class => StatDetailNormalizer::class,

        \App\Generated\PokeApi\Model\StatDetailAffectingMoves::class => StatDetailAffectingMovesNormalizer::class,

        \App\Generated\PokeApi\Model\StatDetailAffectingMovesIncreaseItem::class => StatDetailAffectingMovesIncreaseItemNormalizer::class,

        \App\Generated\PokeApi\Model\StatDetailAffectingMovesIncreaseItemMove::class => StatDetailAffectingMovesIncreaseItemMoveNormalizer::class,

        \App\Generated\PokeApi\Model\StatDetailAffectingMovesDecreaseItem::class => StatDetailAffectingMovesDecreaseItemNormalizer::class,

        \App\Generated\PokeApi\Model\StatDetailAffectingMovesDecreaseItemMove::class => StatDetailAffectingMovesDecreaseItemMoveNormalizer::class,

        \App\Generated\PokeApi\Model\StatDetailAffectingNatures::class => StatDetailAffectingNaturesNormalizer::class,

        \App\Generated\PokeApi\Model\StatDetailAffectingNaturesIncreaseItem::class => StatDetailAffectingNaturesIncreaseItemNormalizer::class,

        \App\Generated\PokeApi\Model\StatDetailAffectingNaturesDecreaseItem::class => StatDetailAffectingNaturesDecreaseItemNormalizer::class,

        \App\Generated\PokeApi\Model\StatName::class => StatNameNormalizer::class,

        \App\Generated\PokeApi\Model\StatSummary::class => StatSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\SuperContestEffectDetail::class => SuperContestEffectDetailNormalizer::class,

        \App\Generated\PokeApi\Model\SuperContestEffectFlavorText::class => SuperContestEffectFlavorTextNormalizer::class,

        \App\Generated\PokeApi\Model\SuperContestEffectSummary::class => SuperContestEffectSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetail::class => TypeDetailNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailDamageRelations::class => TypeDetailDamageRelationsNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsNoDamageToItem::class => TypeDetailDamageRelationsNoDamageToItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsHalfDamageToItem::class => TypeDetailDamageRelationsHalfDamageToItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsDoubleDamageToItem::class => TypeDetailDamageRelationsDoubleDamageToItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsNoDamageFromItem::class => TypeDetailDamageRelationsNoDamageFromItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsHalfDamageFromItem::class => TypeDetailDamageRelationsHalfDamageFromItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailDamageRelationsDoubleDamageFromItem::class => TypeDetailDamageRelationsDoubleDamageFromItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItem::class => TypeDetailPastDamageRelationsItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemGeneration::class => TypeDetailPastDamageRelationsItemGenerationNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelations::class => TypeDetailPastDamageRelationsItemDamageRelationsNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsNoDamageToItem::class => TypeDetailPastDamageRelationsItemDamageRelationsNoDamageToItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageToItem::class => TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageToItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageToItem::class => TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageToItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsNoDamageFromItem::class => TypeDetailPastDamageRelationsItemDamageRelationsNoDamageFromItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageFromItem::class => TypeDetailPastDamageRelationsItemDamageRelationsHalfDamageFromItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageFromItem::class => TypeDetailPastDamageRelationsItemDamageRelationsDoubleDamageFromItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailPokemonItem::class => TypeDetailPokemonItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailPokemonItemPokemon::class => TypeDetailPokemonItemPokemonNormalizer::class,

        \App\Generated\PokeApi\Model\TypeDetailSpritesItemItem::class => TypeDetailSpritesItemItemNormalizer::class,

        \App\Generated\PokeApi\Model\TypeGameIndex::class => TypeGameIndexNormalizer::class,

        \App\Generated\PokeApi\Model\TypeSummary::class => TypeSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\VersionDetail::class => VersionDetailNormalizer::class,

        \App\Generated\PokeApi\Model\VersionGroupDetail::class => VersionGroupDetailNormalizer::class,

        \App\Generated\PokeApi\Model\VersionGroupDetailMoveLearnMethodsItem::class => VersionGroupDetailMoveLearnMethodsItemNormalizer::class,

        \App\Generated\PokeApi\Model\VersionGroupDetailPokedexesItem::class => VersionGroupDetailPokedexesItemNormalizer::class,

        \App\Generated\PokeApi\Model\VersionGroupDetailRegionsItem::class => VersionGroupDetailRegionsItemNormalizer::class,

        \App\Generated\PokeApi\Model\VersionGroupSummary::class => VersionGroupSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\VersionName::class => VersionNameNormalizer::class,

        \App\Generated\PokeApi\Model\VersionSummary::class => VersionSummaryNormalizer::class,

        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200Item::class => ApiV2PokemonPokemonIdEncountersGetResponse200ItemNormalizer::class,

        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemLocationArea::class => ApiV2PokemonPokemonIdEncountersGetResponse200ItemLocationAreaNormalizer::class,

        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem::class => ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemNormalizer::class,

        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem::class => ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemNormalizer::class,

        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemConditionValuesItem::class => ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemConditionValuesItemNormalizer::class,

        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethod::class => ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethodNormalizer::class,

        \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemVersion::class => ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemVersionNormalizer::class,

        \Jane\Component\JsonSchemaRuntime\Reference::class => \App\Generated\PokeApi\Runtime\Normalizer\ReferenceNormalizer::class,
    ];
    protected $normalizersCache = [];

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
