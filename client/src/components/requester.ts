import type { Species } from '@/types/Species'
import type { Pokedex } from '@/types/Pokedex'

const baseUrl = 'http://localhost:8000'

export const getSpecies = (name: string) => request<Species>(`/pokemon/${name}`)

export const getPokedex = (name: string) => request<Pokedex>(`/pokedex/${name}`)

export const getPokedexesList = () => request<Record<string, string[]>>('/pokedex')

async function request<T>(endpoint: string): Promise<T> {
  const response = await fetch(`${baseUrl}${endpoint}`)

  if (!response.ok) {
    throw new Error(`Call to ${endpoint} failed: ${response.status}`)
  }

  return await response.json()
}
