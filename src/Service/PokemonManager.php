<?php

namespace App\Service;

use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use Doctrine\ORM\EntityManagerInterface;

class PokemonManager
{
    public function __construct(
        private PokeApiService $pokeApiService,
        private EntityManagerInterface $entityManager,
        private PokemonRepository $pokemonRepository,
    ) {
    }

    public function getOrCreatePokemon(string|int $identifier)
    {
        // On vérifie si le pokémon est déjà en BDD par son pokemonId
        $pokemon = $this->pokemonRepository->findOneBy(['pokemonId' => $identifier]);

        if ($pokemon) {
            return $pokemon;
        }

        // Sinon on le récupère depuis l'API
        $pokemonDTO = $this->pokeApiService->getPokemon($identifier);

        // On crée l'entité
        $pokemon = new Pokemon();
        $pokemon->setName($pokemonDTO->name);
        $pokemon->setPokemonId($pokemonDTO->id);
        $pokemon->setSpriteUrl($pokemonDTO->sprites->officialArtwork);
        $pokemon->setTypes(array_map(
            fn ($type) => [
                'name' => $type->name,
                'slot' => $type->slot,
            ],
            $pokemonDTO->types
        ));

        // Persist et flush
        $this->entityManager->persist($pokemon);
        $this->entityManager->flush();

        // Retourne l'entité
        return $pokemon;
    }
}
