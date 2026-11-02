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
          class="transition-200 h-12 cursor-pointer rounded-xl bg-neutral-700 px-6 py-2 transition-colors duration-150 hover:bg-neutral-200 hover:text-neutral-900"
          @click="handleLogout"
        >
          Logout
        </button>
        <UserCircleIcon class="size-10 text-neutral-400" />
      </div>

      <RouterLink
        v-else
        :to="{ name: 'login' }"
        class="flex size-8 cursor-pointer items-center justify-center rounded-full transition-colors"
      >
        Login
      </RouterLink>
    </div>
  </div>
</template>

<style></style>
