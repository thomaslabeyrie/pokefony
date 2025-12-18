<?php

namespace App\DTO\Pokemon;

class SpritesDTO
{
    public function __construct(
        public readonly ?string $officialArtwork,
        public readonly array $versions, // Sprites groupés par génération
    ) {}

    public static function fromApiResponse(array $data): self
    {
        return new self(
            officialArtwork: $data['other']['official-artwork']['front_default'] ?? null,
            versions: self::parseVersions($data['versions'] ?? []),
        );
    }

    private static function parseVersions(array $versions): array
    {
        $gameVersions = [];

        foreach ($versions as $genKey => $genData) {
            foreach ($genData as $gameKey => $sprites) {

                $gameName = str_replace('-', '_', $gameKey);

                // Gestion spéciale pour les sprites animés
                $animated = null;
                if (isset($sprites['animated'])) {
                    $animated = new AnimatedSpritesDTO(
                        frontDefault: $sprites['animated']['front_default'] ?? null,
                        backDefault: $sprites['animated']['back_default'] ?? null,
                        frontFemale: $sprites['animated']['front_female'] ?? null,
                        backFemale: $sprites['animated']['back_female'] ?? null,
                        frontShiny: $sprites['animated']['front_shiny'] ?? null,
                        backShiny: $sprites['animated']['back_shiny'] ?? null,
                        frontShinyFemale: $sprites['animated']['front_shiny_female'] ?? null,
                        backShinyFemale: $sprites['animated']['back_shiny_female'] ?? null,
                    );
                }

                $gameVersions[$gameName] = new GenerationSpritesDTO(
                    frontDefault: $sprites['front_default'] ?? null,
                    backDefault: $sprites['back_default'] ?? null,
                    frontFemale: $sprites['front_female'] ?? null,
                    backFemale: $sprites['back_female'] ?? null,
                    frontShiny: $sprites['front_shiny'] ?? null,
                    backShiny: $sprites['back_shiny'] ?? null,
                    frontShinyFemale: $sprites['front_shiny_female'] ?? null,
                    backShinyFemale: $sprites['back_shiny_female'] ?? null,
                    animated: $animated,
                );
            }
        }

        return $gameVersions;
    }
}
