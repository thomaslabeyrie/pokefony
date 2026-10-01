<script setup lang="ts">
import { ref, onMounted } from 'vue'
import { NGridItem, NGrid, NSpace, NSkeleton, NTag, NCard } from 'naive-ui'

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

            <h6 class="font-light">{{ species.genus }}</h6>

            <n-space size="small">
              <n-tag
                v-for="type in species.types"
                round
                strong
                size="small"
                :color="typeColorMap[type]"
                :bordered="false"
              >
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
