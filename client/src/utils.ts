export function toUcFirst(text: string, separator?: string): string {
  const split = text.split('')
  const toReplace = ['-', '_']

  for (let i = 0; i < split.length - 1; i++) {
    const current = split[i]

    if (current && toReplace.includes(current)) {
      split[i] = separator ? separator : ''
      const next = split[i + 1]
      if (next) split[i + 1] = next.toUpperCase()
    }
  }

  const joined = split.join('')
  return joined.charAt(0).toUpperCase() + joined.slice(1)
}

export function toPercent(value: number, max: number): number {
  return Math.round((value / max) * 100)
}

export function arrayToUcFirst(list: string[], separator?: string): string {
  const capitalized = list.map((text) => toUcFirst(text, separator))
  return capitalized.join(separator)
}
