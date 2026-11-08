<script lang="ts" setup>
import { useAuthStore } from '@/stores/authStore'
import { useRouter } from 'vue-router'

const router = useRouter()
const auth = useAuthStore()

async function handleLogout() {
  await auth.logout()
  router.push({ name: 'home' })
}
</script>

<template>
  <div
    class="flex h-full min-w-64 flex-col justify-between gap-4 border-r border-r-neutral-700 bg-neutral-900 px-2 py-3"
  >
    <h1 class="w-full px-2 text-2xl">Pokéfony</h1>

    <hr class="text-neutral-600" />

    <nav class="flex flex-1 flex-col">
      <RouterLink
        :to="{ name: 'pokedex' }"
        class="transition-200 flex items-center gap-2 rounded-lg px-2 py-1 transition-colors duration-150 hover:bg-neutral-200 hover:text-neutral-900"
      >
        Pokédex
      </RouterLink>
      <RouterLink
        :to="{ name: 'home' }"
        class="transition-200 flex items-center gap-2 rounded-lg px-2 py-1 transition-colors duration-150 hover:bg-neutral-200 hover:text-neutral-900"
      >
        PC
      </RouterLink>
    </nav>

    <hr class="text-neutral-600" />

    <div v-if="auth.isAuthenticated" class="flex w-full items-center justify-between gap-12 px-2">
      <p>{{ auth.user?.user }}</p>
      <button
        class="transition-200 cursor-pointer text-neutral-500 transition-colors duration-150 hover:text-neutral-100"
        @click="handleLogout"
      >
        Logout
      </button>
    </div>

    <div v-else class="flex flex-col gap-2">
      <RouterLink
        :to="{ name: 'login' }"
        class="transition-200 cursor-pointer px-2 py-1 text-neutral-500 transition-colors duration-150 hover:text-neutral-100"
      >
        Login
      </RouterLink>
      <RouterLink
        :to="{ name: 'register' }"
        class="transition-200 cursor-pointer px-2 py-1 text-neutral-500 transition-colors duration-150 hover:text-neutral-100"
      >
        Register
      </RouterLink>
    </div>
  </div>
</template>

<style></style>
