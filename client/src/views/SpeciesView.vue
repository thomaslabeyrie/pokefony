<script setup lang="ts">
import { ref, computed, onMounted } from 'vue'
import {
  NGridItem,
  NGrid,
  NDescriptions,
  NDescriptionsItem,
  NSpace,
  NSkeleton,
  NTag,
  NCard,
} from 'naive-ui'

import type { Species } from '@/types/species'
import { typeColorMap } from '@/types/typeColor'
import { getSpecies } from '@/components/requester'
import StatsTable from '@/components/StatsTable.vue'
import DamageRelationsTable from '@/components/DamageRelationsTable.vue'
import { byteToPercent, toUcFirst, arrayToUcFirst } from '@/utils'

const props = defineProps<{
  name: string
}>()

const species = ref<Species | null>(null)

const genders = computed(() => {
  if (!species.value) return

  const female = species.value.genderRate * (100 / 8)
  const male = 100 - female

  return { female, male }
})

onMounted(async () => {
  species.value = await getSpecies(props.name)
})
</script>

<template>
  <n-grid :xGap="24" :yGap="24" :cols="6">
    <!-- Sprite -->
    <n-grid-item :span="2">
      <n-card>
        <template #cover>
          <n-skeleton v-if="!species" height="300px" width="100%" round animated></n-skeleton>
          <template v-else>
            <div class="img-container"><img :src="species.sprite.url" :alt="species.name" /></div>
          </template>
        </template>

        <template #header>
          <n-skeleton v-if="!species" text width="50%" :repeat="3" round animated></n-skeleton>
          <template v-else>
            <h3>
              {{ toUcFirst(species.name) }}
              <span class="species-id">#{{ species.id }}</span>
            </h3>

            <h6>{{ species.genus }}</h6>

            <n-space size="small">
              <n-tag v-for="type in species.types" round strong size="small" :color="typeColorMap[type]"
                :bordered="false">
                {{ type.toUpperCase() }}
              </n-tag>
            </n-space>
          </template>
        </template>
      </n-card>
    </n-grid-item>

    <!-- Species Details -->
    <n-grid-item :span="4">
      <n-card>
        <template #header>
          <h5>Species Details</h5>
        </template>

        <n-skeleton v-if="!species" text width="50%" round animated></n-skeleton>

        <n-descriptions v-else size="medium" labelPlacement="left" :columns="1" separator=""
          :labelStyle="{ display: 'inline-block', width: '40%', height: '100%' }"
          :contentStyle="{ display: 'inline-block', width: '60%', fontWeight: 'bold' }">
          <n-descriptions-item label="Height"> {{ species.height / 10 }}m </n-descriptions-item>

          <n-descriptions-item label="Weight"> {{ species.weight / 10 }}kg </n-descriptions-item>

          <n-descriptions-item label="Growth Rate">
            {{ toUcFirst(species.growthRate) }}
          </n-descriptions-item>

          <n-descriptions-item label="Gender Rate">
            <span class="gender female">{{ genders?.female }}</span> /
            <span class="gender male">{{ genders?.male }}</span>
          </n-descriptions-item>

          <n-descriptions-item label="Base XP">
            {{ species.baseExperience }}xp
          </n-descriptions-item>

          <n-descriptions-item label="Capture Rate">
            {{ byteToPercent(species.captureRate) }}%
          </n-descriptions-item>

          <n-descriptions-item label="Base Happiness">
            {{ byteToPercent(species.baseHappiness) }}%
          </n-descriptions-item>

          <n-descriptions-item label="Abilities">
            <n-space size="small">
              <n-tag v-for="ability in species.abilities" round size="small" :bordered="false">
                {{ toUcFirst(ability.name, ' ') }}
              </n-tag>
            </n-space>
          </n-descriptions-item>

          <n-descriptions-item label="Egg Groups">
            {{ arrayToUcFirst(species.eggGroups, ', ') }}
          </n-descriptions-item>

          <n-descriptions-item label="Flavor Text">
            {{ species.flavorText.flavorText }}
          </n-descriptions-item>
        </n-descriptions>
      </n-card>
    </n-grid-item>

    <!-- Stats -->
    <n-grid-item span="6">
      <n-card>
        <template #header>
          <h5>Stats</h5>
        </template>

        <n-skeleton v-if="!species" text width="50%" round animated></n-skeleton>

        <StatsTable v-else :stats="species.stats" />
      </n-card>
    </n-grid-item>

    <!-- Type effectiveness -->
    <n-grid-item span="6">
      <n-card>
        <template #header>
          <h5>Type effectiveness</h5>
        </template>

        <n-skeleton v-if="!species" text width="50%" round animated></n-skeleton>

        <DamageRelationsTable v-else :relations="species.damageRelations" />
      </n-card>
    </n-grid-item>
  </n-grid>
</template>

<style scoped>
.species-id {
  color: grey;
}

.img-container {
  margin: 2rem;
}

.gender {
  font-weight: bold;
}

.female {
  color: HotPink;
}

.male {
  color: CornflowerBlue;
}
</style>
