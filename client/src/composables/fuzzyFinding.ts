import { computed, toValue } from 'vue'
import type { MaybeRefOrGetter, ComputedRef } from 'vue'

type Named = { name: string }

/**
 * Filters and ranks a list of items by fuzzy-matching their `name` against a query.
 *
 * Items that don't match are excluded. Results are sorted by match score
 * (best first), then alphabetically for equal scores.
 *
 * @template T - A named list item
 * @param query - Search string (value, ref or getter). An empty query returns `list` as is.
 * @param list - Named items to search through, or `null` while they're loading.
 * @returns A computed list of matching items, or `null` while `list` is `null`.
 * Recomputed when `query` or `list` changes.
 */
export default function useFuzzyFinding<T extends Named>(
  query: MaybeRefOrGetter<string>,
  list: MaybeRefOrGetter<T[] | null>,
): ComputedRef<T[] | null> {
  return computed(() => {
    const cleanQuery = toValue(query).toLowerCase().replaceAll('-', '').replaceAll(' ', '')
    const items = toValue(list)

    if (!items) return null
    if (cleanQuery.length < 1) return items

    return getSearchResults(cleanQuery, items)
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
