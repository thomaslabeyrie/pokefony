import { computed } from 'vue'
import type { Ref, ComputedRef } from 'vue'

interface Paginated<T> {
  items: T[]
  total: number
  page: number
  pageSize: number
  totalPages: number
}

export function usePaginated<T>(
  list: Ref<T[] | null>,
  page: Ref<number>,
  pageSize: number,
): ComputedRef<Paginated<T> | null> {
  return computed(() => {
    if (!list.value) return null

    return {
      items: list.value.slice(pageSize * (page.value - 1), pageSize * page.value),
      total: list.value.length,
      page: page.value,
      pageSize,
      totalPages: Math.ceil(list.value.length / pageSize),
    }
  })
}
