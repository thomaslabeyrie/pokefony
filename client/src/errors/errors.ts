export class NetworkError extends Error {
  constructor(message: string) {
    super()
    this.message = message
  }
}

export class ApiError extends Error {
  constructor(message?: string) {
    super()
    if (message) {
      this.message = message
    }
  }
}

export class UnauthorizedError extends Error {
  constructor(message?: string) {
    super()
    if (message) {
      this.message = message
    }
  }
}


type Violation = {
  propertyPath: string
  title: string
  template: string
  parameters: {
    '{{ value }}': string
  }
  type: string
}

export class UnprocessableEntityError extends ApiError {
  violations: Violation[]

  constructor(violations: Violation[]) {
    super()
    this.violations = violations
  }
}

export function fieldErrorsOf(error: Error | null): Record<string, string> {
  if (!(error instanceof UnprocessableEntityError)) return {}

  const violations: Record<string, string> = {}
  for (const violation of error.violations) {
    violations[violation.propertyPath] = violation.title
  }
  return violations
}

export function generalErrorOf(error: Error | null): string | null {
  if (!error || error instanceof UnprocessableEntityError) {
    return null
  }

  if (error instanceof NetworkError || error instanceof ApiError || error instanceof UnauthorizedError) {
    return error.message
  }

  return 'An error occured, please try again later.'
}
