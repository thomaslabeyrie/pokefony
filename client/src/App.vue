<script setup lang="ts">
import { RouterView } from 'vue-router'
import { darkTheme, NConfigProvider, NLayout } from 'naive-ui'
</script>

<template>
  <n-config-provider :theme="darkTheme">
    <n-layout style="min-height: 100vh; display: flex; justify-content: center">
      <div class="mx-6 max-h-3/4">
        <RouterView />
      </div>
    </n-layout>
  </n-config-provider>
</template>
