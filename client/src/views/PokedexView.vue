<script setup lang="ts">
import { ref, watch } from 'vue'
import { toUcFirst } from '../utils'
import PokemonTypeIcon from '../components/PokemonTypeIcon.vue'
import { useRouter } from 'vue-router'
import { getPokedexList } from '@/components/requester'
import type { ListPage } from '@/types/listPage'
import { computed } from '@vue/reactivity'
import Pagination from '../components/Pagination.vue'
import SpriteImage from '../components/SpriteImage.vue'

const props = defineProps<{
  region: string
  page: string
}>()

const router = useRouter()

const pokedexList = ref<ListPage | null>(null)
const loading = ref(false)

const totalPages = computed(() => {
  return Math.ceil(pokedexList.value?.totalRows / 20)
})

watch(
  () => props.page,
  async (newPage) => {
    loading.value = true
    pokedexList.value = await getPokedexList(props.region, newPage)
    loading.value = false
  },
  { immediate: true },
)
</script>

<template>
  <div class="mx-auto my-8 w-1/2">
    <div
      v-if="pokedexList"
      class="flex flex-col items-center transition-opacity duration-200"
      :class="{ 'pointer-events-none opacity-0': loading }"
    >
      <Pagination :totalPages="totalPages" :page="page" class="mb-8" />

      <table class="w-full table-fixed">
        <colgroup>
          <col class="w-38" />
          <col class="w-42" />
          <col />
          <col class="w-40" />
        </colgroup>

        <tbody>
          <tr
            v-for="row in pokedexList.rows"
            :key="row.pokedexNumber"
            class="cursor-pointer rounded-xl transition-colors hover:bg-neutral-800"
            @click="router.push({ name: 'species', params: { name: row.name } })"
          >
            <td class="w-12 rounded-l-full px-6 py-3 text-neutral-400">#{{ row.pokedexNumber }}</td>

            <td class="py-3">
              <SpriteImage :src="row.spriteUrl" :alt="row.name" />
            </td>

            <td class="py-3 font-bold">{{ toUcFirst(row.name) }}</td>

            <td class="rounded-r-full py-3">
              <div class="flex gap-2">
                <PokemonTypeIcon v-for="type in row.types" :key="type" :type />
              </div>
            </td>
          </tr>
        </tbody>
      </table>

      <Pagination :totalPages="totalPages" :page="page" class="mt-8" />
    </div>
  </div>
</template>

<style></style>
