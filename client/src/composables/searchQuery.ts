import { ref, watch, toValue } from 'vue'
import type { MaybeRefOrGetter } from 'vue'
import { useRouter } from 'vue-router'

/**
 * Two-way binding between a search input and the `?pokemon=` URL query.
 *
 * The URL is the source of truth: when it changes, the input follows.
 * When the user types, the URL is updated after `delay` ms of inactivity,
 * going back to page 1.
 *
 * @param urlQuery - Search query currently in the URL, e.g. `() => props.query`.
 * @param delay - Debounce delay in milliseconds before updating the URL.
 * @returns A writable ref to bind to the search input with `v-model`.
 */
export default function useSearchQuery(urlQuery: MaybeRefOrGetter<string>, delay = 300) {
  const router = useRouter()
  const searchQuery = ref(toValue(urlQuery))

  // URL -> input
  watch(
    () => toValue(urlQuery),
    (query) => (searchQuery.value = query),
  )

  // input -> URL
  let debounceId = 0
  watch(searchQuery, (query) => {
    clearTimeout(debounceId)

    debounceId = setTimeout(() => {
      if (query === toValue(urlQuery)) return
      router.push({ params: { page: 1 }, query: query ? { pokemon: query } : {} })
    }, delay)
  })

  return searchQuery
}
