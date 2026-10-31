<script lang="ts" setup>
import { UserCircleIcon } from '@heroicons/vue/24/outline'
import { useAuthStore } from '@/stores/authStore'

const auth = useAuthStore()
</script>

<template>
  <div
    class="flex w-screen items-center justify-between gap-4 border-b border-b-neutral-700 bg-neutral-900 px-5 py-3"
  >
    <!-- Title -->
    <div class="w-full"><h1 class="text-2xl">Pokéfony</h1></div>

    <!-- User avatar -->
    <div>
      <div v-if="auth.isAuthenticated" class="flex w-full items-center justify-end gap-4">
        <p>{{ auth.user?.user }}</p>
        <UserCircleIcon class="size-10 text-neutral-400" />
      </div>

      <RouterLink
        v-else
        :to="'login'"
        class="flex size-8 cursor-pointer items-center justify-center rounded-full transition-colors"
      >
        Login
      </RouterLink>
    </div>
  </div>
</template>

<style></style>
