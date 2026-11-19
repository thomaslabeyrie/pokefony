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
    class="flex h-full max-w-64 flex-col justify-between gap-4 border-r border-r-base-300 px-2 py-3"
  >
    <h1 class="w-full px-2 text-2xl">Pokéfony</h1>

    <hr class="text-base-300" />

    <nav class="menu w-full flex-1 gap-2">
      <RouterLink
        :to="{ name: 'pokedex' }"
        class="btn btn-ghost btn-block justify-start"
      >
        Pokédex
      </RouterLink>

      <RouterLink
        :to="{ name: 'pc' }"
        class="btn btn-ghost btn-block justify-start"
      >
        PC
      </RouterLink>
    </nav>

    <hr class="text-base-300" />

    <div v-if="auth.isAuthenticated" class="flex w-full items-center justify-between gap-12 px-2">
      <p>{{ auth.user?.user }}</p>
      <button
        class="cursor-pointer text-base-content/60 transition-colors duration-150 hover:text-base-content"
        @click="handleLogout"
      >
        Logout
      </button>
    </div>

    <div v-else class="flex flex-col gap-2">
      <RouterLink
        :to="{ name: 'login' }"
        class="px-2 py-1 text-base-content/60 transition-colors duration-150 hover:text-base-content"
      >
        Login
      </RouterLink>
      <RouterLink
        :to="{ name: 'register' }"
        class="px-2 py-1 text-base-content/60 transition-colors duration-150 hover:text-base-content"
      >
        Register
      </RouterLink>
    </div>
  </div>
</template>

<style></style>
