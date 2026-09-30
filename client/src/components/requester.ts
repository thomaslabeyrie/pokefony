import type { Species } from '../types/species'
import type { ListPage } from '../types/listPage'

const baseUrl = 'http://localhost:8000'

export async function getSpecies(name: string): Promise<Species> {
  try {
    const response = await fetch(`${baseUrl}/pokemon/${name}`)
    if (!response.ok) {
      throw new Error(`Response status: ${response.status}`)
    }

    return await response.json()
  } catch (error: any) {
    throw new Error(error.message)
  }
}

export async function getPokedexList(region?: string, page?: number): Promise<ListPage> {
  try {
    const response = await fetch(`${baseUrl}/pokedex/${region}/${page}`)
    if (!response.ok) {
      throw new Error(`Response status: ${response.status}`)
    }
    return await response.json()
  } catch (error: any) {
    throw new Error(error.message)
  }
}
