import type { Type } from './Type'

export interface Pokedex {
  entries: PokedexEntry[]
  totalEntries: number
}

export interface PokedexEntry {
  spriteUrl: string
  name: string
  types: Type[]
  regionalId: number
}
