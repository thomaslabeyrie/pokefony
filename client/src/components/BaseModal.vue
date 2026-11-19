<script setup lang="ts">
import { useTemplateRef, watchEffect } from 'vue'
import { XMarkIcon } from '@heroicons/vue/24/outline'

const open = defineModel<boolean>({ required: true })
const dialog = useTemplateRef('dialog')

watchEffect(
  () => {
    if (!dialog.value) {
      return
    }

    if (open.value && !dialog.value.open) {
      dialog.value.showModal()
    }

    if (!open.value && dialog.value.open) {
      dialog.value.close()
    }
  },
  { flush: 'post' },
)
</script>

<template>
  <dialog ref="dialog" class="modal" @close="open = false">
    <div class="modal-box max-w-1/2 min-w-300 border">
      <div class="mb-8 flex items-center justify-end">
        <form method="dialog">
          <button class="btn btn-circle btn-ghost btn-sm"><XMarkIcon class="size-6" /></button>
        </form>
      </div>
      <slot />
    </div>
    <form method="dialog" class="modal-backdrop">
      <button>close</button>
    </form>
  </dialog>
</template>
