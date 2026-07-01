<script lang="ts" setup>
import { capitalize } from '../utils'
import { NCard } from 'naive-ui'
import type { Pokemon } from '../types/pokemon'
import PokemonTypeIcon from './PokemonTypeIcon.vue'

defineProps<{ pokemon: Pokemon }>()
</script>

<template>
  <n-card v-if="pokemon" class="card" size="huge">
    <template #header>
      {{ capitalize(pokemon.name) }}
    </template>

    <template #header-extra>
      <div class="types">
        <PokemonTypeIcon v-for="type in pokemon.types" :type />
      </div>
    </template>

    <template #cover>
      <img :src="pokemon.sprite.url" alt="pokemon.name" class="cover" />
    </template>

    <template #default>{{ pokemon.flavorText.flavorText }}</template>
  </n-card>
</template>

<style scoped>
.card {
  max-width: 400px;
}

.types {
  display: flex;
  gap: 0.5rem;

  .type-label {
    font-weight: bold;
  }
}

.cover {
  display: block;
  max-width: 300px;
  margin: 0 auto;
}
</style>
