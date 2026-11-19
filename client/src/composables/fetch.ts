import { ref } from 'vue'

export default function useFetch<Args extends unknown[], T>(
  fetcher: (...args: Args) => Promise<T>,
) {
  const data = ref<T | null>(null)
  const loading = ref(false)
  const error = ref<Error | null>(null)

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
