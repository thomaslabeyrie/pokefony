<script setup lang="ts">
import { ref, computed } from 'vue'
import { register } from '@/services/requester'
import BaseInput from '@/components/BaseInput.vue'
import useFetch from '@/composables/fetch'
import { useRouter } from 'vue-router'
import { fieldErrorsOf, generalErrorOf } from '@/errors/errors'

const router = useRouter()

const email = ref('')
const plainPassword = ref('')

const { execute, data, loading, error } = useFetch(register)

const fieldErrors = computed(() => fieldErrorsOf(error.value))
const generalError = computed(() => generalErrorOf(error.value))

async function handleRegister() {
  const result = await execute({ email: email.value, plainPassword: plainPassword.value })
  if (result) router.push({ name: 'home' })
}
</script>

<template>
  <form @submit.prevent="handleRegister" class="m-auto mt-16 flex w-1/3 flex-col gap-8">
    <BaseInput
      v-model="email"
      type="text"
      name="email"
      label="Email"
      :error="fieldErrors['email']"
    />

    <BaseInput
      v-model="plainPassword"
      type="password"
      name="password"
      label="Password"
      :error="fieldErrors['plainPassword']"
    />

    <div
      v-if="generalError"
      class="alert alert-error alert-soft justify-center"
    >
      {{ generalError }}
    </div>

    <button
      type="submit"
      :disabled="loading"
      class="btn btn-primary h-12"
    >
      Register
    </button>
  </form>
</template>
