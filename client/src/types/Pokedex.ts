import type { Type } from './Type'

export type Pokedex = PokedexEntry[]

export interface PokedexEntry {
  spriteUrl: string
  name: string
  types: Type[]
  number: number
}
