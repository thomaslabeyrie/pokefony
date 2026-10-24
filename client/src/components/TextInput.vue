<script setup lang="ts">
const model = defineModel<string>()

const { name, type, label, error } = defineProps<{
  name: string
  type: 'text' | 'password'
  label: string
  error: string | undefined
}>()
</script>

<template>
  <div class="flex flex-col gap-2">
    <label :for="name" class="text-neutral-100">{{ label }}</label>
    <input
      v-model="model"
      :type
      :name
      :id="name"
      class="m-auto h-12 w-full rounded-xl px-4 py-2 outline outline-neutral-700 transition-colors focus-within:outline-neutral-400"
      :class="error ? 'outline-red-400' : ''"
    />

    <div v-if="error" class="text-red-400">
      {{ error }}
    </div>
  </div>
</template>
