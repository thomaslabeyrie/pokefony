import { defineStore } from 'pinia'
import { ref, computed } from 'vue'
import type { User } from '@/types/requester'
import { me } from '@/services/requester'

export const useAuthStore = defineStore('auth', () => {
  // data
  const user = ref<User | null>(null)
  const initialized = ref(false)

  // getters
  const isAuthenticated = computed(() => user.value !== null)

  // setters
  async function fetchUser() {
    try {
      const result = await me()
      user.value = result || null
    } catch {
      user.value = null
    } finally {
      initialized.value = true
    }
  }

  return { user, fetchUser , initialized, isAuthenticated }
})
