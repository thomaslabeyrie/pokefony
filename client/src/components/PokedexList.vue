<script lang="ts" setup>
import { toUcFirst } from '../utils'
import type { ListPage } from '@/types/listPage'
import PokemonTypeIcon from './PokemonTypeIcon.vue'
import { useRouter } from 'vue-router'

defineProps<{ pokedexList: ListPage | null }>()

const router = useRouter()
</script>

<template>
  <div class="mx-auto my-8 w-[900px]">
    <table v-if="pokedexList" class="w-full">
      <thead>
        <tr class="border-b border-neutral-700 text-left text-sm text-neutral-400">
          <th class="pb-3 pr-4 font-medium">#</th>
          <th class="pb-3 pr-4 font-medium">Sprite</th>
          <th class="pb-3 pr-4 font-medium">Name</th>
          <th class="pb-3 font-medium">Types</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-neutral-800">
        <tr
          v-for="row in pokedexList.rows"
          :key="row.pokedexNumber"
          class="cursor-pointer hover:bg-neutral-800"
          @click="router.push({ name: 'species', params: { name: row.name } })"
        >
          <td class="py-3 pr-4 text-neutral-400">{{ row.pokedexNumber }}</td>
          <td class="py-3 pr-4">
            <img :src="row.spriteUrl" :alt="row.name" class="w-16" />
          </td>
          <td class="py-3 pr-4 font-bold">{{ toUcFirst(row.name) }}</td>
          <td class="py-3">
            <div class="flex gap-2">
              <PokemonTypeIcon v-for="type in row.types" :key="type" :type />
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
