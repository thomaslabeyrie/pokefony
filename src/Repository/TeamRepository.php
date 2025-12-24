<?php

namespace App\Repository;

use App\Entity\Team;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Team>
 */
class TeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Team::class);
    }

    /**
     * Find teams by user with Pokemon count
     * Useful for displaying teams with member count
     *
     * @return array
     */
    public function findByUserWithPokemonCount(User $user): array
    {
        return $this->createQueryBuilder('t')
            ->select('t', 'COUNT(p.id) as pokemonCount')
            ->leftJoin('t.pokemons', 'p')
            ->where('t.user = :user')
            ->setParameter('user', $user)
            ->groupBy('t.id')
            ->orderBy('t.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find teams that contain a specific Pokemon
     *
     * @return Team[]
     */
    public function findTeamsContainingPokemon(User $user, int $pokemonId): array
    {
        return $this->createQueryBuilder('t')
            ->join('t.pokemons', 'p')
            ->where('t.user = :user')
            ->andWhere('p.pokemonId = :pokemonId')
            ->setParameter('user', $user)
            ->setParameter('pokemonId', $pokemonId)
            ->getQuery()
            ->getResult();
    }
}
