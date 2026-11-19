export interface NamedAPIResource {
  name: string;
  url: string;
}

export interface PokemonAbility {
  isHidden: boolean;
  slot: number;
  ability: NamedAPIResource;
}

export interface PokemonHeldItemVersion {
  rarity: number;
  version: NamedAPIResource;
}

export interface PokemonHeldItem {
  item: NamedAPIResource;
  versionDetails: PokemonHeldItemVersion[];
}

export interface GameIndex {
  gameIndex: number;
  version: NamedAPIResource;
}

export interface PokemonMoveVersion {
  levelLearnedAt: number;
  versionGroup: NamedAPIResource;
  moveLearnMethod: NamedAPIResource;
  order: number | null;
}

export interface PokemonMove {
  move: NamedAPIResource;
  versionGroupDetails: PokemonMoveVersion[];
}

export interface PokemonStat {
  baseStat: number;
  effort: number;
  stat: NamedAPIResource;
}

export interface PokemonType {
  slot: number;
  type: NamedAPIResource;
}

export interface PokemonPastType {
  generation: NamedAPIResource;
  types: PokemonType[];
}

export interface PokemonPastAbility {
  generation: NamedAPIResource;
  abilities: {
    ability: NamedAPIResource | null;
    isHidden: boolean;
    slot: number;
  }[];
}

export interface PokemonCries {
  latest: string;
  legacy: string;
}

// ---- Sprites ----

type Img = string | null;

interface BasicSprites {
  frontDefault: Img;
  frontFemale: Img;
}

interface FullSprites extends BasicSprites {
  backDefault: Img;
  backFemale: Img;
  backShiny: Img;
  backShinyFemale: Img;
  frontShiny: Img;
  frontShinyFemale: Img;
}

interface ShinySprites {
  frontDefault: Img;
  frontShiny: Img;
  backDefault?: Img;
  backShiny?: Img;
}

export interface PokemonSprites extends FullSprites {
  other: {
    dreamWorld: BasicSprites;
    home: Omit<FullSprites, "backDefault" | "backFemale" | "backShiny" | "backShinyFemale">;
    officialArtwork: { frontDefault: Img; frontShiny: Img };
    showdown: FullSprites;
  };
  versions: {
    generationI: {
      redBlue: {
        backDefault: Img;
        backGray: Img;
        frontDefault: Img;
        frontGray: Img;
      };
      yellow: {
        backDefault: Img;
        backGray: Img;
        frontDefault: Img;
        frontGray: Img;
      };
    };
    generationIi: {
      crystal: ShinySprites;
      gold: ShinySprites;
      silver: ShinySprites;
    };
    generationIii: {
      emerald: ShinySprites;
      fireredLeafgreen: ShinySprites;
      rubySapphire: ShinySprites;
    };
    generationIv: {
      diamondPearl: FullSprites;
      heartgoldSoulsilver: FullSprites;
      platinum: FullSprites;
    };
    generationV: {
      blackWhite: FullSprites & { animated: FullSprites };
    };
    generationVi: {
      omegarubyAlphasapphire: Omit<FullSprites, "backDefault" | "backFemale" | "backShiny" | "backShinyFemale">;
      xY: Omit<FullSprites, "backDefault" | "backFemale" | "backShiny" | "backShinyFemale">;
    };
    generationVii: {
      icons: BasicSprites;
      ultraSunUltraMoon: Omit<FullSprites, "backDefault" | "backFemale" | "backShiny" | "backShinyFemale">;
    };
    generationViii: {
      icons: BasicSprites;
    };
  };
}

// ---- Root ----

export interface Pokemon {
  id: number;
  name: string;
  baseExperience: number | null;
  height: number;
  isDefault: boolean;
  order: number;
  weight: number;
  abilities: PokemonAbility[];
  forms: NamedAPIResource[];
  gameIndices: GameIndex[];
  heldItems: PokemonHeldItem[];
  locationAreaEncounters: string;
  moves: PokemonMove[];
  species: NamedAPIResource;
  sprites: PokemonSprites;
  cries: PokemonCries;
  stats: PokemonStat[];
  types: PokemonType[];
  pastTypes: PokemonPastType[];
  pastAbilities: PokemonPastAbility[];
}
