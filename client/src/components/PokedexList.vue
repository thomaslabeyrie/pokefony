<script lang="ts" setup>
import { toUcFirst } from '../utils'
import type { ListPage } from '@/types/listPage'
import PokemonTypeIcon from './PokemonTypeIcon.vue'
import { useRouter } from 'vue-router'

defineProps<{ pokedexList: ListPage | null }>()

const router = useRouter()
</script>

<template>
  <div class="mx-auto my-8 w-1/2">
    <table v-if="pokedexList" class="w-full table-fixed">
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
            <img :src="row.spriteUrl" :alt="row.name" class="w-16" />
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
  </div>
</template>
