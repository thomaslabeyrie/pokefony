<script setup lang="ts">
import { ref, onMounted } from 'vue'

import type { Species } from '@/types/species'
import { typeColorMap } from '@/types/typeColor'
import { getSpecies } from '@/components/requester'
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
  <div class="grid grid-cols-6 gap-6 py-6">
    <!-- Sprite -->
    <div class="col-span-2 rounded-xl bg-neutral-800">
      <div class="p-6">
        <div v-if="!species" class="h-[200px] animate-pulse rounded-xl bg-neutral-700"></div>
        <img v-else :src="species.sprite.url" :alt="species.name" class="mx-auto block" />
      </div>
      <div class="border-t border-neutral-700 px-6 py-4">
        <template v-if="!species">
          <div class="mb-2 h-4 w-1/2 animate-pulse rounded bg-neutral-700"></div>
          <div class="mb-2 h-3 w-1/3 animate-pulse rounded bg-neutral-700"></div>
          <div class="h-5 w-2/3 animate-pulse rounded-full bg-neutral-700"></div>
        </template>
        <template v-else>
          <h3 class="text-xl font-bold">
            {{ toUcFirst(species.name) }}
            <span class="text-neutral-500">#{{ species.id }}</span>
          </h3>
          <h6 class="font-light text-neutral-400">{{ species.genus }}</h6>
          <div class="mt-2 flex flex-wrap gap-1">
            <span
              v-for="type in species.types"
              :key="type"
              class="rounded-full px-3 py-1 text-xs font-bold"
              :style="{ backgroundColor: typeColorMap[type].color, color: typeColorMap[type].textColor }"
            >
              {{ type.toUpperCase() }}
            </span>
          </div>
        </template>
      </div>
    </div>

    <!-- Species Details -->
    <div class="col-span-4 rounded-xl bg-neutral-800">
      <div class="border-b border-neutral-700 px-6 py-4">
        <h5 class="font-semibold">Species Details</h5>
      </div>
      <div class="p-6">
        <div v-if="!species" class="h-4 w-1/2 animate-pulse rounded bg-neutral-700"></div>
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
            flavorText: species.flavorText.flavorText,
            eggGroups: species.eggGroups,
            abilities: species.abilities.map((a) => a.name),
          }"
        />
      </div>
    </div>

    <!-- Stats -->
    <div class="col-span-6 rounded-xl bg-neutral-800">
      <div class="border-b border-neutral-700 px-6 py-4">
        <h5 class="font-semibold">Stats</h5>
      </div>
      <div class="p-6">
        <div v-if="!species" class="h-4 w-1/2 animate-pulse rounded bg-neutral-700"></div>
        <StatsTable v-else :stats="species.stats" />
      </div>
    </div>

    <!-- Type effectiveness -->
    <div class="col-span-6 rounded-xl bg-neutral-800">
      <div class="border-b border-neutral-700 px-6 py-4">
        <h5 class="font-semibold">Type effectiveness</h5>
      </div>
      <div class="p-6">
        <div v-if="!species" class="h-4 w-1/2 animate-pulse rounded bg-neutral-700"></div>
        <DamageRelationsTable v-else :relations="species.damageRelations" />
      </div>
    </div>
  </div>
</template>
