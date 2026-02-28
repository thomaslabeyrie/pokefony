<?php

namespace App\DataFixtures;

use App\Factory\PokemonFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PokemonFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        PokemonFactory::createMany(25);
    }
}
