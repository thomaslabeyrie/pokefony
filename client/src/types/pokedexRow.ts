import type { PokemonType, Sprite } from './pokemon'

export interface PokedexRow {
  spriteUrl: string
  name: string
  types: PokemonType[]
  pokedexNumber: number
}
