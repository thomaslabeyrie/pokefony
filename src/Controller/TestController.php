<?php

namespace App\Controller;

use App\PokeApiClient\DTO\Evolution\EvolutionChainDTO;
use App\PokeApiClient\DTO\Pokemon\PokemonDTO;
use App\PokeApiClient\DTO\PokemonSpecies\PokemonSpeciesDTO;
use App\PokeApiClient\DTO\Type\TypeDTO;
use App\PokeApiClient\PokeApiClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function test(PokeApiClient $pokeApiClient): Response
    {
        $pokemon = $pokeApiClient->get(new PokemonDTO(), 'bulbasaurg');

        $types = [];
        foreach ($pokemon->types as $slot) {
            $types[] = $pokeApiClient->get(new TypeDTO(), $slot->type->name);
        }

        $species = $pokeApiClient->get(new PokemonSpeciesDTO(), $pokemon->name);

        $evolutionChain = $pokeApiClient->getFromResource($species->evolutionChain, new EvolutionChainDTO());

        dd($pokemon, $types, $species, $evolutionChain);
    }
}
