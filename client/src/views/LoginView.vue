<script setup lang="ts">
import { ref, computed } from 'vue'
import { login } from '@/components/requester'
import TextInput from '@/components/TextInput.vue'
import useFetch from '@/composables/fetch'
import { useRouter } from 'vue-router'
import { fieldErrorsOf, generalErrorOf } from '@/errors/errors'

const router = useRouter()

const email = ref('')
const password = ref('')

const { execute, data, loading, error } = useFetch(login)

const fieldErrors = computed(() => fieldErrorsOf(error.value))
const generalError = computed(() => generalErrorOf(error.value))

async function handleLogin() {
  const result = await execute({ username: email.value, password: password.value })
  if (result) router.push({ name: 'home' })
}
</script>

<template>
  <form @submit.prevent="handleLogin" class="m-auto mt-16 flex w-1/3 flex-col gap-8">
    <TextInput
      v-model="email"
      type="text"
      name="email"
      label="Email"
      :error="fieldErrors['email']"
    />

    <TextInput
      v-model="password"
      type="password"
      name="password"
      label="Password"
      :error="fieldErrors['password']"
    />

    <div
      v-if="generalError"
      class="w-full rounded-lg bg-red-950 px-4 py-2 text-center text-red-400"
    >
      {{ generalError }}
    </div>

    <button
      type="submit"
      :disabled="loading"
      class="transition-200 h-12 cursor-pointer rounded-xl bg-neutral-700 px-6 py-2 transition-colors duration-150 hover:bg-neutral-200 hover:text-neutral-900"
    >
    Login
    </button>
  </form>
</template>
