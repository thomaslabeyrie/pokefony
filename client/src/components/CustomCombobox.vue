<script setup lang="ts">
import { ref, computed, watchEffect, watch } from 'vue'
import {
  Combobox,
  ComboboxLabel,
  ComboboxButton,
  ComboboxInput,
  ComboboxOptions,
  ComboboxOption,
  TransitionRoot,
} from '@headlessui/vue'
import { toUcFirst } from '@/utils'
import { CheckIcon, ChevronUpDownIcon } from '@heroicons/vue/20/solid'

const props = defineProps<{
  label: string
  options: string[]
}>()

const selectedOption = defineModel<string | null>({ required: true })

const query = ref('')
const filteredOptions = computed(() => {
  return query.value === ''
    ? props.options
    : props.options.filter((option) => option.toLowerCase().includes(query.value.toLowerCase()))
})
</script>

<template>
  <div class="flex flex-col gap-2">
    <Combobox v-model="selectedOption">
      <ComboboxLabel> {{ props.label }} </ComboboxLabel>
      <div class="relative">
        <div class="input h-12 w-full pr-2">
          <ComboboxInput
            id="species"
            class="grow"
            :displayValue="(option) => option ? toUcFirst(option as string) : ''"
            @change="query = $event.target.value"
          />
          <ComboboxButton class="flex cursor-pointer items-center">
            <ChevronUpDownIcon class="text-base-content/50 h-5 w-5" aria-hidden="true" />
          </ComboboxButton>
        </div>
        <TransitionRoot
          leave="transition ease-in duration-100"
          leaveFrom="opacity-100"
          leaveTo="opacity-0"
          @after-leave="query = ''"
        >
          <ComboboxOptions
            class="rounded-field bg-base-100 border-base-content/20 absolute z-10 mt-1 max-h-40 w-full overflow-auto border-(length:--border) py-1 text-base shadow-lg focus:outline-none sm:text-sm"
          >
            <div
              v-if="filteredOptions.length === 0 && query !== ''"
              class="text-base-content/70 relative cursor-default px-4 py-2 select-none"
            >
              Nothing found.
            </div>

            <ComboboxOption
              v-for="option in filteredOptions"
              as="template"
              :key="option"
              :value="option"
              v-slot="{ selected, active }"
            >
              <li
                class="relative cursor-default py-2 pr-4 pl-10 select-none"
                :class="{
                  'bg-primary text-primary-content': active,
                  'text-base-content': !active,
                }"
              >
                <span
                  class="block truncate"
                  :class="{ 'font-medium': selected, 'font-normal': !selected }"
                >
                  {{ toUcFirst(option) }}
                </span>
                <span
                  v-if="selected"
                  class="absolute inset-y-0 left-0 flex items-center pl-3"
                  :class="{ 'text-primary-content': active, 'text-primary': !active }"
                >
                  <CheckIcon class="h-5 w-5" aria-hidden="true" />
                </span>
              </li>
            </ComboboxOption>
          </ComboboxOptions>
        </TransitionRoot>
      </div>
    </Combobox>
  </div>
</template>
