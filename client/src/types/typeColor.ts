import type { PokemonType } from './pokemon'

export interface TypeColor {
  color: string
  textColor: string
  borderColor: string
}

export const typeColorMap: Record<PokemonType, TypeColor> = {
  normal: { color: '#a8a878', textColor: '#fff', borderColor: '#a8a878' },
  fire: { color: '#f08030', textColor: '#fff', borderColor: '#f08030' },
  water: { color: '#6890f0', textColor: '#fff', borderColor: '#6890f0' },
  electric: { color: '#f8d030', textColor: '#fff', borderColor: '#f8d030' },
  grass: { color: '#78c850', textColor: '#fff', borderColor: '#78c850' },
  ice: { color: '#98d8d8', textColor: '#fff', borderColor: '#98d8d8' },
  fighting: { color: '#c03028', textColor: '#fff', borderColor: '#c03028' },
  poison: { color: '#a040a0', textColor: '#fff', borderColor: '#a040a0' },
  ground: { color: '#e0c068', textColor: '#fff', borderColor: '#e0c068' },
  flying: { color: '#a890f0', textColor: '#fff', borderColor: '#a890f0' },
  psychic: { color: '#f85888', textColor: '#fff', borderColor: '#f85888' },
  bug: { color: '#a8b820', textColor: '#fff', borderColor: '#a8b820' },
  rock: { color: '#b8a038', textColor: '#fff', borderColor: '#b8a038' },
  ghost: { color: '#705898', textColor: '#fff', borderColor: '#705898' },
  dragon: { color: '#7038f8', textColor: '#fff', borderColor: '#7038f8' },
  dark: { color: '#705848', textColor: '#fff', borderColor: '#705848' },
  steel: { color: '#b8b8d0', textColor: '#fff', borderColor: '#b8b8d0' },
  fairy: { color: '#ee99ac', textColor: '#fff', borderColor: '#ee99ac' },
}
