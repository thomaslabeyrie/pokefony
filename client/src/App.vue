<script setup lang="ts">
import { RouterView } from 'vue-router'
import { darkTheme, NConfigProvider, NLayout } from 'naive-ui'
</script>

<template>
  <n-config-provider :theme="darkTheme">
    <n-layout style="min-height: 100vh">
      <RouterView />
    </n-layout>
  </n-config-provider>
</template>
