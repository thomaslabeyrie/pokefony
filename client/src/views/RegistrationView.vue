<script setup lang="ts">
import { ref } from 'vue'
import type { Ref } from 'vue'
import { register } from '@/components/requester'
import TextInput from '@/components/TextInput.vue'
import { ApiError, NetworkError, UnprocessableEntityError } from '@/errors/errors'

const email = ref('')
const plainPassword = ref('')
const loading = ref(false)
const fieldErrors: Ref<Record<string, string>> = ref({})
const generalErrors: Ref<any[]> = ref([])

async function handleRegister() {
  fieldErrors.value = {}
  generalErrors.value = []

  loading.value = true
  let response

  try {
    response = await register({ email: email.value, plainPassword: plainPassword.value })
  } catch (error) {
    if (error instanceof NetworkError) {
      generalErrors.value.push({ message: error.message })
    } else if (error instanceof UnprocessableEntityError) {
      for (const violation of error.violations) {
        fieldErrors.value[violation.propertyPath] = violation.title
      }
    } else if (error instanceof ApiError) {
      generalErrors.value.push({ message: error.message })
    }
  }

  loading.value = false
}
</script>

<template>
  <form @submit.prevent="handleRegister" class="m-auto mt-16 flex w-1/3 flex-col gap-8">
    <TextInput
      v-model="email"
      type="text"
      name="email"
      label="Email"
      :error="fieldErrors['email']"
    />

    <TextInput
      v-model="plainPassword"
      type="password"
      name="password"
      label="Password"
      :error="fieldErrors['plainPassword']"
    />

    <div v-for="error of generalErrors" class="text-red-400">
      {{ error.message }}
    </div>

    <button
      type="submit"
      :disabled="loading"
      class="transition-200 h-12 cursor-pointer rounded-xl bg-neutral-700 px-6 py-2 transition-colors duration-100 hover:bg-neutral-200 hover:text-neutral-900"
    >
      Register
    </button>
  </form>
</template>
