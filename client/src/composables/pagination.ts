import { computed, toValue } from 'vue'
import type { MaybeRefOrGetter, ComputedRef } from 'vue'

interface Paginated<T> {
  items: T[]
  total: number
  page: number
  pageSize: number
  totalPages: number
}

/**
 * Splits a list into pages and returns the requested one.
 *
 * Pages are 1-based. A page past the end returns an empty `items` array.
 *
 * @template T - A list item
 * @param list - Items to paginate, or `null` while they're loading.
 * @param page - Current page number, starting at 1.
 * @param pageSize - Number of items per page.
 * @returns A computed page with its items and pagination info, or `null` while
 * `list` is `null`. Recomputed when `list` or `page` changes.
 */
export default function usePaginated<T>(
  list: MaybeRefOrGetter<T[] | null>,
  page: MaybeRefOrGetter<number>,
  pageSize: number,
): ComputedRef<Paginated<T> | null> {
  return computed(() => {
    const items = toValue(list)
    const currentPage = toValue(page)

    if (!items) return null

    return {
      items: items.slice(pageSize * (currentPage - 1), pageSize * currentPage),
      total: items.length,
      page: currentPage,
      pageSize,
      totalPages: Math.ceil(items.length / pageSize),
    }
  })
}
