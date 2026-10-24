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
