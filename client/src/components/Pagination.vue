<script lang="ts" setup>
import { ChevronRightIcon, ChevronLeftIcon } from '@heroicons/vue/24/outline'

const props = defineProps<{
  totalPages: number
  page: string
}>()
</script>

<template>
  <div v-if="Number(totalPages) > 0" class="flex w-full items-center justify-center gap-4">
    <RouterLink
      :to="{ name: 'pokedex', params: { page: Number(page) - 1 } }"
      class="flex size-8 cursor-pointer items-center justify-center rounded-full text-neutral-100 transition-colors hover:bg-neutral-600"
    >
      <ChevronLeftIcon
        class="size-5 cursor-pointer text-neutral-500 transition-colors hover:text-neutral-100"
      />
    </RouterLink>

    <div class="flex gap-2">
      <RouterLink
        v-for="page in totalPages"
        :key="page"
        :to="{ name: 'pokedex', params: { page: page } }"
        class="flex size-8 cursor-pointer items-center justify-center rounded-full transition-colors hover:text-neutral-100"
        :class="{
          'bg-neutral-700': page.toString() === props.page,
          'text-neutral-100': page.toString() === props.page,
          'text-neutral-500': page.toString() !== props.page,
        }"
      >
        {{ page }}
      </RouterLink>
    </div>

    <RouterLink
      :to="{ name: 'pokedex', params: { page: Number(page) + 1 } }"
      class="flex size-8 cursor-pointer items-center justify-center rounded-full text-neutral-100 transition-colors hover:bg-neutral-600"
    >
      <ChevronRightIcon
        class="size-5 cursor-pointer text-neutral-500 transition-colors hover:text-neutral-100"
      />
    </RouterLink>
  </div>
</template>
