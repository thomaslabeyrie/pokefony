<script setup lang="ts">
import { ref, watch, computed, onMounted } from 'vue'
import { useRouter } from 'vue-router'
import { toUcFirst } from '@/utils'
import { MagnifyingGlassIcon, ChevronDownIcon } from '@heroicons/vue/24/outline'
import type { Pokedex } from '@/types/Pokedex'
import { getPokedex, getPokedexesList } from '@/components/requester'
import PokemonTypeIcon from '@/components/PokemonTypeIcon.vue'
import Pagination from '@/components/Pagination.vue'
import SpriteImage from '@/components/SpriteImage.vue'
import { useFuzzyFinding } from '@/composables/fuzzyFinding'

const props = defineProps<{
  pokedex: string
  page: number
}>()

const router = useRouter()

const dexNamesByRegion = ref<Record<string, string[]>>({})
const searchQuery = ref('')
const pokedex = ref<Pokedex | null>(null)
const loading = ref(false)

onMounted(async () => {
  dexNamesByRegion.value = (await getPokedexesList()) ?? {}
})

watch(
  () => [props.pokedex, props.page],
  async () => {
    loading.value = true
    pokedex.value = await getPokedex(props.pokedex, props.page)
    loading.value = false
  },
  { immediate: true },
)

const selectedDex = computed({
  get: () => props.pokedex,
  set: (pokedex) => router.push({ name: 'pokedex', params: { pokedex, page: 1 } }),
})

let debouncedQuery = ref('')
let debounceId = 0
watch(searchQuery, () => {
  clearTimeout(debounceId)
  debounceId = setTimeout(() => (debouncedQuery.value = searchQuery.value), 200)
})

const searchablePokedex = useFuzzyFinding(debouncedQuery, pokedex)
// const paginatedPokedex = usePagination(pokedex)

const itemsPerPage = 20
const totalPages = computed(() => Math.ceil((pokedex.value?.length ?? 0) / itemsPerPage))
</script>

<template>
  <div class="mx-auto my-8 w-1/2">
    <div class="relative flex gap-4">
      <input
        v-model="searchQuery"
        type="text"
        placeholder="Search for a Pokémon"
        class="focus-within m-auto flex h-10 w-1/2 justify-between gap-2 rounded-full px-4 py-2 outline-1 outline-neutral-700 transition-colors focus-within:outline-neutral-400"
      />

      <select
        name="pokedex"
        id="pokedex"
        v-model="selectedDex"
        placeholder="Pokédex"
        class="m-auto h-10 w-1/2 appearance-none rounded-full py-2 pr-10 pl-4 outline-1 outline-neutral-700 transition-colors focus-within:outline-neutral-400"
      >
        <optgroup v-for="(_, region) in dexNamesByRegion" :label="toUcFirst(region)">
          <option v-for="dex in dexNamesByRegion[region]" :key="dex" :value="dex">
            {{ toUcFirst(dex, ' ') }}
          </option>
        </optgroup>
      </select>

      <ChevronDownIcon
        class="pointer-events-none absolute top-1/2 right-4 size-5 -translate-y-1/2 text-neutral-500"
      />
    </div>

    <div
      v-if="searchablePokedex"
      class="flex flex-col items-center transition-opacity duration-200"
      :class="{ 'pointer-events-none opacity-0': loading }"
    >
      <table class="m-8 w-full table-fixed">
        <colgroup>
          <col class="w-38" />
          <col class="w-42" />
          <col />
          <col class="w-40" />
        </colgroup>

        <tbody>
          <tr
            v-for="entry in searchablePokedex"
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

      <Pagination :totalPages="totalPages" :currentPage="page" />
    </div>
  </div>
</template>

<style></style>
