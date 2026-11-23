<script setup lang="ts">
import { ref, watch, computed, onMounted, watchEffect } from 'vue'
import { useRouter } from 'vue-router'
import { toUcFirst } from '@/utils'
import { PlusIcon } from '@heroicons/vue/24/outline'
import type { Pokedex } from '@/types/Pokedex'
import { getPokedex, getPokedexesList } from '@/services/requester'
import PokemonTypeIcon from '@/components/PokemonTypeIcon.vue'
import Pagination from '@/components/Pagination.vue'
import SpriteImage from '@/components/SpriteImage.vue'
import useFuzzyFinding from '@/composables/fuzzyFinding'
import usePaginated from '@/composables/pagination'
import useSearchQuery from '@/composables/searchQuery'
import BaseModal from '@/components/BaseModal.vue'
import AddPokemonForm from '@/components/AddPokemonForm.vue'

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
const searchablePokedex = useFuzzyFinding(pokedex, () => props.query)
const paginatedPokedex = usePaginated(searchablePokedex, () => props.page, 20)

const showModal = ref(false)
const modalLoading = ref(false)
const speciesToAdd = ref<string | null>(null)

function openAddPokemonModal(pokemon: string) {
  speciesToAdd.value = pokemon
  showModal.value = true
}
</script>

<template>
  <div class="flex flex-col items-center justify-center px-4 py-8 md:px-16 lg:px-24">
    <div class="relative mb-4 flex w-1/2 flex-col justify-center gap-4 px-4 md:flex-row">
      <input v-model="searchQuery" type="text" placeholder="Search for a Pokémon" class="input" />

      <select name="pokedex" id="pokedex" v-model="selectedDex" class="select">
        <optgroup v-for="(_, region) in dexNamesByRegion" :label="toUcFirst(region)">
          <option v-for="dex in dexNamesByRegion[region]" :key="dex" :value="dex">
            {{ toUcFirst(dex) }}
          </option>
        </optgroup>
      </select>
    </div>

    <div v-if="paginatedPokedex" class="my-8 xl:w-3/5">
      <table class="table">
        <tbody>
          <tr v-for="item in paginatedPokedex.items" :key="item.number">
            <td class="text-base-content/60 px-6 py-3">#{{ item.number }}</td>

            <td class="py-3">
              <SpriteImage :src="item.spriteUrl" :alt="item.name" />
            </td>

            <td
              class="cursor-pointer py-3 font-bold hover:underline"
              @click="router.push({ name: 'species', params: { name: item.name } })"
            >
              <div>{{ toUcFirst(item.name) }}</div>
            </td>

            <td>
              <div class="flex gap-2">
                <PokemonTypeIcon v-for="type in item.types" :key="type" :type />
              </div>
            </td>

            <td class="py-3">
              <button
                @click="openAddPokemonModal(item.name)"
                class="btn btn-square btn-ghost btn-sm"
              >
                <PlusIcon class="size-6" />
              </button>
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

    <BaseModal v-model="showModal" class="m-auto">
      <h2 v-if="modalLoading">Loading</h2>
      <AddPokemonForm v-model:species="speciesToAdd"/>
    </BaseModal>
  </div>
</template>
