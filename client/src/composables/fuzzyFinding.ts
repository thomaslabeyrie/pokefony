import { computed } from 'vue'
import type { Ref, ComputedRef } from 'vue'

type Named = { name: string }

/**
 * Filters and ranks a list of items by fuzzy-matching their `name` against a query.
 *
 * Items that don't match are excluded. Results are sorted by match score
 * (best first), then alphabetically for equal scores.
 *
 * @template T - A named list item
 * @param query - Reactive search string.
 * @param list - List of named items to search through.
 * @returns A computed list of matching items, recomputed when `query` changes.
 */
export function useFuzzyFinding<T extends Named>(
  query: Ref<string>,
  list: Ref<T[] | null>,
): ComputedRef<T[] | null> {
  return computed(() => {
    const cleanQuery = query.value.toLowerCase().replaceAll('-', '').replaceAll(' ', '')

    if (!list.value) return null
    if (cleanQuery.length < 1) return list.value

    return getSearchResults(cleanQuery, list.value)
  })
}

function getSearchResults<T extends Named>(query: string, list: T[]): T[] {
  return list
    .map((item) => ({ item: item, score: getMatchScore(query, item.name) }))
    .filter((item) => item.score > 0)
    .sort((a, b) => a.item.name.localeCompare(b.item.name))
    .sort((a, b) => b.score - a.score)
    .map((item) => item.item)
}

function getMatchScore(query: string, name: string): number {
  name = name.toLowerCase().replaceAll('-', '').replaceAll(' ', '')

  let nextIndex = 0
  let score = 100
  let matchScore = 0

  for (const char of query) {
    const foundIndex = name.indexOf(char, nextIndex)
    if (foundIndex === -1) return 0

    matchScore += Math.round(score / (foundIndex + 1))
    nextIndex = foundIndex + 1
    score /= 2
  }

  return matchScore
}
