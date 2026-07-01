import type { PokemonType, Sprite } from './pokemon'

export interface PokedexRow {
  sprite: Sprite
  name: string
  types: PokemonType[]
  pokedexNumber: number
}
