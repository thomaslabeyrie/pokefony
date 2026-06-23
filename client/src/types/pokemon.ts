// A Pokémon type — you could widen this to `string`, but the union
// gives you autocomplete and catches typos.
export type PokemonType =
  | 'normal'
  | 'fire'
  | 'water'
  | 'electric'
  | 'grass'
  | 'ice'
  | 'fighting'
  | 'poison'
  | 'ground'
  | 'flying'
  | 'psychic'
  | 'bug'
  | 'rock'
  | 'ghost'
  | 'dragon'
  | 'dark'
  | 'steel'
  | 'fairy'

export interface Sprite {
  url: string
}

export interface DamageRelations {
  immuneTo: PokemonType[]
  veryResistantTo: PokemonType[]
  resistantTo: PokemonType[]
  neutralTo: PokemonType[]
  weakTo: PokemonType[]
  veryWeakTo: PokemonType[]
}

export interface FlavorText {
  flavorText: string
}

export interface Stat {
  name: string
  baseValue: number
}

export interface Ability {
  name: string
  isHidden: boolean
}

export interface EvolutionDetail {
  trigger: string
  item: string | null
  gender: number | null
  heldItem: string | null
  knownMove: string | null
  knownMoveType: string | null
  location: string | null
  minLevel: number | null
  minHappiness: number | null
  minBeauty: number | null
  minAffection: number | null
  needsMultiplayer: boolean
  needsOverworldRain: boolean
  partySpecies: string | null
  partyType: string | null
  relativePhysicalStats: number | null
  timeOfDay: string
  tradeSpecies: string | null
  turnUpsideDown: boolean
  region: string | null
  baseForm: string | null
  usedMove: string | null
  minMoveCount: number | null
  minSteps: number | null
  minDamageTaken: number | null
}

// Recursive: an evolution node contains more evolution nodes.
export interface EvolutionNode {
  name: string
  isBaby: boolean
  sprite: Sprite
  evolutions: EvolutionNode[]
  details: EvolutionDetail[]
}

export interface Pokemon {
  id: number
  name: string
  types: PokemonType[]
  height: number
  weight: number
  genderRate: number
  growthRate: string
  baseExperience: number
  captureRate: number
  baseHappiness: number
  sprite: Sprite
  damageRelations: DamageRelations
  flavorText: FlavorText
  stats: Stat[]
  abilities: Ability[]
  evolutionChain: EvolutionNode
}
