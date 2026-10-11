<script setup lang="ts">
import { RouterView } from 'vue-router'
import Header from './components/Header.vue'
</script>

<template>
  <div class="flex min-h-screen flex-col bg-neutral-900 text-white">
    <Header />
    <div class="mx-6">
      <RouterView />
    </div>
  </div>
</template>
