<script setup lang="ts">
import { ref, onMounted } from 'vue'

import type { Species } from '@/types/Species'
import { typeColorMap } from '@/types/TypeColor'
import { getSpecies } from '@/services/requester'
import StatsTable from '@/components/StatsTable.vue'
import DamageRelationsTable from '@/components/DamageRelationsTable.vue'
import SpeciesDetailsTable from '@/components/SpeciesDetailsTable.vue'
import { toUcFirst } from '@/utils'

const props = defineProps<{
  name: string
}>()

const species = ref<Species | null>(null)

onMounted(async () => {
  species.value = await getSpecies(props.name)
})
</script>

<template>
  <div class="grid grid-cols-6 gap-6 py-6 w-3/5 m-auto">
    <!-- Sprite -->
    <div class="col-span-2 rounded-box bg-base-200">
      <div class="p-6">
        <div v-if="!species" class="skeleton h-50"></div>
        <img v-else :src="species.spriteUrl" :alt="species.name" class="mx-auto block" />
      </div>
      <div class="border-t border-base-300 px-6 py-4">
        <template v-if="!species">
          <div class="skeleton mb-2 h-4 w-1/2"></div>
          <div class="skeleton mb-2 h-3 w-1/3"></div>
          <div class="skeleton h-5 w-2/3 rounded-full"></div>
        </template>
        <template v-else>
          <h3 class="text-xl font-bold">
            {{ toUcFirst(species.name) }}
            <span class="text-base-content/60">#{{ species.id }}</span>
          </h3>
          <h6 class="font-light text-base-content/70">{{ species.genus }}</h6>
          <div class="mt-2 flex flex-wrap gap-1">
            <span
              v-for="type in species.types"
              :key="type"
              class="rounded-full px-3 py-1 text-xs font-bold"
              :style="{
                backgroundColor: typeColorMap[type].color,
                color: typeColorMap[type].textColor,
              }"
            >
              {{ type.toUpperCase() }}
            </span>
          </div>
        </template>
      </div>
    </div>

    <!-- Species Details -->
    <div class="col-span-4 rounded-box bg-base-200">
      <div class="border-b border-base-300 px-6 py-4">
        <h5 class="font-semibold">Species Details</h5>
      </div>
      <div class="p-6">
        <div v-if="!species" class="skeleton h-4 w-1/2"></div>
        <SpeciesDetailsTable
          v-else
          v-bind="{
            height: species.height,
            weight: species.weight,
            genderRate: species.genderRate,
            growthRate: species.growthRate,
            baseExperience: species.baseExperience,
            captureRate: species.captureRate,
            baseHappiness: species.baseHappiness,
            flavorText: species.flavorText,
            eggGroups: species.eggGroups,
            abilities: species.abilities.map((a) => a.name),
          }"
        />
      </div>
    </div>

    <!-- Stats -->
    <div class="col-span-6 rounded-box bg-base-200">
      <div class="border-b border-base-300 px-6 py-4">
        <h5 class="font-semibold">Stats</h5>
      </div>
      <div class="p-6">
        <div v-if="!species" class="skeleton h-4 w-1/2"></div>
        <StatsTable v-else :stats="species.stats" />
      </div>
    </div>

    <!-- Type effectiveness -->
    <div class="col-span-6 rounded-box bg-base-200">
      <div class="border-b border-base-300 px-6 py-4">
        <h5 class="font-semibold">Type effectiveness</h5>
      </div>
      <div class="p-6">
        <div v-if="!species" class="skeleton h-4 w-1/2"></div>
        <DamageRelationsTable v-else :relations="species.damageRelations" />
      </div>
    </div>
  </div>
</template>
