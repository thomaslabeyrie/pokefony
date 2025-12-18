<?php

namespace App\Controller;

use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class PokemonController extends AbstractController
{
    public function __construct(private PokeApiService $pokeApi,) {}

    #[Route('/pokedex/{region?national}/{page?1}', name: 'app_pokedex_region')]
    public function list(string $region, int $page)
    {
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

        return $this->render('pokemon/show.html.twig', [
            'pokemon' => $data,
        ]);
    }
}
