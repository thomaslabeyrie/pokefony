<script setup lang="ts">
import { ref, watch, computed } from 'vue'
import { toUcFirst } from '../utils'
import PokemonTypeIcon from '../components/PokemonTypeIcon.vue'
import { useRouter } from 'vue-router'
import { getPokedex } from '@/components/requester'
import type { Pokedex } from '@/types/Pokedex'
import Pagination from '../components/Pagination.vue'
import SpriteImage from '../components/SpriteImage.vue'

const props = defineProps<{
  region: string
  page: number
}>()

const router = useRouter()

const pokedex = ref<Pokedex | null>(null)
const loading = ref(false)

const totalPages = computed(() => {
  return Math.ceil(pokedex.value?.totalEntries / 20)
})

watch(
  () => ({ ...props }),
  async (newProps) => {
    loading.value = true
    pokedex.value = await getPokedex(newProps.region, newProps.page)
    loading.value = false
  },
  { immediate: true },
)
</script>

<template>
  <div class="mx-auto my-8 w-1/2">
    <div
      v-if="pokedex"
      class="flex flex-col items-center transition-opacity duration-200"
      :class="{ 'pointer-events-none opacity-0': loading }"
    >
      <Pagination :totalPages="totalPages" :currentPage="page" class="mb-8" />

      <table class="w-full table-fixed">
        <colgroup>
          <col class="w-38" />
          <col class="w-42" />
          <col />
          <col class="w-40" />
        </colgroup>

        <tbody>
          <tr
            v-for="entry in pokedex.entries"
            :key="entry.regionalId"
            class="cursor-pointer rounded-xl transition-colors hover:bg-neutral-800"
            @click="router.push({ name: 'species', params: { name: entry.name } })"
          >
            <td class="w-12 rounded-l-full px-6 py-3 text-neutral-400">#{{ entry.regionalId }}</td>

            <td class="py-3">
              <SpriteImage :src="entry.spriteUrl" :alt="entry.name" />
            </td>

            <td class="py-3 font-bold">{{ toUcFirst(entry.name) }}</td>

            <td class="rounded-r-full py-3">
              <div class="flex gap-2">
                <PokemonTypeIcon v-for="type in entry.types" :key="type" :type />
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style></style>
