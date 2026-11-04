<script lang="ts" setup>
import { UserCircleIcon } from '@heroicons/vue/24/outline'
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
    class="flex w-screen items-center justify-between gap-4 border-b border-b-neutral-700 bg-neutral-900 px-5 py-3"
  >
    <div class="w-full"><h1 class="text-2xl">Pokéfony</h1></div>

    <div>
      <div v-if="auth.isAuthenticated" class="flex w-full items-center justify-end gap-4">
        <p>{{ auth.user?.user }}</p>
        <button
          class="transition-200 cursor-pointer text-neutral-500 transition-colors duration-150 hover:text-neutral-100"
          @click="handleLogout"
        >
          Logout
        </button>
      </div>

      <div v-else class="flex gap-4">
        <RouterLink
          :to="{ name: 'login' }"
          class="transition-200 cursor-pointer text-neutral-500 transition-colors duration-150 hover:text-neutral-100"
        >
          Login
        </RouterLink>
        <RouterLink
          :to="{ name: 'register' }"
          class="transition-200 cursor-pointer text-neutral-500 transition-colors duration-150 hover:text-neutral-100"
        >
          Register
        </RouterLink>
      </div>
    </div>
  </div>
</template>

<style></style>
