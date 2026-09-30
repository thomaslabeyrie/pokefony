<script setup lang="ts">
import type { DamageRelations } from '@/types/species'
import PokemonTypeIcon from './PokemonTypeIcon.vue'

const props = defineProps<{
  relations: DamageRelations
}>()

const labels: Record<keyof DamageRelations, { label: string; ratio: string }> = {
  immuneTo: { label: 'Immune to', ratio: '(x0)' },
  veryResistantTo: { label: 'Very resistant to', ratio: '(x0.25)' },
  resistantTo: { label: 'Resistant to', ratio: '(x0.5)' },
  neutralTo: { label: 'Neutral to', ratio: '(x1)' },
  weakTo: { label: 'Weak to', ratio: '(x2)' },
  veryWeakTo: { label: 'Very weak to', ratio: '(x4)' },
}
</script>

<template>
  <table class="w-full table-auto">
    <tbody>
      <tr v-for="(types, key) in props.relations" class="text-left">
        <th scope="row" class="w-2/12 py-4 font-normal">
          {{ labels[key].label }}
          <span class="text-gray-500">{{ labels[key].ratio }}</span>
        </th>

        <td class="flex flex-wrap gap-4 py-4">
          <PokemonTypeIcon v-for="type in types" :type />
        </td>
      </tr>
    </tbody>
  </table>
</template>
