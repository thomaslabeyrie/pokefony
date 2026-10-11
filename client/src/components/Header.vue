<script lang="ts" setup>
import { MagnifyingGlassIcon, UserCircleIcon } from '@heroicons/vue/24/outline'
</script>

<template>
  <div
    class="flex w-screen items-center justify-between gap-4 border-b border-b-neutral-700 bg-neutral-900 px-5 py-3"
  >
    <!-- Title -->
    <div class="w-full"><h1 class="text-2xl font-bold">Pokéfony</h1></div>

    <!-- Search bar -->
    <div class="w-full">
      <div
        class="focus-within m-auto flex h-10 w-2/3 justify-between gap-2 rounded-full px-4 py-2 outline outline-neutral-700 transition-colors focus-within:outline-neutral-400"
      >
        <input type="text" placeholder="Search for a Pokémon" class="w-full outline-none" />

        <button>
          <MagnifyingGlassIcon
            class="h-full cursor-pointer text-neutral-400 transition-colors hover:text-neutral-50"
          />
        </button>
      </div>
    </div>

    <!-- User avatar -->
    <div class="flex w-full justify-end">
      <UserCircleIcon class="size-10 text-neutral-400" />
    </div>
  </div>
</template>

<style></style>
