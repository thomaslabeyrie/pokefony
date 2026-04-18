<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Factory\PokemonFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PokemonFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $user = $this->getReference('user', User::class);
        PokemonFactory::createMany(25, ['user' => $user]);
    }

    public function getDependencies(): array
    {
        return [UserFixtures::class];
    }
}
