import type { Species } from '@/types/Species'
import type { Pokedex } from '@/types/Pokedex'
import { ApiError, NetworkError, UnprocessableEntityError } from '@/errors/errors'

type RegistrationBody = {
  email: string
  plainPassword: string
}

type HttpRequestMethod = 'GET' | 'POST' | 'PUT' | 'PATCH' | 'DELETE'

const baseUrl = 'http://localhost:8000'

export const getSpecies = (name: string) => request<Species>(`/pokemon/${name}`)

export const getPokedex = (name: string) => request<Pokedex>(`/pokedex/${name}`)

export const getPokedexesList = () => request<Record<string, string[]>>('/pokedex')

export const register = (body: RegistrationBody) => request(`/api/register`, 'POST', body)

async function request<T>(
  endpoint: string,
  method: HttpRequestMethod = 'GET',
  body?: unknown,
): Promise<T> {
  let response: Response

  try {
    response = await fetch(`${baseUrl}${endpoint}`, {
      method,
      headers: body
        ? { 'Content-Type': 'application/json', Accept: 'application/json' }
        : { Accept: 'application/json' },
      body: body ? JSON.stringify(body) : undefined,
    })
  } catch (error) {
    throw new NetworkError('Failed to contact server. Please retry later.')
  }

  if (!response.ok) {
    const error = await response.json()

    if (error.status === 422) {
      throw new UnprocessableEntityError(error.violations)
    } else {
      throw new ApiError('Server failure')
    }
  }

  return await response.json()
}
