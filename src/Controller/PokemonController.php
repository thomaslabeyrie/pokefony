<?php

namespace App\Controller;

use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PokemonController extends AbstractController
{
    public function __construct(
        private PokeApiService $pokeApi,
        private array $pokedexOffsets = [
            'national' => 0,
            'kanto' => 0,      // 1-151 (Gen 1)
            'johto' => 151,    // 152-251 (Gen 2)
            'hoenn' => 251,    // 252-386 (Gen 3)
            'sinnoh' => 386,   // 387-493 (Gen 4)
            'unova' => 493,    // 494-649 (Gen 5)
            'kalos' => 649,    // 650-721 (Gen 6)
            'alola' => 721,    // 722-809 (Gen 7)
            'galar' => 809,    // 810-905 (Gen 8)
            'paldea' => 905,   // 906-1025 (Gen 9)
        ]
    ) {}

    #[Route('/pokemons/random', name: 'app_pokemon_random')]
    public function random(): Response
    {
        $data = $this->pokeApi->getRandomPokemons(12);

        return $this->render('pokemon/index.html.twig', [
            'pokedex' => $data,
        ]);
    }

    #[Route('/pokedex/{region?national}/{page?1}', name: 'app_pokedex_region')]
    public function list(string $region, int $page): Response
    {
        // Récupère le nom des pokémons
        $data = $this->pokeApi->getPokemonsByRegion($region, $page);

        return $this->render('pokemon/pokedex.html.twig', [
            'region' => $region,
            'page' => $page,
            'pokemons' => $data,
        ]);
    }

    #[Route('/pokemon/{name}', name: 'app_pokemon_show')]
    public function show(string $name)
    {
        $data = $this->pokeApi->getPokemonByName($name);

        // dd($data);

        return $this->render('pokemon/show.html.twig', [
            'pokemon' => $data,
        ]);
    }
}
