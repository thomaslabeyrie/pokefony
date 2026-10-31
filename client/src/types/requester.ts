export type RegistrationBody = {
  email: string
  plainPassword: string
}

export type LoginBody = {
  username: string
  password: string
}

export type User = { user: string }

export type HttpRequestMethod = 'GET' | 'POST' | 'PUT' | 'PATCH' | 'DELETE'

export type RegistrationResponse = { message: string }
