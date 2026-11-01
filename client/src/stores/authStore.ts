import { defineStore } from 'pinia'
import { ref, computed } from 'vue'
import type { User } from '@/types/requester'
import * as api from '@/services/requester'

export const useAuthStore = defineStore('auth', () => {
  // data
  const user = ref<User | null>(null)
  const initialized = ref(false)

  // getters
  const isAuthenticated = computed(() => user.value !== null)

  // setters
  async function login(username: string, password: string) {
    const result = await api.login({ username, password })
    user.value = result

    initialized.value = true
  }

  async function fetchUser() {
    try {
      const result = await api.me()
      user.value = result || null
    } catch {
      user.value = null
    } finally {
      initialized.value = true
    }
  }

  return { user, fetchUser, login, initialized, isAuthenticated }
})
