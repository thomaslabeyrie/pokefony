<?php

namespace App\Generated\PokeApi;

class Client extends \App\Generated\PokeApi\Runtime\Client\Client
{
    /**
    * Abilities provide passive effects for Pokémon in battle or in the overworld. Pokémon have multiple possible abilities but can have only one ability at a time. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Ability) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedAbilitySummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2AbilityList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2AbilityList($queryParameters), $fetch);
    }
    /**
     * Abilities provide passive effects for Pokémon in battle or in the overworld. Pokémon have multiple possible abilities but can have only one ability at a time. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Ability) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\AbilityDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2AbilityRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2AbilityRetrieve($id), $fetch);
    }
    /**
    * Berries are small fruits that can provide HP and status condition restoration, stat enhancement, and even damage negation when eaten by Pokémon. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Berry) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedBerrySummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2BerryList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2BerryList($queryParameters), $fetch);
    }
    /**
     * Berries are small fruits that can provide HP and status condition restoration, stat enhancement, and even damage negation when eaten by Pokémon. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Berry) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\BerryDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2BerryRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2BerryRetrieve($id), $fetch);
    }
    /**
    * Berries can be soft or hard. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Category:Berries_by_firmness) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedBerryFirmnessSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2BerryFirmnessList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2BerryFirmnessList($queryParameters), $fetch);
    }
    /**
     * Berries can be soft or hard. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Category:Berries_by_firmness) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\BerryFirmnessDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2BerryFirmnessRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2BerryFirmnessRetrieve($id), $fetch);
    }
    /**
    * Flavors determine whether a Pokémon will benefit or suffer from eating a berry based on their **nature**. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Flavor) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedBerryFlavorSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2BerryFlavorList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2BerryFlavorList($queryParameters), $fetch);
    }
    /**
     * Flavors determine whether a Pokémon will benefit or suffer from eating a berry based on their **nature**. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Flavor) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\BerryFlavorDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2BerryFlavorRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2BerryFlavorRetrieve($id), $fetch);
    }
    /**
    * Characteristics indicate which stat contains a Pokémon's highest IV. A Pokémon's Characteristic is determined by the remainder of its highest IV divided by 5 (gene_modulo). Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Characteristic) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedCharacteristicSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2CharacteristicList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2CharacteristicList($queryParameters), $fetch);
    }
    /**
     * Characteristics indicate which stat contains a Pokémon's highest IV. A Pokémon's Characteristic is determined by the remainder of its highest IV divided by 5 (gene_modulo). Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Characteristic) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\CharacteristicDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2CharacteristicRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2CharacteristicRetrieve($id), $fetch);
    }
    /**
    * Contest types are categories judges used to weigh a Pokémon's condition in Pokémon contests. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Contest_condition) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedContestTypeSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2ContestTypeList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ContestTypeList($queryParameters), $fetch);
    }
    /**
     * Contest types are categories judges used to weigh a Pokémon's condition in Pokémon contests. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Contest_condition) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\ContestTypeDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2ContestTypeRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ContestTypeRetrieve($id), $fetch);
    }
    /**
    * Contest effects refer to the effects of moves when used in contests.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedContestEffectSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2ContestEffectList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ContestEffectList($queryParameters), $fetch);
    }
    /**
     * Contest effects refer to the effects of moves when used in contests.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\ContestEffectDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2ContestEffectRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ContestEffectRetrieve($id), $fetch);
    }
    /**
    * Egg Groups are categories which determine which Pokémon are able to interbreed. Pokémon may belong to either one or two Egg Groups. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Egg_Group) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedEggGroupSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2EggGroupList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EggGroupList($queryParameters), $fetch);
    }
    /**
     * Egg Groups are categories which determine which Pokémon are able to interbreed. Pokémon may belong to either one or two Egg Groups. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Egg_Group) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\EggGroupDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2EggGroupRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EggGroupRetrieve($id), $fetch);
    }
    /**
    * Methods by which the player might can encounter Pokémon in the wild, e.g., walking in tall grass. Check out Bulbapedia for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedEncounterMethodSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2EncounterMethodList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EncounterMethodList($queryParameters), $fetch);
    }
    /**
     * Methods by which the player might can encounter Pokémon in the wild, e.g., walking in tall grass. Check out Bulbapedia for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\EncounterMethodDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2EncounterMethodRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EncounterMethodRetrieve($id), $fetch);
    }
    /**
    * Conditions which affect what pokemon might appear in the wild, e.g., day or night.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedEncounterConditionSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2EncounterConditionList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EncounterConditionList($queryParameters), $fetch);
    }
    /**
     * Conditions which affect what pokemon might appear in the wild, e.g., day or night.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\EncounterConditionDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2EncounterConditionRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EncounterConditionRetrieve($id), $fetch);
    }
    /**
    * Encounter condition values are the various states that an encounter condition can have, i.e., time of day can be either day or night.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedEncounterConditionValueSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2EncounterConditionValueList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EncounterConditionValueList($queryParameters), $fetch);
    }
    /**
     * Encounter condition values are the various states that an encounter condition can have, i.e., time of day can be either day or night.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\EncounterConditionValueDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2EncounterConditionValueRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EncounterConditionValueRetrieve($id), $fetch);
    }
    /**
    * Evolution chains are essentially family trees. They start with the lowest stage within a family and detail evolution conditions for each as well as Pokémon they can evolve into up through the hierarchy.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedEvolutionChainSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2EvolutionChainList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EvolutionChainList($queryParameters), $fetch);
    }
    /**
     * Evolution chains are essentially family trees. They start with the lowest stage within a family and detail evolution conditions for each as well as Pokémon they can evolve into up through the hierarchy.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\EvolutionChainDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2EvolutionChainRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EvolutionChainRetrieve($id), $fetch);
    }
    /**
    * Evolution triggers are the events and conditions that cause a Pokémon to evolve. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Methods_of_evolution) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedEvolutionTriggerSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2EvolutionTriggerList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EvolutionTriggerList($queryParameters), $fetch);
    }
    /**
     * Evolution triggers are the events and conditions that cause a Pokémon to evolve. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Methods_of_evolution) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\EvolutionTriggerDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2EvolutionTriggerRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2EvolutionTriggerRetrieve($id), $fetch);
    }
    /**
    * A generation is a grouping of the Pokémon games that separates them based on the Pokémon they include. In each generation, a new set of Pokémon, Moves, Abilities and Types that did not exist in the previous generation are released.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedGenerationSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2GenerationList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2GenerationList($queryParameters), $fetch);
    }
    /**
     * A generation is a grouping of the Pokémon games that separates them based on the Pokémon they include. In each generation, a new set of Pokémon, Moves, Abilities and Types that did not exist in the previous generation are released.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\GenerationDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2GenerationRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2GenerationRetrieve($id), $fetch);
    }
    /**
    * Genders were introduced in Generation II for the purposes of breeding Pokémon but can also result in visual differences or even different evolutionary lines. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Gender) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedGenderSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2GenderList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2GenderList($queryParameters), $fetch);
    }
    /**
     * Genders were introduced in Generation II for the purposes of breeding Pokémon but can also result in visual differences or even different evolutionary lines. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Gender) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\GenderDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2GenderRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2GenderRetrieve($id), $fetch);
    }
    /**
    * Growth rates are the speed with which Pokémon gain levels through experience. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Experience) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedGrowthRateSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2GrowthRateList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2GrowthRateList($queryParameters), $fetch);
    }
    /**
     * Growth rates are the speed with which Pokémon gain levels through experience. Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Experience) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\GrowthRateDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2GrowthRateRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2GrowthRateRetrieve($id), $fetch);
    }
    /**
    * An item is an object in the games which the player can pick up, keep in their bag, and use in some manner. They have various uses, including healing, powering up, helping catch Pokémon, or to access a new area.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedItemSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2ItemList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ItemList($queryParameters), $fetch);
    }
    /**
     * An item is an object in the games which the player can pick up, keep in their bag, and use in some manner. They have various uses, including healing, powering up, helping catch Pokémon, or to access a new area.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\ItemDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2ItemRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ItemRetrieve($id), $fetch);
    }
    /**
    * Item categories determine where items will be placed in the players bag.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedItemCategorySummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2ItemCategoryList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ItemCategoryList($queryParameters), $fetch);
    }
    /**
     * Item categories determine where items will be placed in the players bag.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\ItemCategoryDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2ItemCategoryRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ItemCategoryRetrieve($id), $fetch);
    }
    /**
    * Item attributes define particular aspects of items, e.g."usable in battle" or "consumable".
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedItemAttributeSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2ItemAttributeList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ItemAttributeList($queryParameters), $fetch);
    }
    /**
     * Item attributes define particular aspects of items, e.g."usable in battle" or "consumable".
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\ItemAttributeDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2ItemAttributeRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ItemAttributeRetrieve($id), $fetch);
    }
    /**
    * The various effects of the move"Fling" when used with different items.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedItemFlingEffectSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2ItemFlingEffectList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ItemFlingEffectList($queryParameters), $fetch);
    }
    /**
     * The various effects of the move"Fling" when used with different items.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\ItemFlingEffectDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2ItemFlingEffectRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ItemFlingEffectRetrieve($id), $fetch);
    }
    /**
    * Pockets within the players bag used for storing items by category.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedItemPocketSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2ItemPocketList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ItemPocketList($queryParameters), $fetch);
    }
    /**
     * Pockets within the players bag used for storing items by category.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\ItemPocketDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2ItemPocketRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2ItemPocketRetrieve($id), $fetch);
    }
    /**
    * Languages for translations of API resource information.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedLanguageSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2LanguageList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2LanguageList($queryParameters), $fetch);
    }
    /**
     * Languages for translations of API resource information.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\LanguageDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2LanguageRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2LanguageRetrieve($id), $fetch);
    }
    /**
    * Locations that can be visited within the games. Locations make up sizable portions of regions, like cities or routes.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedLocationSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2LocationList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2LocationList($queryParameters), $fetch);
    }
    /**
     * Locations that can be visited within the games. Locations make up sizable portions of regions, like cities or routes.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\LocationDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2LocationRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2LocationRetrieve($id), $fetch);
    }
    /**
     * Location areas are sections of areas, such as floors in a building or cave. Each area has its own set of possible Pokémon encounters.
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedLocationAreaSummaryList : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2LocationAreaList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2LocationAreaList($queryParameters), $fetch);
    }
    /**
     * Location areas are sections of areas, such as floors in a building or cave. Each area has its own set of possible Pokémon encounters.
     * @param int $id A unique integer value identifying this location area.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\LocationAreaDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2LocationAreaRetrieve(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2LocationAreaRetrieve($id), $fetch);
    }
    /**
    * Machines are the representation of items that teach moves to Pokémon. They vary from version to version, so it is not certain that one specific TM or HM corresponds to a single Machine.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedMachineSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2MachineList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MachineList($queryParameters), $fetch);
    }
    /**
     * Machines are the representation of items that teach moves to Pokémon. They vary from version to version, so it is not certain that one specific TM or HM corresponds to a single Machine.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\MachineDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2MachineRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MachineRetrieve($id), $fetch);
    }
    /**
    * Moves are the skills of Pokémon in battle. In battle, a Pokémon uses one move each turn. Some moves (including those learned by Hidden Machine) can be used outside of battle as well, usually for the purpose of removing obstacles or exploring new areas.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedMoveSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2MoveList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveList($queryParameters), $fetch);
    }
    /**
     * Moves are the skills of Pokémon in battle. In battle, a Pokémon uses one move each turn. Some moves (including those learned by Hidden Machine) can be used outside of battle as well, usually for the purpose of removing obstacles or exploring new areas.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\MoveDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2MoveRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveRetrieve($id), $fetch);
    }
    /**
    * Move Ailments are status conditions caused by moves used during battle. See [Bulbapedia](https://bulbapedia.bulbagarden.net/wiki/Status_condition) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedMoveMetaAilmentSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2MoveAilmentList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveAilmentList($queryParameters), $fetch);
    }
    /**
     * Move Ailments are status conditions caused by moves used during battle. See [Bulbapedia](https://bulbapedia.bulbagarden.net/wiki/Status_condition) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\MoveMetaAilmentDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2MoveAilmentRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveAilmentRetrieve($id), $fetch);
    }
    /**
    * Styles of moves when used in the Battle Palace. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Battle_Frontier_(Generation_III)) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedMoveBattleStyleSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2MoveBattleStyleList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveBattleStyleList($queryParameters), $fetch);
    }
    /**
     * Styles of moves when used in the Battle Palace. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Battle_Frontier_(Generation_III)) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\MoveBattleStyleDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2MoveBattleStyleRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveBattleStyleRetrieve($id), $fetch);
    }
    /**
    * Very general categories that loosely group move effects.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedMoveMetaCategorySummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2MoveCategoryList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveCategoryList($queryParameters), $fetch);
    }
    /**
     * Very general categories that loosely group move effects.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\MoveMetaCategoryDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2MoveCategoryRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveCategoryRetrieve($id), $fetch);
    }
    /**
    * Damage classes moves can have, e.g. physical, special, or non-damaging.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedMoveDamageClassSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2MoveDamageClassList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveDamageClassList($queryParameters), $fetch);
    }
    /**
     * Damage classes moves can have, e.g. physical, special, or non-damaging.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\MoveDamageClassDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2MoveDamageClassRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveDamageClassRetrieve($id), $fetch);
    }
    /**
    * Methods by which Pokémon can learn moves.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedMoveLearnMethodSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2MoveLearnMethodList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveLearnMethodList($queryParameters), $fetch);
    }
    /**
     * Methods by which Pokémon can learn moves.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\MoveLearnMethodDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2MoveLearnMethodRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveLearnMethodRetrieve($id), $fetch);
    }
    /**
    * Targets moves can be directed at during battle. Targets can be Pokémon, environments or even other moves.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedMoveTargetSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2MoveTargetList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveTargetList($queryParameters), $fetch);
    }
    /**
     * Targets moves can be directed at during battle. Targets can be Pokémon, environments or even other moves.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\MoveTargetDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2MoveTargetRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2MoveTargetRetrieve($id), $fetch);
    }
    /**
    * Natures influence how a Pokémon's stats grow. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Nature) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedNatureSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2NatureList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2NatureList($queryParameters), $fetch);
    }
    /**
     * Natures influence how a Pokémon's stats grow. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Nature) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\NatureDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2NatureRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2NatureRetrieve($id), $fetch);
    }
    /**
    * Areas used for grouping Pokémon encounters in Pal Park. They're like habitats that are specific to Pal Park.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedPalParkAreaSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2PalParkAreaList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PalParkAreaList($queryParameters), $fetch);
    }
    /**
     * Areas used for grouping Pokémon encounters in Pal Park. They're like habitats that are specific to Pal Park.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PalParkAreaDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2PalParkAreaRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PalParkAreaRetrieve($id), $fetch);
    }
    /**
    * A Pokédex is a handheld electronic encyclopedia device; one which is capable of recording and retaining information of the various Pokémon in a given region with the exception of the national dex and some smaller dexes related to portions of a region. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pokedex) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedPokedexSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2PokedexList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokedexList($queryParameters), $fetch);
    }
    /**
     * A Pokédex is a handheld electronic encyclopedia device; one which is capable of recording and retaining information of the various Pokémon in a given region with the exception of the national dex and some smaller dexes related to portions of a region. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pokedex) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PokedexDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2PokedexRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokedexRetrieve($id), $fetch);
    }
    /**
    * Pokémon are the creatures that inhabit the world of the Pokémon games. They can be caught using Pokéballs and trained by battling with other Pokémon. Each Pokémon belongs to a specific species but may take on a variant which makes it differ from other Pokémon of the same species, such as base stats, available abilities and typings. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pok%C3%A9mon_(species)) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedPokemonSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2PokemonList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonList($queryParameters), $fetch);
    }
    /**
     * Pokémon are the creatures that inhabit the world of the Pokémon games. They can be caught using Pokéballs and trained by battling with other Pokémon. Each Pokémon belongs to a specific species but may take on a variant which makes it differ from other Pokémon of the same species, such as base stats, available abilities and typings. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pok%C3%A9mon_(species)) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PokemonDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2PokemonRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonRetrieve($id), $fetch);
    }
    /**
    * Colors used for sorting Pokémon in a Pokédex. The color listed in the Pokédex is usually the color most apparent or covering each Pokémon's body. No orange category exists; Pokémon that are primarily orange are listed as red or brown.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedPokemonColorSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2PokemonColorList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonColorList($queryParameters), $fetch);
    }
    /**
     * Colors used for sorting Pokémon in a Pokédex. The color listed in the Pokédex is usually the color most apparent or covering each Pokémon's body. No orange category exists; Pokémon that are primarily orange are listed as red or brown.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PokemonColorDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2PokemonColorRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonColorRetrieve($id), $fetch);
    }
    /**
    * Some Pokémon may appear in one of multiple, visually different forms. These differences are purely cosmetic. For variations within a Pokémon species, which do differ in more than just visuals, the 'Pokémon' entity is used to represent such a variety.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedPokemonFormSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2PokemonFormList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonFormList($queryParameters), $fetch);
    }
    /**
     * Some Pokémon may appear in one of multiple, visually different forms. These differences are purely cosmetic. For variations within a Pokémon species, which do differ in more than just visuals, the 'Pokémon' entity is used to represent such a variety.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PokemonFormDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2PokemonFormRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonFormRetrieve($id), $fetch);
    }
    /**
    * Habitats are generally different terrain Pokémon can be found in but can also be areas designated for rare or legendary Pokémon.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedPokemonHabitatSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2PokemonHabitatList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonHabitatList($queryParameters), $fetch);
    }
    /**
     * Habitats are generally different terrain Pokémon can be found in but can also be areas designated for rare or legendary Pokémon.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PokemonHabitatDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2PokemonHabitatRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonHabitatRetrieve($id), $fetch);
    }
    /**
    * Shapes used for sorting Pokémon in a Pokédex.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedPokemonShapeSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2PokemonShapeList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonShapeList($queryParameters), $fetch);
    }
    /**
     * Shapes used for sorting Pokémon in a Pokédex.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PokemonShapeDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2PokemonShapeRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonShapeRetrieve($id), $fetch);
    }
    /**
    * A Pokémon Species forms the basis for at least one Pokémon. Attributes of a Pokémon species are shared across all varieties of Pokémon within the species. A good example is Wormadam; Wormadam is the species which can be found in three different varieties, Wormadam-Trash, Wormadam-Sandy and Wormadam-Plant.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedPokemonSpeciesSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2PokemonSpeciesList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonSpeciesList($queryParameters), $fetch);
    }
    /**
     * A Pokémon Species forms the basis for at least one Pokémon. Attributes of a Pokémon species are shared across all varieties of Pokémon within the species. A good example is Wormadam; Wormadam is the species which can be found in three different varieties, Wormadam-Trash, Wormadam-Sandy and Wormadam-Plant.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PokemonSpeciesDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2PokemonSpeciesRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonSpeciesRetrieve($id), $fetch);
    }
    /**
    * Pokeathlon Stats are different attributes of a Pokémon's performance in Pokéathlons. In Pokéathlons, competitions happen on different courses; one for each of the different Pokéathlon stats. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pok%C3%A9athlon) for greater detail.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedPokeathlonStatSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2PokeathlonStatList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokeathlonStatList($queryParameters), $fetch);
    }
    /**
     * Pokeathlon Stats are different attributes of a Pokémon's performance in Pokéathlons. In Pokéathlons, competitions happen on different courses; one for each of the different Pokéathlon stats. See [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Pok%C3%A9athlon) for greater detail.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PokeathlonStatDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2PokeathlonStatRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokeathlonStatRetrieve($id), $fetch);
    }
    /**
    * A region is an organized area of the Pokémon world. Most often, the main difference between regions is the species of Pokémon that can be encountered within them.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedRegionSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2RegionList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2RegionList($queryParameters), $fetch);
    }
    /**
     * A region is an organized area of the Pokémon world. Most often, the main difference between regions is the species of Pokémon that can be encountered within them.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\RegionDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2RegionRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2RegionRetrieve($id), $fetch);
    }
    /**
    * Stats determine certain aspects of battles. Each Pokémon has a value for each stat which grows as they gain levels and can be altered momentarily by effects in battles.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedStatSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2StatList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2StatList($queryParameters), $fetch);
    }
    /**
     * Stats determine certain aspects of battles. Each Pokémon has a value for each stat which grows as they gain levels and can be altered momentarily by effects in battles.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\StatDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2StatRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2StatRetrieve($id), $fetch);
    }
    /**
    * Super contest effects refer to the effects of moves when used in super contests.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedSuperContestEffectSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2SuperContestEffectList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2SuperContestEffectList($queryParameters), $fetch);
    }
    /**
     * Super contest effects refer to the effects of moves when used in super contests.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\SuperContestEffectDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2SuperContestEffectRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2SuperContestEffectRetrieve($id), $fetch);
    }
    /**
    * Types are properties for Pokémon and their moves. Each type has three properties: which types of Pokémon it is super effective against, which types of Pokémon it is not very effective against, and which types of Pokémon it is completely ineffective against.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedTypeSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2TypeList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2TypeList($queryParameters), $fetch);
    }
    /**
     * Types are properties for Pokémon and their moves. Each type has three properties: which types of Pokémon it is super effective against, which types of Pokémon it is not very effective against, and which types of Pokémon it is completely ineffective against.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\TypeDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2TypeRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2TypeRetrieve($id), $fetch);
    }
    /**
    * Versions of the games, e.g., Red, Blue or Yellow.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedVersionSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2VersionList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2VersionList($queryParameters), $fetch);
    }
    /**
     * Versions of the games, e.g., Red, Blue or Yellow.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\VersionDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2VersionRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2VersionRetrieve($id), $fetch);
    }
    /**
    * Version groups categorize highly similar versions of the games.
    * @param array{
    *    "limit"?: int, //Number of results to return per page.
    *    "offset"?: int, //The initial index from which to return the results.
    *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
    Case-insensitive query applied on the `name` property.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\PaginatedVersionGroupSummaryList : \Psr\Http\Message\ResponseInterface)
    */
    public function apiV2VersionGroupList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2VersionGroupList($queryParameters), $fetch);
    }
    /**
     * Version groups categorize highly similar versions of the games.
     * @param string $id This parameter can be a string or an integer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\VersionGroupDetail : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2VersionGroupRetrieve(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2VersionGroupRetrieve($id), $fetch);
    }
    /**
     * Handles Pokemon Encounters as a sub-resource.
     * @param string $pokemonId
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200Item[] : \Psr\Http\Message\ResponseInterface)
     */
    public function apiV2PokemonEncountersRetrieve(string $pokemonId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PokeApi\Endpoint\ApiV2PokemonEncountersRetrieve($pokemonId), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \App\Generated\PokeApi\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}