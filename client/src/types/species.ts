import type { Type } from './Type'

export interface Species {
  id: number
  name: string
  types: Type[]
  height: number
  weight: number
  genus: string
  genderRate: number
  growthRate: string
  baseExperience: number
  eggGroups: string[]
  captureRate: number
  baseHappiness: number
  spriteUrl: string
  damageRelations: DamageRelations
  flavorText: string
  stats: Stat[]
  abilities: Ability[]
  evolutionChain: EvolutionNode
}

// Recursive: an evolution node contains more evolution nodes.
export interface EvolutionNode {
  name: string
  isBaby: boolean
  spriteUrl: string
  evolutions: EvolutionNode[]
  details: EvolutionDetail[]
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

export interface Ability {
  name: string
  isHidden: boolean
}

export interface Stat {
  name: string
  baseValue: number
}

export interface FlavorText {
  flavorText: string
}

export interface DamageRelations {
  immuneTo: Type[]
  veryResistantTo: Type[]
  resistantTo: Type[]
  neutralTo: Type[]
  weakTo: Type[]
  veryWeakTo: Type[]
}

export interface Sprite {
  url: string
}
