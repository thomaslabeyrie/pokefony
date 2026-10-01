<script lang="ts" setup>
import { h, ref } from 'vue'
import { toUcFirst } from '../utils'
import { NDataTable } from 'naive-ui'
import type { DataTableColumns, PaginationProps } from 'naive-ui'
import type { PokedexRow } from '../types/pokedexRow'
import type { ListPage } from '@/types/listPage'
import PokemonTypeIcon from './PokemonTypeIcon.vue'
import { useRouter } from 'vue-router'

defineProps<{ pokedexList: ListPage | null }>()

const router = useRouter()

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
        src: row.spriteUrl,
        alt: row.name,
        style: 'width: 64px;',
      })
    },
  },
  {
    title: 'Name',
    key: 'name',
    render(row) {
      return h('span', { style: 'font-size: 1rem; font-weight: bold;' }, toUcFirst(row.name))
    },
  },
  {
    title: 'Types',
    key: 'types',
    render(row) {
      return h(
        'div',
        { style: 'display: flex; gap: 0.5rem;' },
        Array.from(row.types).map((type) => h(PokemonTypeIcon, { type })),
      )
    },
  },
]

const pagination = ref<PaginationProps>({
  defaultPage: 1,
  defaultPageSize: 20,
  size: 'large',
})
</script>

<template>
  <div class="table-container">
    <n-data-table v-if="pokedexList" size="large" :columns="columns" :data="pokedexList?.rows ?? []"
      :rowKey="(row) => row.pokedexNumber" :bordered="false" :pagination="pagination" :rowProps="(row) => ({
          style: 'cursor: pointer;',
          onClick: () => router.push({ name: 'species', params: { name: row.name } }),
        })
        ">
    </n-data-table>
  </div>
</template>

<style>
.table-container {
  width: 900px;
  margin: 2rem auto;
}
</style>
