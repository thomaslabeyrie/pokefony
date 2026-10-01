<script setup lang="ts">
import { NTag } from 'naive-ui'
import { toPercent, toUcFirst, arrayToUcFirst } from '@/utils'

const props = defineProps<{
  height: number
  weight: number
  genderRate: number
  growthRate: string
  baseExperience: number
  captureRate: number
  baseHappiness: number
  flavorText: string
  eggGroups: string[]
  abilities: string[]
}>()
</script>

<template>
  <table class="w-full table-auto">
    <tbody class="">
      <tr class="text-left">
        <th scope="row" class="w-2/12 py-4 font-normal">Height</th>
        <td>{{ props.height / 10 }}m</td>
      </tr>

      <tr class="text-left">
        <th scope="row" class="w-2/12 py-4 font-normal">Weight</th>
        <td>{{ props.weight / 10 }}kg</td>
      </tr>

      <tr class="text-left">
        <th scope="row" class="w-2/12 py-4 font-normal">Gender rate</th>
        <td>
          {{ props.genderRate }} / 12
          <span class="text-gray-500">({{ toPercent(props.genderRate, 12) }}%)</span>
        </td>
      </tr>

      <tr class="text-left">
        <th scope="row" class="w-2/12 py-4 font-normal">Growth rate</th>
        <td>{{ toUcFirst(props.growthRate) }}</td>
      </tr>

      <tr class="text-left">
        <th scope="row" class="w-2/12 py-4 font-normal">Base XP</th>
        <td>{{ props.baseExperience }}XP</td>
      </tr>

      <tr class="text-left">
        <th scope="row" class="w-2/12 py-4 font-normal">Capture rate</th>
        <td>
          {{ props.captureRate }} / 255
          <span class="text-gray-500">({{ toPercent(props.captureRate, 255) }}%)</span>
        </td>
      </tr>

      <tr class="text-left">
        <th scope="row" class="w-2/12 py-4 font-normal">Base happiness</th>
        <td>
          {{ props.baseHappiness }} / 255
          <span class="text-gray-500">({{ toPercent(props.baseHappiness, 255) }}%)</span>
        </td>
      </tr>

      <tr class="text-left">
        <th scope="row" class="w-2/12 py-4 font-normal">Egg groups</th>
        <td>{{ arrayToUcFirst(props.eggGroups, ', ') }}</td>
      </tr>

      <tr class="text-left">
        <th scope="row" class="w-2/12 py-4 font-normal">Abilities</th>
        <td>
          <div class="flex gap-2">
            <n-tag
              v-for="(ability, key) in props.abilities"
              :key
              round
              size="medium"
              :bordered="false"
              >{{ toUcFirst(ability) }}</n-tag
            >
          </div>
        </td>
      </tr>

      <tr class="text-left">
        <th scope="row" class="w-2/12 py-4 font-normal">Flavor text</th>
        <td>{{ props.flavorText }}</td>
      </tr>
    </tbody>
  </table>
</template>
