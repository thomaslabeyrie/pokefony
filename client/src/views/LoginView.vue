<script setup lang="ts">
import { ref, computed } from 'vue'
import BaseInput from '@/components/BaseInput.vue'
import useFetch from '@/composables/fetch'
import { useRouter } from 'vue-router'
import { fieldErrorsOf, generalErrorOf } from '@/errors/errors'
import { useAuthStore } from '@/stores/authStore'

const router = useRouter()

const email = ref('')
const password = ref('')

const auth = useAuthStore()
const { execute, loading, error } = useFetch(auth.login)

const fieldErrors = computed(() => fieldErrorsOf(error.value))
const generalError = computed(() => generalErrorOf(error.value))

async function handleLogin() {
  await execute(email.value, password.value)
  if (auth.isAuthenticated) router.push({ name: 'home' })
}
</script>

<template>
  <div class="flex h-full w-full justify-center items-center">
    <form @submit.prevent="handleLogin" class="flex h-fit w-1/4 flex-col gap-8">
      <BaseInput
        v-model="email"
        type="text"
        name="email"
        label="Email"
        :error="fieldErrors['email']"
      />

      <BaseInput
        v-model="password"
        type="password"
        name="password"
        label="Password"
        :error="fieldErrors['password']"
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
        Login
      </button>
    </form>
  </div>
</template>
