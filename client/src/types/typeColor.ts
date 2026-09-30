import type { PokemonType } from './species'

export interface TypeColor {
  color: string
  textColor: string
  borderColor: string
}

export const typeColorMap: Record<PokemonType, TypeColor> = {
  normal: { color: '#a8a878', textColor: '#000', borderColor: '#a8a878' },
  fire: { color: '#f08030', textColor: '#000', borderColor: '#f08030' },
  water: { color: '#6890f0', textColor: '#000', borderColor: '#6890f0' },
  electric: { color: '#f8d030', textColor: '#000', borderColor: '#f8d030' },
  grass: { color: '#78c850', textColor: '#000', borderColor: '#78c850' },
  ice: { color: '#98d8d8', textColor: '#000', borderColor: '#98d8d8' },
  fighting: { color: '#c03028', textColor: '#000', borderColor: '#c03028' },
  poison: { color: '#a040a0', textColor: '#000', borderColor: '#a040a0' },
  ground: { color: '#e0c068', textColor: '#000', borderColor: '#e0c068' },
  flying: { color: '#a890f0', textColor: '#000', borderColor: '#a890f0' },
  psychic: { color: '#f85888', textColor: '#000', borderColor: '#f85888' },
  bug: { color: '#a8b820', textColor: '#000', borderColor: '#a8b820' },
  rock: { color: '#b8a038', textColor: '#000', borderColor: '#b8a038' },
  ghost: { color: '#705898', textColor: '#000', borderColor: '#705898' },
  dragon: { color: '#7038f8', textColor: '#000', borderColor: '#7038f8' },
  dark: { color: '#705848', textColor: '#000', borderColor: '#705848' },
  steel: { color: '#b8b8d0', textColor: '#000', borderColor: '#b8b8d0' },
  fairy: { color: '#ee99ac', textColor: '#000', borderColor: '#ee99ac' },
}
