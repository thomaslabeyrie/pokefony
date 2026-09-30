<script lang="ts" setup>
import { computed } from 'vue'

const props = defineProps<{ type: string }>()
const iconUrl = computed(() => {
  return new URL(`../assets/types/${props.type}.svg`, import.meta.url).href
})
</script>

<template>
  <img :src="iconUrl" alt="type" class="h-8 w-8" />
</template>
