<script setup lang="ts">
import { computed } from 'vue'

const props = defineProps<{
  value: number
  max: number
}>()

const valueAsPercentage = computed(() => Math.min((props.value / props.max) * 100, 100))
</script>

<template>
  <div class="relative h-4 w-full overflow-hidden rounded-xl">
    <!-- Backdrop -->
    <div class="absolute inset-0 w-full bg-blue-400 opacity-25"></div>

    <!-- Fill -->
    <div class="relative h-full rounded-xl bg-blue-400" :style="{ width: valueAsPercentage + '%' }"></div>
  </div>
</template>
