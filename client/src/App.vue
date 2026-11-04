<script setup lang="ts">
import { RouterView } from 'vue-router'
import Header from './components/Header.vue'
import Sidebar from './components/Sidebar.vue'
</script>

<template>
  <div class="flex h-dvh flex-col bg-neutral-900 text-white">
    <div class="flex min-h-0 flex-1">
      <Sidebar />
      <main class="flex-1 overflow-y-auto">
        <RouterView />
      </main>
    </div>
  </div>
</template>
