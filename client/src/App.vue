<script setup lang="ts">
import { onMounted, ref } from 'vue'
import { darkTheme, NCard, NConfigProvider } from 'naive-ui'
import { get } from './components/requester'
import type { Pokemon } from './types/pokemon'

const pokemon = ref<Pokemon | null>(null)

onMounted(async () => {
  pokemon.value = await get()
})
</script>

<template>
  <n-config-provider :theme="darkTheme">
    <n-card v-if="pokemon" :title="pokemon.name" size="large">
      <template #cover>
        <img :src="pokemon.sprite.url" alt="pokemon.name" style="max-width: 300px" />
      </template>

      <template #default>{{ pokemon.flavorText.flavorText }}</template>
    </n-card>

    <n-card v-else title="Loading">
      <template #default>Fetching pokemon...</template>
    </n-card>
  </n-config-provider>
</template>

<style scoped></style>
