<script lang="ts" setup>
import { computed } from 'vue'

const props = defineProps<{ type: string }>()
const iconUrl = computed(() => {
  console.log('type prop:', props.type)
  return new URL(`../assets/types/${props.type}.svg`, import.meta.url).href
})
</script>

<template>
  <img :src="iconUrl" alt="type" class="type-icon" />
</template>

<style scoped>
.type-icon {
  width: 2rem;
  height: 2rem;
}
</style>
