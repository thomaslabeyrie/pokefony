import type { Species } from '@/types/Species'
import type { Pokedex } from '@/types/Pokedex'
import { ApiError, NetworkError, UnprocessableEntityError, UnauthorizedError } from '@/errors/errors'
import type { User, RegistrationBody, RegistrationResponse, LoginBody, HttpRequestMethod } from '@/types/requester'

const baseUrl = import.meta.env.VITE_API_URL

// Auth
export function register(body: RegistrationBody): Promise<RegistrationResponse> {
  return request<RegistrationResponse>('/api/register', 'POST', body)
}
export function login(body: LoginBody): Promise<User> {
  return request<User>('/api/login', 'POST', body)
}
export function me(): Promise<User> {
  return request<User>('/api/me')
}

export function getSpecies(name: string): Promise<Species> {
  return request<Species>(`/pokemon/${name}`)
}
export function getPokedex(name: string): Promise<Pokedex> {
  return request<Pokedex>(`/pokedex/${name}`)
}
export function getPokedexesList(): Promise<Record<string, string[]>> {
  return request<Record<string, string[]>>('/pokedex')
}

async function request<T>(
  endpoint: string,
  method: HttpRequestMethod = 'GET',
  body?: unknown,
): Promise<T> {
  let response: Response

  const headers = new Headers({ Accept: 'application/json' })
  if (body) {
    headers.append('Content-Type', 'application/json')
  }

  try {
    response = await fetch(`${baseUrl}${endpoint}`, {
      method,
      credentials: 'include',
      headers,
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
