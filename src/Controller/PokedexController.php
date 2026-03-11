<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;
use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\Exception\ClientException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class PokedexController extends AbstractController
{
    public function __construct(
        private readonly PokeApiService $pokeApi,
    ) {
    }

    #[Route(path: '/pokedex/{region?national}/{page?1}', name: 'app_pokedex_region')]
    public function list(string $region, int $page): Response
    {
        $pokemons = $this->pokeApi->getPokemonsByRegion($region, $page);

        $teamPokemonIds = [];

        return $this->render('pokemon/pokedex.html.twig', [
            'region' => $region,
            'page' => $page,
            'pokemons' => $pokemons,
            'teamPokemonIds' => $teamPokemonIds,
        ]);
    }

    #[Route(path: '/pokemon/{name}', name: 'app_pokemon_show')]
    public function show(string $name): Response
    {
        $data = $this->pokeApi->getFullPokemonData($name);

        // Initialize data for authenticated users
        $teams = [];

        return $this->render('pokemon/show.html.twig', [
            'pokemon' => $data['pokemon'],
            'types' => $data['types'],
            'evolutionChain' => $data['evolutionChain'],
            'species' => $data['species'],
            'teams' => $teams,
        ]);
    }

    #[Route('/search', name: 'app_pokemon_search', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function search(Request $request): Response
    {
        // Extract and validate query parameter
        $query = trim($request->query->get('q', ''));

        if (empty($query)) {
            $this->addFlash('warning', 'Please enter a Pokémon name or ID to search.');

            return $this->redirectToRoute('app_pokedex_region', [
                'region' => 'national',
                'page' => 1,
            ]);
        }

        // Lowercase the query for consistency (PokéAPI is case-insensitive)
        $query = strtolower($query);

        try {
            // Fetch Pokémon data (handles both name and ID)
            $pokemonDTO = $this->pokeApi->getPokemon($query);

            // Transform PokemonDTO to array matching PokedexEntryDTO structure
            $searchResult = [
                'id' => $pokemonDTO->id,
                'name' => $pokemonDTO->name,
                'artwork' => $pokemonDTO->sprites->officialArtwork,
                'types' => array_map(fn ($type) => $type->name, $pokemonDTO->types),
            ];

            return $this->render('pokemon/search.html.twig', [
                'query' => $query,
                'pokemons' => $pokemons,
                'teamPokemonIds' => $teamPokemonIds,
            ]);
        } catch (ClientException $e) {
            if (404 === $e->getResponse()->getStatusCode()) {
                $this->addFlash('error', "Pokémon '$query' not found. Please check the name or ID.");

                return $this->redirectToRoute('app_pokedex_region', [
                    'region' => 'national',
                    'page' => 1,
                ]);
            }
            throw $e; // Re-throw other client errors
        } catch (\Exception $e) {
            $this->addFlash('error', 'An error occurred while searching. Please try again.');

            return $this->redirectToRoute('app_pokedex_region', [
                'region' => 'national',
                'page' => 1,
            ]);
        }
    }
}
