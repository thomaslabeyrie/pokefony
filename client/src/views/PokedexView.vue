<script setup lang="ts">
import { ref, watch, computed, onMounted } from 'vue'
import { useRouter } from 'vue-router'
import { toUcFirst } from '@/utils'
import { ChevronDownIcon } from '@heroicons/vue/24/outline'
import type { Pokedex } from '@/types/Pokedex'
import { getPokedex, getPokedexesList } from '@/components/requester'
import PokemonTypeIcon from '@/components/PokemonTypeIcon.vue'
import Pagination from '@/components/Pagination.vue'
import SpriteImage from '@/components/SpriteImage.vue'
import useFuzzyFinding from '@/composables/fuzzyFinding'
import usePaginated from '@/composables/pagination'
import useSearchQuery from '@/composables/searchQuery'

const props = defineProps<{
  pokedex: string
  page: number
  query: string
}>()

const router = useRouter()

const dexNamesByRegion = ref<Record<string, string[]>>({})
onMounted(async () => {
  dexNamesByRegion.value = (await getPokedexesList()) ?? {}
})

const selectedDex = computed({
  get: () => props.pokedex,
  set: (pokedex) => router.push({ name: 'pokedex', params: { pokedex, page: 1 } }),
})

const pokedex = ref<Pokedex | null>(null)
const loading = ref(false)

watch(
  () => props.pokedex,
  async () => {
    loading.value = true
    pokedex.value = await getPokedex(props.pokedex)
    loading.value = false
  },
  { immediate: true },
)

const searchQuery = useSearchQuery(() => props.query)
const searchablePokedex = useFuzzyFinding(() => props.query, pokedex)
const paginatedPokedex = usePaginated(searchablePokedex, () => props.page, 20)
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
      v-if="paginatedPokedex"
      class="m-8 flex flex-col items-center transition-opacity duration-200"
      :class="{ 'pointer-events-none opacity-0': loading }"
    >
      <table class="w-full table-fixed">
        <colgroup>
          <col class="w-38" />
          <col class="w-42" />
          <col />
          <col class="w-40" />
        </colgroup>

        <tbody>
          <tr
            v-for="item in paginatedPokedex.items"
            :key="item.number"
            class="cursor-pointer rounded-xl transition-colors hover:bg-neutral-800"
            @click="router.push({ name: 'species', params: { name: item.name } })"
          >
            <td class="w-12 rounded-l-full px-6 py-3 text-neutral-400">#{{ item.number }}</td>

            <td class="py-3">
              <SpriteImage :src="item.spriteUrl" :alt="item.name" />
            </td>

            <td class="py-3 font-bold">{{ toUcFirst(item.name) }}</td>

            <td class="rounded-r-full py-3">
              <div class="flex gap-2">
                <PokemonTypeIcon v-for="type in item.types" :key="type" :type />
              </div>
            </td>
          </tr>
        </tbody>
      </table>

      <Pagination
        :totalPages="paginatedPokedex.totalPages"
        :currentPage="paginatedPokedex.page"
        class="mt-8"
      />
    </div>
  </div>
</template>

<style></style>
