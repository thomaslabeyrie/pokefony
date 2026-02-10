<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;
use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\Exception\ClientException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class PokedexController extends AbstractController
{
    public function __construct(
        private PokeApiService $pokeApi,
        private UserRepository $userRepository,
        private TeamRepository $teamRepository,
    ) {}

    #[Route(path: '/pokedex/{region?national}/{page?1}', name: 'app_pokedex_region')]
    public function list(string $region, int $page): Response
    {
        $pokemons = $this->pokeApi->getPokemonsByRegion($region, $page);

        $favoriteIds = [];
        $teamPokemonIds = [];

        $user = $this->getUser();

        if ($user instanceof User) {
            // Reload user from database to get fresh favoritePokemons collection
            $freshUser = $this->userRepository->find($user->getId());
            if ($freshUser) {
                $favoriteIds = array_values($freshUser->getFavoritePokemons()->map(fn($p) => $p->getPokemonId())->toArray());

                // Get teams containing each Pokemon
                foreach ($pokemons as $pokemon) {
                    $teams = $this->teamRepository->findTeamsContainingPokemon($freshUser, $pokemon->id);
                    if (!empty($teams)) {
                        $teamPokemonIds[$pokemon->id] = $teams;
                    }
                }
            }
        }

        return $this->render('pokemon/pokedex.html.twig', [
            'region' => $region,
            'page' => $page,
            'pokemons' => $pokemons,
            'favoriteIds' => $favoriteIds,
            'teamPokemonIds' => $teamPokemonIds,
        ]);
    }

    #[Route(path: '/pokemon/{name}', name: 'app_pokemon_show')]
    public function show(string $name): Response
    {
        $data = $this->pokeApi->getPokemon($name);

        // Initialize data for authenticated users
        $isFavorite = false;
        $teams = [];

        $user = $this->getUser();
        if ($user instanceof User) {
            // Reload user from database to get fresh data
            $freshUser = $this->userRepository->find($user->getId());
            if ($freshUser) {
                // Check if pokemon is in favorites
                $favoriteIds = $freshUser->getFavoritePokemons()->map(fn($p) => $p->getPokemonId())->toArray();
                $isFavorite = in_array($data->getId(), $favoriteIds);

                // Get teams containing this pokemon
                $teams = $this->teamRepository->findTeamsContainingPokemon($freshUser, $data->getId());
            }
        }

        return $this->render('pokemon/show.html.twig', [
            'pokemon' => $data,
            'isFavorite' => $isFavorite,
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
                'page' => 1
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
                'types' => array_map(fn($type) => $type->name, $pokemonDTO->types),
            ];

            // Wrap in array for template iteration
            $pokemons = [$searchResult];

            // Retrieve favorite/team data for authenticated users
            $favoriteIds = [];
            $teamPokemonIds = [];

            $user = $this->getUser();
            if ($user instanceof User) {
                // Reload user from database to get fresh data
                $freshUser = $this->userRepository->find($user->getId());
                if ($freshUser) {
                    // Get favorite IDs
                    $favoriteIds = array_values($freshUser->getFavoritePokemons()
                        ->map(fn($p) => $p->getPokemonId())->toArray());

                    // Get teams for this specific Pokémon
                    $teams = $this->teamRepository->findTeamsContainingPokemon(
                        $freshUser,
                        $pokemonDTO->id
                    );
                    if (!empty($teams)) {
                        $teamPokemonIds[$pokemonDTO->id] = $teams;
                    }
                }
            }

            return $this->render('pokemon/search.html.twig', [
                'query' => $query,
                'pokemons' => $pokemons,
                'favoriteIds' => $favoriteIds,
                'teamPokemonIds' => $teamPokemonIds,
            ]);
        } catch (ClientException $e) {
            if ($e->getResponse()->getStatusCode() === 404) {
                $this->addFlash('error', "Pokémon '$query' not found. Please check the name or ID.");
                return $this->redirectToRoute('app_pokedex_region', [
                    'region' => 'national',
                    'page' => 1
                ]);
            }
            throw $e; // Re-throw other client errors
        } catch (\Exception $e) {
            $this->addFlash('error', 'An error occurred while searching. Please try again.');
            return $this->redirectToRoute('app_pokedex_region', [
                'region' => 'national',
                'page' => 1
            ]);
        }
    }
}
