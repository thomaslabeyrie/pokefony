<script setup lang="ts">
import { ref, onMounted } from 'vue'

import { getPokedexList } from '@/components/requester'
import PokedexList from '@/components/PokedexList.vue'

import type { ListPage } from '@/types/listPage'

const props = defineProps<{
  region: string
}>()

const pokedexList = ref<ListPage | null>(null)

onMounted(async () => {
  pokedexList.value = await getPokedexList(props.region, 1)
})
</script>

<template>
  <PokedexList v-if="pokedexList" :pokedexList />
</template>

<style></style>
