<?php

namespace App\Enum;

enum TypeEnum: string
{
    case NORMAL   = 'normal';
    case FIRE     = 'fire';
    case WATER    = 'water';
    case ELECTRIC = 'electric';
    case GRASS    = 'grass';
    case ICE      = 'ice';
    case FIGHTING = 'fighting';
    case POISON   = 'poison';
    case GROUND   = 'ground';
    case FLYING   = 'flying';
    case PSYCHIC  = 'psychic';
    case BUG      = 'bug';
    case ROCK     = 'rock';
    case GHOST    = 'ghost';
    case DRAGON   = 'dragon';
    case DARK     = 'dark';
    case STEEL    = 'steel';
    case FAIRY    = 'fairy';

    public function weaknesses (): array {
        return match ($this) {
            self::NORMAL => [self::FIGHTING],
            self::FIRE => [self::WATER, self::GROUND, self::ROCK],
            self::WATER => [self::ELECTRIC, self::GRASS],
            self::ELECTRIC => [self::GROUND],
            self::GRASS => [self::FIRE, self::ICE, self::POISON, self::FLYING, self::BUG],
            self::ICE => [self::FIRE, self::FIGHTING, self::ROCK, self::STEEL],
            self::FIGHTING => [self::FLYING, self::PSYCHIC, self::FAIRY],
            self::POISON => [self::GROUND, self::PSYCHIC],
            self::GROUND => [self::WATER, self::GRASS, self::ICE],
            self::FLYING => [self::ELECTRIC, self::ICE, self::ROCK],
            self::PSYCHIC => [self::BUG, self::GHOST, self::DARK],
            self::BUG => [self::FIRE, self::FLYING, self::ROCK],
            self::ROCK => [self::WATER, self::GRASS, self::FIGHTING, self::GROUND, self::STEEL],
            self::GHOST => [self::GHOST, self::DARK],
            self::DRAGON => [self::ICE, self::DRAGON, self::FAIRY],
            self::DARK => [self::FIGHTING, self::BUG, self::FAIRY],
            self::STEEL => [self::FIRE, self::FIGHTING, self::GROUND],
            self::FAIRY => [self::POISON, self::STEEL],
        };
    }

    public function resistances(): array {
        return match ($this) {
            self::NORMAL => [],
            self::FIRE => [self::FIRE, self::GRASS, self::ICE, self::BUG, self::STEEL, self::FAIRY],
            self::WATER => [self::FIRE, self::WATER, self::ICE, self::STEEL],
            self::ELECTRIC => [self::ELECTRIC, self::FLYING, self::STEEL],
            self::GRASS => [self::WATER, self::ELECTRIC, self::GRASS, self::GROUND],
            self::ICE => [self::ICE],
            self::FIGHTING => [self::BUG, self::ROCK, self::DARK],
            self::POISON => [self::GRASS, self::FIGHTING, self::POISON, self::BUG, self::FAIRY],
            self::GROUND => [self::POISON, self::ROCK],
            self::FLYING => [self::GRASS, self::FIGHTING, self::BUG],
            self::PSYCHIC => [self::FIGHTING, self::PSYCHIC],
            self::BUG => [self::GRASS, self::FIGHTING, self::GROUND],
            self::ROCK => [self::NORMAL, self::FIRE, self::POISON, self::FLYING],
            self::GHOST => [self::POISON, self::BUG],
            self::DRAGON => [self::FIRE, self::WATER, self::ELECTRIC, self::GRASS],
            self::DARK => [self::GHOST, self::DARK],
            self::STEEL => [self::NORMAL, self::GRASS, self::ICE, self::FLYING, self::PSYCHIC, self::BUG, self::ROCK, self::DRAGON, self::STEEL, self::FAIRY],
            self::FAIRY => [self::FIGHTING, self::BUG, self::DARK],
        };
    }

    public function immunities(): array {
        return match ($this) {
            self::NORMAL => [self::GHOST],
            self::GROUND => [self::ELECTRIC],
            self::FLYING => [self::GROUND],
            self::GHOST => [self::NORMAL, self::FIGHTING],
            self::DARK => [self::PSYCHIC],
            self::FAIRY => [self::DRAGON],
            self::STEEL => [self::POISON],
            default => [],
        };
    }

    public function multiplierAgainst(self $attacker): float {
        return match(true) {
            in_array($attacker, $this->immunities())  => 0,
            in_array($attacker, $this->weaknesses())  => 2,
            in_array($attacker, $this->resistances()) => 0.5,
            default => 1,
        };
    }
}
