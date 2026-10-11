<script lang="ts" setup>
import { capitalize } from '../utils'
import PokemonTypeIcon from './PokemonTypeIcon.vue'

defineProps<{ pokemon: Pokemon }>()
</script>

<template>
  <div v-if="pokemon" class="max-w-[400px] overflow-hidden rounded-xl bg-neutral-800">
    <img :src="pokemon.sprite.url" alt="pokemon.name" class="mx-auto block max-w-[300px]" />
    <div class="p-4">
      <div class="flex items-center justify-between">
        <h3 class="text-xl font-bold">{{ capitalize(pokemon.name) }}</h3>
        <div class="flex gap-2">
          <PokemonTypeIcon v-for="type in pokemon.types" :key="type" :type />
        </div>
      </div>
      <p class="mt-2 text-neutral-400">{{ pokemon.flavorText.flavorText }}</p>
    </div>
  </div>
</template>
