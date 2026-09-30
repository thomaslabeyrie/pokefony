<script setup lang="ts">
import { RouterView } from 'vue-router'
import { darkTheme, NConfigProvider, NLayout } from 'naive-ui'
</script>

<template>
  <n-config-provider :theme="darkTheme">
    <n-layout style="min-height: 100vh; display: flex; justify-content: center">
      <div class="main-container">
        <RouterView />
      </div>
    </n-layout>
  </n-config-provider>
</template>

<style>
.main-container {
  /* border: 1px solid gray; */
  max-width: 60vw;
  margin: 3rem 0;
}
</style>
