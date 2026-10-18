<script lang="ts" setup>
import { ChevronRightIcon, ChevronLeftIcon } from '@heroicons/vue/24/outline'
import { computed } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()

const props = defineProps<{
  totalPages: number
  currentPage: number
}>()

// Middle:
// ┌───────── maxSize ─────────┐
// 1 ... 13 14 [15] 16 17 ... 30
//       └─┬─┘      └─┬─┘
//         siblingCount
//
// Near start (near end is mirrored):
// ┌───── maxSize ──────┐
// 1 2 3 [4] 5 6 7 ... 30
// └─────────────┘
//  edgeWindowSize

const siblingCount = 2
const maxSize = 2 * siblingCount + 5
const edgeWindowSize = maxSize - 2
const ellipsis = '...'

const items = computed(() => {
  const { currentPage, totalPages } = props

  if (totalPages <= maxSize) {
    return range(1, totalPages)
  }

  if (currentPage + siblingCount <= edgeWindowSize) {
    return [...range(1, edgeWindowSize), ellipsis, totalPages]
  }

  if (currentPage - siblingCount > totalPages - edgeWindowSize) {
    return [1, ellipsis, ...range(totalPages - edgeWindowSize + 1, totalPages)]
  }

  return [
    1,
    ellipsis,
    ...range(currentPage - siblingCount, currentPage + siblingCount),
    ellipsis,
    totalPages,
  ]
})

const range = (from: number, to: number): number[] => {
  const numbers = []
  for (let i = from; i <= to; i++) {
    numbers.push(i)
  }
  return numbers
}
</script>

<template>
  <div v-if="totalPages > 0" class="flex w-full items-center justify-center gap-4">
    <RouterLink
      :to="{ name: 'pokedex', params: { pokedex: route.params.pokedex, page: currentPage - 1 } }"
      class="flex size-8 cursor-pointer items-center justify-center rounded-full transition-colors hover:bg-neutral-600 hover:first:text-neutral-100"
    >
      <ChevronLeftIcon
        class="size-5 cursor-pointer text-neutral-500 transition-colors hover:text-neutral-100"
      />
    </RouterLink>

    <template v-for="item in items">
      <div v-if="item === ellipsis" class="text-neutral-500">...</div>

      <RouterLink
        v-else
        :to="{ name: 'pokedex', params: { pokedex: route.params.pokedex, page: item } }"
        class="flex size-8 cursor-pointer items-center justify-center rounded-full transition-colors hover:text-neutral-100"
        :class="{
          'bg-neutral-700': item === props.currentPage,
          'text-neutral-100': item === props.currentPage,
          'text-neutral-500': item !== props.currentPage,
        }"
      >
        {{ item }}
      </RouterLink>
    </template>

    <RouterLink
      :to="{ name: 'pokedex', params: { pokedex: route.params.pokedex, page: currentPage + 1 } }"
      class="flex size-8 cursor-pointer items-center justify-center rounded-full text-neutral-100 transition-colors hover:bg-neutral-600"
    >
      <ChevronRightIcon
        class="size-5 cursor-pointer text-neutral-500 transition-colors hover:text-neutral-100"
      />
    </RouterLink>
  </div>
</template>
