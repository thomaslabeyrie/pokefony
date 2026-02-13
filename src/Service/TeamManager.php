<?php

namespace App\Service;

use App\Entity\Pokemon;
use App\Entity\Team;
use App\Entity\User;
use App\Repository\TeamRepository;
use Doctrine\ORM\EntityManagerInterface;

class TeamManager
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private TeamRepository $teamRepository,
        private PokemonManager $pokemonManager,
    ) {
    }

    /**
     * Create a new team with initial Pokemon.
     *
     * @throws \RuntimeException If Pokemon cannot be fetched
     */
    public function createTeam(User $user, string $teamName, int $pokemonId): Team
    {
        $pokemon = $this->pokemonManager->getOrCreatePokemon($pokemonId);

        $team = new Team();
        $team->setName($teamName);
        $team->setUser($user);
        $team->addPokemon($pokemon);

        $this->entityManager->persist($team);
        $this->entityManager->flush();

        return $team;
    }

    /**
     * Add Pokemon to existing team.
     *
     * @throws \RuntimeException If team is full or Pokemon already in team
     */
    public function addPokemonToTeam(Team $team, int $pokemonId): void
    {
        if (!$team->canAddPokemon()) {
            throw new \RuntimeException('Team is full (maximum 6 Pokemon)');
        }

        $pokemon = $this->pokemonManager->getOrCreatePokemon($pokemonId);

        if ($team->hasPokemon($pokemon)) {
            throw new \RuntimeException('This Pokemon is already in the team');
        }

        $team->addPokemon($pokemon);
        $this->entityManager->flush();
    }

    /**
     * Remove Pokemon from team.
     */
    public function removePokemonFromTeam(Team $team, int $pokemonId): void
    {
        $pokemon = $this->pokemonManager->getOrCreatePokemon($pokemonId);
        $team->removePokemon($pokemon);
        $this->entityManager->flush();
    }

    /**
     * Rename an existing team.
     *
     * @throws \RuntimeException If validation fails
     */
    public function renameTeam(Team $team, string $newName): void
    {
        $newName = trim($newName);

        if (empty($newName)) {
            throw new \RuntimeException('Team name cannot be empty');
        }

        if (strlen($newName) > 100) {
            throw new \RuntimeException('Team name cannot exceed 100 characters');
        }

        $team->setName($newName);

        try {
            $this->entityManager->flush();
        } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
            throw new \RuntimeException('You already have a team with this name');
        }
    }

    /**
     * Get teams that can accept a Pokemon (not full, not already containing it).
     *
     * @return Team[]
     */
    public function getAvailableTeamsForPokemon(User $user, int $pokemonId): array
    {
        $allTeams = $user->getTeams()->toArray();
        $teamsWithPokemon = $this->teamRepository->findTeamsContainingPokemon($user, $pokemonId);

        return array_filter($allTeams, function ($team) use ($teamsWithPokemon) {
            return $team->canAddPokemon() && !in_array($team, $teamsWithPokemon, true);
        });
    }
}
