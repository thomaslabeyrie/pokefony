# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Pokefony is a Symfony 8 Pokédex web application that fetches Pokémon data from PokéAPI (https://pokeapi.co/api/v2/). Built with PHP 8.4, PostgreSQL, Twig templates, Bootstrap 5, and Stimulus/Turbo for frontend interactivity.

## Common Commands

```bash
# Install dependencies
composer install

# Run tests
./bin/phpunit

# Clear cache
php bin/console cache:clear

# List routes
php bin/console debug:router

# Run database migrations
php bin/console doctrine:migrations:migrate

# Start PostgreSQL via Docker
docker compose up -d
```

## Architecture

### Request Flow
1. Routes defined via attributes in Controllers
2. Controllers delegate to `PokeApiService` for API calls
3. Service transforms API responses into DTOs
4. Twig templates render the data

### Key Components

**Controllers** (`src/Controller/`)
- `PokemonController` - Two routes: `/pokedex/{region}/{page}` (list) and `/pokemon/{name}` (detail)

**Services** (`src/Service/`)
- `PokeApiService` - All PokéAPI HTTP interactions, handles parallel requests for type data

**DTOs** (`src/DTO/Pokemon/`)
- `PokemonDTO` - Full Pokémon details for detail view
- `PokedexEntryDTO` - Lightweight entry for list pagination
- `EvolutionChainDTO` - Evolution tree with chain flattening logic
- `TypeDTO`, `TypeEffectivenessDTO`, `DamageRelationsDTO` - Type system
- `AbilityDTO`, `StatDTO`, `SpeciesDTO` - Additional data
- `SpritesDTO`, `AnimatedSpritesDTO`, `GenerationSpritesDTO` - Image handling

**Entities** (`src/Entity/`)
- `User` - Authentication entity with email/password

### Frontend Stack
- **Asset Mapper** (not Webpack) - Modern Symfony asset system
- **Bootstrap 5.3.8** - UI framework
- **Stimulus 3.2.2** - JavaScript controllers
- **Turbo 7.3.0** - SPA-like navigation
- Templates in `templates/pokemon/`

### Configuration
- Environment variables in `.env` (POKEAPI_BASE_URL, DATABASE_URL)
- Services autowired in `config/services.yaml`
- PostgreSQL 16 configured in `config/packages/doctrine.yaml`

## Database

PostgreSQL via Docker Compose. Run `docker compose up -d` to start.

Connection: `postgresql://app:!ChangeMe!@127.0.0.1:5432/app`
