<script setup lang="ts">
import CustomCombobox from '@/components/CustomCombobox.vue'
import BaseInput from './BaseInput.vue'
import { computed, onMounted, watch } from 'vue'
import useFetch from '@/composables/fetch'
import { getPokedex, getPokemon } from '@/services/requester'

const selectedSpecies = defineModel<string | null>('species', { required: true })

const {
  execute: loadPokedex,
  loading: pokedexLoading,
  error: pokedexError,
  data: pokedexData,
} = useFetch(getPokedex)

const pokemon = useFetch(getPokemon)

const species = computed(() => pokedexData.value?.map((entry) => entry.name) ?? null)

onMounted(async () => loadPokedex('national'))

watch(
  selectedSpecies,
  (name) => {
    if (name) pokemon.execute(name)
  },
  { immediate: true },
)

// Fetch needed:
// Stats
// Forms ?
// Moves

// Hard coded:
// Natures
// IVs
// EVs
</script>

<template>
  <div v-if="pokedexLoading">Loading</div>
  <div v-else-if="pokedexError">Error</div>
  <form v-else-if="species" action="">
    <div class="flex flex-col gap-4">
      <CustomCombobox v-model="selectedSpecies" label="Species" :options="species" />
      <BaseInput name="nickname" type="text" label="Nickname" />
    </div>
  </form>
</template>
