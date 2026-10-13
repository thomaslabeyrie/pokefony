<script lang="ts" setup>
import { ref } from 'vue'

const props = defineProps<{
  src: string
  alt: string
}>()

const loaded = ref(false)
const error = ref(false)
</script>

<template>
  <div class="relative size-16">
    <div
      class="absolute size-16 rounded-full opacity-0 transition-opacity duration-200"
      :class="!loaded ? 'opacity-100' : 'opacity-0'"
    ></div>
    <img
      :src
      :alt
      class="absolute w-16 opacity-100 transition-opacity duration-200"
      @load="
        loaded = true
        error = false
      "
      @error="error = true"
      :class="loaded ? 'opacity-100' : 'opacity-0'"
    />
  </div>
</template>
