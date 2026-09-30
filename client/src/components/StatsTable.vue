<script setup lang="ts">
import StatBar from './StatBar.vue'

interface Stat {
  name: string
  baseValue: number
}

const props = defineProps<{
  stats: Stat[]
}>()

const labels: Record<string, string> = {
  hp: 'HP',
  attack: 'Attack',
  defense: 'Defense',
  'special-attack': 'Sp. Attack',
  'special-defense': 'Sp. Defense',
  speed: 'Speed',
}
</script>

<template>
  <table class="w-full table-auto">
    <tbody class="">
      <tr v-for="stat in props.stats" :key="stat.name" class="text-left">
        <th scope="row" class="w-1/12 py-4 font-normal">
          {{ labels[stat.name] }}
        </th>

        <td class="w-1/12 text-center font-bold">{{ stat.baseValue }}</td>

        <td>
          <StatBar :value="stat.baseValue" :max="255" />
        </td>
      </tr>
    </tbody>
  </table>
</template>

<style></style>
