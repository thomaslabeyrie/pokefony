<script setup lang="ts">
import { onMounted, ref } from 'vue'
import { darkTheme, NConfigProvider, NLayout } from 'naive-ui'
import { getPokedexList, getPokemon } from './components/requester'
import type { Pokemon } from './types/pokemon'
import type { ListPage } from './types/listPage'
import PokedexList from './components/PokedexList.vue'

const pokemon = ref<Pokemon | null>(null)
const pokedexList = ref<ListPage | null>(null)

onMounted(async () => {
  pokemon.value = await getPokemon('charizard')
  pokedexList.value = await getPokedexList('national', 1)
})
</script>

<template>
  <n-config-provider :theme="darkTheme">
    <n-layout style="min-height: 100vh">
      <PokedexList v-if="pokedexList" :pokedexList />
    </n-layout>
  </n-config-provider>
</template>
