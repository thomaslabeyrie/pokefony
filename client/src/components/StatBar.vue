<script setup lang="ts">
defineProps<{
  value: number
  max: number
}>()
</script>

<template>
  <progress class="progress progress-info block h-4 w-full" :value :max></progress>
</template>
