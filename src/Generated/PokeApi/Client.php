<?php

namespace App\Generated\PokeApi;

class Client extends Runtime\Client\Client
{
    /**
     * Abilities provide passive effects for Pokémon in battle or in the overworld. Pokémon have multiple possible abilities but can have only one ability at a time. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Ability) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedAbilitySummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listAbility(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListAbility($queryParameters), $fetch);
    }

    /**
     * Abilities provide passive effects for Pokémon in battle or in the overworld. Pokémon have multiple possible abilities but can have only one ability at a time. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Ability) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\AbilityDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getAbility(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetAbility($id), $fetch);
    }

    /**
     * Berries are small fruits that can provide HP and status condition restoration, stat enhancement, and even damage negation when eaten by Pokémon. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Berry) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedBerrySummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listBerry(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListBerry($queryParameters), $fetch);
    }

    /**
     * Berries are small fruits that can provide HP and status condition restoration, stat enhancement, and even damage negation when eaten by Pokémon. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Berry) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\BerryDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getBerry(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetBerry($id), $fetch);
    }

    /**
     * Berries can be soft or hard. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Category:Berries_by_firmness) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedBerryFirmnessSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listBerryFirmness(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListBerryFirmness($queryParameters), $fetch);
    }

    /**
     * Berries can be soft or hard. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Category:Berries_by_firmness) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\BerryFirmnessDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getBerryFirmness(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetBerryFirmness($id), $fetch);
    }

    /**
     * Flavors determine whether a Pokémon will benefit or suffer from eating a berry based on their **nature**. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Flavor) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedBerryFlavorSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listBerryFlavor(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListBerryFlavor($queryParameters), $fetch);
    }

    /**
     * Flavors determine whether a Pokémon will benefit or suffer from eating a berry based on their **nature**. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Flavor) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\BerryFlavorDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getBerryFlavor(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetBerryFlavor($id), $fetch);
    }

    /**
     * Characteristics indicate which stat contains a Pokémon's highest IV. A Pokémon's Characteristic is determined by the remainder of its highest IV divided by 5 (gene_modulo). Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Characteristic) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedCharacteristicSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listCharacteristic(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListCharacteristic($queryParameters), $fetch);
    }

    /**
     * Characteristics indicate which stat contains a Pokémon's highest IV. A Pokémon's Characteristic is determined by the remainder of its highest IV divided by 5 (gene_modulo). Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Characteristic) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\CharacteristicDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getCharacteristic(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetCharacteristic($id), $fetch);
    }

    /**
     * Contest types are categories judges used to weigh a Pokémon's condition in Pokémon contests. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Contest_condition) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedContestTypeSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listContestType(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListContestType($queryParameters), $fetch);
    }

    /**
     * Contest types are categories judges used to weigh a Pokémon's condition in Pokémon contests. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Contest_condition) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ContestTypeDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getContestType(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetContestType($id), $fetch);
    }

    /**
     * Contest effects refer to the effects of moves when used in contests.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedContestEffectSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listContestEffect(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListContestEffect($queryParameters), $fetch);
    }

    /**
     * Contest effects refer to the effects of moves when used in contests.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ContestEffectDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getContestEffect(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetContestEffect($id), $fetch);
    }

    /**
     * Egg Groups are categories which determine which Pokémon are able to interbreed. Pokémon may belong to either one or two Egg Groups. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Egg_Group) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedEggGroupSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listEggGroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListEggGroup($queryParameters), $fetch);
    }

    /**
     * Egg Groups are categories which determine which Pokémon are able to interbreed. Pokémon may belong to either one or two Egg Groups. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Egg_Group) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\EggGroupDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getEggGroup(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetEggGroup($id), $fetch);
    }

    /**
     * Methods by which the player might can encounter Pokémon in the wild, e.g., walking in tall grass. Check out Bulbapedia for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedEncounterMethodSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listEncounterMethod(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListEncounterMethod($queryParameters), $fetch);
    }

    /**
     * Methods by which the player might can encounter Pokémon in the wild, e.g., walking in tall grass. Check out Bulbapedia for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\EncounterMethodDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getEncounterMethod(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetEncounterMethod($id), $fetch);
    }

    /**
     * Conditions which affect what pokemon might appear in the wild, e.g., day or night.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedEncounterConditionSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listEncounterCondition(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListEncounterCondition($queryParameters), $fetch);
    }

    /**
     * Conditions which affect what pokemon might appear in the wild, e.g., day or night.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\EncounterConditionDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getEncounterCondition(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetEncounterCondition($id), $fetch);
    }

    /**
     * Encounter condition values are the various states that an encounter condition can have, i.e., time of day can be either day or night.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedEncounterConditionValueSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listEncounterConditionValue(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListEncounterConditionValue($queryParameters), $fetch);
    }

    /**
     * Encounter condition values are the various states that an encounter condition can have, i.e., time of day can be either day or night.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\EncounterConditionValueDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getEncounterConditionValue(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetEncounterConditionValue($id), $fetch);
    }

    /**
     * Evolution chains are essentially family trees. They start with the lowest stage within a family and detail evolution conditions for each as well as Pokémon they can evolve into up through the hierarchy.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedEvolutionChainSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listEvolutionChain(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListEvolutionChain($queryParameters), $fetch);
    }

    /**
     * Evolution chains are essentially family trees. They start with the lowest stage within a family and detail evolution conditions for each as well as Pokémon they can evolve into up through the hierarchy.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\EvolutionChainDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getEvolutionChain(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetEvolutionChain($id), $fetch);
    }

    /**
     * Evolution triggers are the events and conditions that cause a Pokémon to evolve. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Methods_of_evolution) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedEvolutionTriggerSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listEvolutionTrigger(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListEvolutionTrigger($queryParameters), $fetch);
    }

    /**
     * Evolution triggers are the events and conditions that cause a Pokémon to evolve. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Methods_of_evolution) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\EvolutionTriggerDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getEvolutionTrigger(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetEvolutionTrigger($id), $fetch);
    }

    /**
     * A generation is a grouping of the Pokémon games that separates them based on the Pokémon they include. In each generation, a new set of Pokémon, Moves, Abilities and Types that did not exist in the previous generation are released.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedGenerationSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listGeneration(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListGeneration($queryParameters), $fetch);
    }

    /**
     * A generation is a grouping of the Pokémon games that separates them based on the Pokémon they include. In each generation, a new set of Pokémon, Moves, Abilities and Types that did not exist in the previous generation are released.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GenerationDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getGeneration(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetGeneration($id), $fetch);
    }

    /**
     * Genders were introduced in Generation II for the purposes of breeding Pokémon but can also result in visual differences or even different evolutionary lines. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Gender) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedGenderSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listGender(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListGender($queryParameters), $fetch);
    }

    /**
     * Genders were introduced in Generation II for the purposes of breeding Pokémon but can also result in visual differences or even different evolutionary lines. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Gender) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GenderDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getGender(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetGender($id), $fetch);
    }

    /**
     * Growth rates are the speed with which Pokémon gain levels through experience. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Experience) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedGrowthRateSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listGrowthRate(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListGrowthRate($queryParameters), $fetch);
    }

    /**
     * Growth rates are the speed with which Pokémon gain levels through experience. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Experience) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\GrowthRateDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getGrowthRate(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetGrowthRate($id), $fetch);
    }

    /**
     * An item is an object in the games which the player can pick up, keep in their bag, and use in some manner. They have various uses, including healing, powering up, helping catch Pokémon, or to access a new area.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedItemSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listItem(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListItem($queryParameters), $fetch);
    }

    /**
     * An item is an object in the games which the player can pick up, keep in their bag, and use in some manner. They have various uses, including healing, powering up, helping catch Pokémon, or to access a new area.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ItemDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetItem($id), $fetch);
    }

    /**
     * Item categories determine where items will be placed in the players bag.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedItemCategorySummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listItemCategory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListItemCategory($queryParameters), $fetch);
    }

    /**
     * Item categories determine where items will be placed in the players bag.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ItemCategoryDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getItemCategory(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetItemCategory($id), $fetch);
    }

    /**
     * Item attributes define particular aspects of items, e.g."usable in battle" or "consumable".
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedItemAttributeSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listItemAttribute(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListItemAttribute($queryParameters), $fetch);
    }

    /**
     * Item attributes define particular aspects of items, e.g."usable in battle" or "consumable".
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ItemAttributeDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getItemAttribute(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetItemAttribute($id), $fetch);
    }

    /**
     * The various effects of the move"Fling" when used with different items.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedItemFlingEffectSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listItemFlingEffect(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListItemFlingEffect($queryParameters), $fetch);
    }

    /**
     * The various effects of the move"Fling" when used with different items.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ItemFlingEffectDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getItemFlingEffect(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetItemFlingEffect($id), $fetch);
    }

    /**
     * Pockets within the players bag used for storing items by category.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedItemPocketSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listItemPocket(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListItemPocket($queryParameters), $fetch);
    }

    /**
     * Pockets within the players bag used for storing items by category.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ItemPocketDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getItemPocket(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetItemPocket($id), $fetch);
    }

    /**
     * Languages for translations of API resource information.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedLanguageSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listLanguage(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListLanguage($queryParameters), $fetch);
    }

    /**
     * Languages for translations of API resource information.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\LanguageDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getLanguage(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetLanguage($id), $fetch);
    }

    /**
     * Locations that can be visited within the games. Locations make up sizable portions of regions, like cities or routes.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedLocationSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listLocation(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListLocation($queryParameters), $fetch);
    }

    /**
     * Locations that can be visited within the games. Locations make up sizable portions of regions, like cities or routes.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\LocationDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getLocation(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetLocation($id), $fetch);
    }

    /**
     * Location areas are sections of areas, such as floors in a building or cave. Each area has its own set of possible Pokémon encounters.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedLocationAreaSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listLocationArea(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListLocationArea($queryParameters), $fetch);
    }

    /**
     * Location areas are sections of areas, such as floors in a building or cave. Each area has its own set of possible Pokémon encounters.
     *
     * @param int    $id    a unique integer value identifying this location area
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\LocationAreaDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getLocationArea(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetLocationArea($id), $fetch);
    }

    /**
     * Machines are the representation of items that teach moves to Pokémon. They vary from version to version, so it is not certain that one specific TM or HM corresponds to a single Machine.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedMachineSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listMachine(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListMachine($queryParameters), $fetch);
    }

    /**
     * Machines are the representation of items that teach moves to Pokémon. They vary from version to version, so it is not certain that one specific TM or HM corresponds to a single Machine.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MachineDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getMachine(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetMachine($id), $fetch);
    }

    /**
     * Moves are the skills of Pokémon in battle. In battle, a Pokémon uses one move each turn. Some moves (including those learned by Hidden Machine) can be used outside of battle as well, usually for the purpose of removing obstacles or exploring new areas.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedMoveSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listMove(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListMove($queryParameters), $fetch);
    }

    /**
     * Moves are the skills of Pokémon in battle. In battle, a Pokémon uses one move each turn. Some moves (including those learned by Hidden Machine) can be used outside of battle as well, usually for the purpose of removing obstacles or exploring new areas.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MoveDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getMove(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetMove($id), $fetch);
    }

    /**
     * Move Ailments are status conditions caused by moves used during battle. See [Bulbapedia](https://bulbapedia.bulbagarden.net/wiki/Status_condition) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedMoveMetaAilmentSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listMoveAilment(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListMoveAilment($queryParameters), $fetch);
    }

    /**
     * Move Ailments are status conditions caused by moves used during battle. See [Bulbapedia](https://bulbapedia.bulbagarden.net/wiki/Status_condition) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MoveMetaAilmentDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getMoveAilment(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetMoveAilment($id), $fetch);
    }

    /**
     * Styles of moves when used in the Battle Palace. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Battle_Frontier_(Generation_III)) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedMoveBattleStyleSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listMoveBattleStyle(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListMoveBattleStyle($queryParameters), $fetch);
    }

    /**
     * Styles of moves when used in the Battle Palace. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Battle_Frontier_(Generation_III)) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MoveBattleStyleDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getMoveBattleStyle(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetMoveBattleStyle($id), $fetch);
    }

    /**
     * Very general categories that loosely group move effects.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedMoveMetaCategorySummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listMoveCategory(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListMoveCategory($queryParameters), $fetch);
    }

    /**
     * Very general categories that loosely group move effects.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MoveMetaCategoryDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getMoveCategory(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetMoveCategory($id), $fetch);
    }

    /**
     * Damage classes moves can have, e.g. physical, special, or non-damaging.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedMoveDamageClassSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listMoveDamageClass(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListMoveDamageClass($queryParameters), $fetch);
    }

    /**
     * Damage classes moves can have, e.g. physical, special, or non-damaging.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MoveDamageClassDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getMoveDamageClass(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetMoveDamageClass($id), $fetch);
    }

    /**
     * Methods by which Pokémon can learn moves.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedMoveLearnMethodSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listMoveLearnMethod(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListMoveLearnMethod($queryParameters), $fetch);
    }

    /**
     * Methods by which Pokémon can learn moves.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MoveLearnMethodDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getMoveLearnMethod(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetMoveLearnMethod($id), $fetch);
    }

    /**
     * Targets moves can be directed at during battle. Targets can be Pokémon, environments or even other moves.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedMoveTargetSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listMoveTarget(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListMoveTarget($queryParameters), $fetch);
    }

    /**
     * Targets moves can be directed at during battle. Targets can be Pokémon, environments or even other moves.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\MoveTargetDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getMoveTarget(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetMoveTarget($id), $fetch);
    }

    /**
     * Natures influence how a Pokémon's stats grow. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Nature) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedNatureSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listNature(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListNature($queryParameters), $fetch);
    }

    /**
     * Natures influence how a Pokémon's stats grow. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Nature) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\NatureDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getNature(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetNature($id), $fetch);
    }

    /**
     * Areas used for grouping Pokémon encounters in Pal Park. They're like habitats that are specific to Pal Park.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedPalParkAreaSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listPalParkArea(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListPalParkArea($queryParameters), $fetch);
    }

    /**
     * Areas used for grouping Pokémon encounters in Pal Park. They're like habitats that are specific to Pal Park.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PalParkAreaDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getPalParkArea(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPalParkArea($id), $fetch);
    }

    /**
     * A Pokédex is a handheld electronic encyclopedia device; one which is capable of recording and retaining information of the various Pokémon in a given region with the exception of the national dex and some smaller dexes related to portions of a region. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pokedex) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedPokedexSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listPokedex(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListPokedex($queryParameters), $fetch);
    }

    /**
     * A Pokédex is a handheld electronic encyclopedia device; one which is capable of recording and retaining information of the various Pokémon in a given region with the exception of the national dex and some smaller dexes related to portions of a region. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pokedex) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PokedexDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getPokedex(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPokedex($id), $fetch);
    }

    /**
     * Pokémon are the creatures that inhabit the world of the Pokémon games. They can be caught using Pokéballs and trained by battling with other Pokémon. Each Pokémon belongs to a specific species but may take on a variant which makes it differ from other Pokémon of the same species, such as base stats, available abilities and typings. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pok%C3%A9mon_(species)) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedPokemonSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listPokemon(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListPokemon($queryParameters), $fetch);
    }

    /**
     * Pokémon are the creatures that inhabit the world of the Pokémon games. They can be caught using Pokéballs and trained by battling with other Pokémon. Each Pokémon belongs to a specific species but may take on a variant which makes it differ from other Pokémon of the same species, such as base stats, available abilities and typings. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pok%C3%A9mon_(species)) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PokemonDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getPokemon(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPokemon($id), $fetch);
    }

    /**
     * Colors used for sorting Pokémon in a Pokédex. The color listed in the Pokédex is usually the color most apparent or covering each Pokémon's body. No orange category exists; Pokémon that are primarily orange are listed as red or brown.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedPokemonColorSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listPokemonColor(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListPokemonColor($queryParameters), $fetch);
    }

    /**
     * Colors used for sorting Pokémon in a Pokédex. The color listed in the Pokédex is usually the color most apparent or covering each Pokémon's body. No orange category exists; Pokémon that are primarily orange are listed as red or brown.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PokemonColorDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getPokemonColor(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPokemonColor($id), $fetch);
    }

    /**
     * Some Pokémon may appear in one of multiple, visually different forms. These differences are purely cosmetic. For variations within a Pokémon species, which do differ in more than just visuals, the 'Pokémon' entity is used to represent such a variety.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedPokemonFormSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listPokemonForm(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListPokemonForm($queryParameters), $fetch);
    }

    /**
     * Some Pokémon may appear in one of multiple, visually different forms. These differences are purely cosmetic. For variations within a Pokémon species, which do differ in more than just visuals, the 'Pokémon' entity is used to represent such a variety.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PokemonFormDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getPokemonForm(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPokemonForm($id), $fetch);
    }

    /**
     * Habitats are generally different terrain Pokémon can be found in but can also be areas designated for rare or legendary Pokémon.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedPokemonHabitatSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listPokemonHabitat(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListPokemonHabitat($queryParameters), $fetch);
    }

    /**
     * Habitats are generally different terrain Pokémon can be found in but can also be areas designated for rare or legendary Pokémon.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PokemonHabitatDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getPokemonHabitat(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPokemonHabitat($id), $fetch);
    }

    /**
     * Shapes used for sorting Pokémon in a Pokédex.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedPokemonShapeSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listPokemonShape(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListPokemonShape($queryParameters), $fetch);
    }

    /**
     * Shapes used for sorting Pokémon in a Pokédex.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PokemonShapeDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getPokemonShape(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPokemonShape($id), $fetch);
    }

    /**
     * A Pokémon Species forms the basis for at least one Pokémon. Attributes of a Pokémon species are shared across all varieties of Pokémon within the species. A good example is Wormadam; Wormadam is the species which can be found in three different varieties, Wormadam-Trash, Wormadam-Sandy and Wormadam-Plant.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedPokemonSpeciesSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listPokemonSpecies(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListPokemonSpecies($queryParameters), $fetch);
    }

    /**
     * A Pokémon Species forms the basis for at least one Pokémon. Attributes of a Pokémon species are shared across all varieties of Pokémon within the species. A good example is Wormadam; Wormadam is the species which can be found in three different varieties, Wormadam-Trash, Wormadam-Sandy and Wormadam-Plant.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PokemonSpeciesDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getPokemonSpecies(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPokemonSpecies($id), $fetch);
    }

    /**
     * Pokeathlon Stats are different attributes of a Pokémon's performance in Pokéathlons. In Pokéathlons, competitions happen on different courses; one for each of the different Pokéathlon stats. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pok%C3%A9athlon) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedPokeathlonStatSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listPokeathlonStat(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListPokeathlonStat($queryParameters), $fetch);
    }

    /**
     * Pokeathlon Stats are different attributes of a Pokémon's performance in Pokéathlons. In Pokéathlons, competitions happen on different courses; one for each of the different Pokéathlon stats. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pok%C3%A9athlon) for greater detail.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PokeathlonStatDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getPokeathlonStat(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPokeathlonStat($id), $fetch);
    }

    /**
     * A region is an organized area of the Pokémon world. Most often, the main difference between regions is the species of Pokémon that can be encountered within them.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedRegionSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listRegion(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListRegion($queryParameters), $fetch);
    }

    /**
     * A region is an organized area of the Pokémon world. Most often, the main difference between regions is the species of Pokémon that can be encountered within them.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\RegionDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getRegion(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetRegion($id), $fetch);
    }

    /**
     * Stats determine certain aspects of battles. Each Pokémon has a value for each stat which grows as they gain levels and can be altered momentarily by effects in battles.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedStatSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listStat(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListStat($queryParameters), $fetch);
    }

    /**
     * Stats determine certain aspects of battles. Each Pokémon has a value for each stat which grows as they gain levels and can be altered momentarily by effects in battles.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\StatDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getStat(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetStat($id), $fetch);
    }

    /**
     * Super contest effects refer to the effects of moves when used in super contests.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedSuperContestEffectSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listSuperContestEffect(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListSuperContestEffect($queryParameters), $fetch);
    }

    /**
     * Super contest effects refer to the effects of moves when used in super contests.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\SuperContestEffectDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSuperContestEffect(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSuperContestEffect($id), $fetch);
    }

    /**
     * Types are properties for Pokémon and their moves. Each type has three properties: which types of Pokémon it is super effective against, which types of Pokémon it is not very effective against, and which types of Pokémon it is completely ineffective against.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedTypeSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listType(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListType($queryParameters), $fetch);
    }

    /**
     * Types are properties for Pokémon and their moves. Each type has three properties: which types of Pokémon it is super effective against, which types of Pokémon it is not very effective against, and which types of Pokémon it is completely ineffective against.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\TypeDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getType(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetType($id), $fetch);
    }

    /**
     * Versions of the games, e.g., Red, Blue or Yellow.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedVersionSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listVersion(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListVersion($queryParameters), $fetch);
    }

    /**
     * Versions of the games, e.g., Red, Blue or Yellow.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\VersionDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getVersion(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetVersion($id), $fetch);
    }

    /**
     * Version groups categorize highly similar versions of the games.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\PaginatedVersionGroupSummaryList|null : \Psr\Http\Message\ResponseInterface)
     */
    public function listVersionGroup(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListVersionGroup($queryParameters), $fetch);
    }

    /**
     * Version groups categorize highly similar versions of the games.
     *
     * @param string $id    this parameter can be a string or an integer
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\VersionGroupDetail|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getVersionGroup(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetVersionGroup($id), $fetch);
    }

    /**
     * Handles Pokemon Encounters as a sub-resource.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\ApiV2PokemonPokemonIdEncountersGetResponse200Item[]|null : \Psr\Http\Message\ResponseInterface)
     */
    public function getPokemonEncounters(string $pokemonId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPokemonEncounters($pokemonId), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://pokeapi.co');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
