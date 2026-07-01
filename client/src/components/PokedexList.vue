<script lang="ts" setup>
import { h } from 'vue'
import { capitalize } from '../utils'
import { NDataTable } from 'naive-ui'
import type { DataTableColumns } from 'naive-ui'
import type { PokedexRow } from '../types/pokedexRow'
import type { ListPage } from '@/types/listPage'
import PokemonTypeIcon from './PokemonTypeIcon.vue'

defineProps<{ pokedexList: ListPage | null }>()

const columns: DataTableColumns<PokedexRow> = [
  {
    title: '#',
    key: 'pokedexNumber',
  },
  {
    title: 'Sprite',
    key: 'sprite',
    render(row) {
      return h('img', {
        src: row.sprite.url,
        alt: row.name,
        style: 'width: 64px;',
      })
    },
  },
  {
    title: 'Name',
    key: 'name',
    render(row) {
      return h('span', { style: 'font-size: 1rem; font-weight: bold;' }, capitalize(row.name))
    },
  },
  {
    title: 'Types',
    key: 'types',
    render(row) {
      return h(
        'div',
        { style: 'display: flex; gap: 0.5rem;' },
        row.types.map((type) => h(PokemonTypeIcon, { type })),
      )
    },
  },
]
</script>

<template>
  <div class="table-container">
    <n-data-table v-if="pokedexList" :columns="columns" :data="pokedexList?.rows ?? []"
      :rowKey="(row) => row.pokedexNumber" :bordered="false">
    </n-data-table>
  </div>
</template>

<style>
.table-container {
  width: 900px;
  margin: 0 auto;
}
</style>
