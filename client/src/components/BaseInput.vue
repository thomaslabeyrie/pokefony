<script setup lang="ts">
const model = defineModel<string>()

const { name, type, label, error } = defineProps<{
  name: string
  type: 'text' | 'password' | 'number'
  label: string
  error?: string | undefined
}>()
</script>

<template>
  <div class="flex flex-col gap-2">
    <label :for="name" class="label text-base-content">{{ label }}</label>
    <input
      v-model="model"
      :type
      :name
      :id="name"
      class="input h-12 w-full"
      :class="{ 'input-error': error }"
    />

    <div v-if="error" class="text-error">
      {{ error }}
    </div>
  </div>
</template>
