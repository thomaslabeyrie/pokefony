import type { Species } from '@/types/Species'
import type { Pokedex } from '@/types/Pokedex'
import { ApiError, NetworkError, UnprocessableEntityError, UnauthorizedError } from '@/errors/errors'

type RegistrationBody = {
  email: string
  plainPassword: string
}

type LoginBody = {
  username: string
  password: string
}

type HttpRequestMethod = 'GET' | 'POST' | 'PUT' | 'PATCH' | 'DELETE'

const baseUrl = 'http://localhost:8000'

export const getSpecies = (name: string) => request<Species>(`/pokemon/${name}`)

export const getPokedex = (name: string) => request<Pokedex>(`/pokedex/${name}`)

export const getPokedexesList = () => request<Record<string, string[]>>('/pokedex')

// Auth
export const register = (body: RegistrationBody) => request(`/api/register`, 'POST', body)
export const login = (body: LoginBody) => request(`/api/login`, 'POST', body)

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
    throw new NetworkError('Failed to contact server. Please try again later.')
  }

  if (!response.ok) {
    const error = await response.json()

    switch (response.status) {
      case 422:
        throw new UnprocessableEntityError(error.violations)
      case 401:
        throw new UnauthorizedError(error.error)
      default:
        throw new ApiError('Server failure. Please try again later.')
    }
  }

  return await response.json()
}
