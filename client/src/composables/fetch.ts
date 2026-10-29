import { ref } from 'vue'
import type { Ref } from 'vue'

export default function useFetch<Args extends unknown[], T>(
  fetcher: (...args: Args) => Promise<T>,
) {
  const data: Ref<T | null> = ref(null)
  const loading = ref(false)
  const error: Ref<Error | null> = ref(null)

  async function execute(...args: Args) {
    error.value = null
    loading.value = true

    return fetcher(...args)
      .then((result) => (data.value = result))
      .catch((err) => {
        data.value = null
        error.value = err instanceof Error ? err : new Error(String(err))
      })
      .finally(() => (loading.value = false))
  }

  return { execute, data, loading, error }
}
