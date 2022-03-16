<template>
  <div :class="$attrs.class">
    <label v-if="label" class="form-label" :for="id">{{ label }}:</label>
    <Datepicker :format="format" v-model="selected" v-bind="{ ...$attrs, class: null }" :class="{ error: error }" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" />
    <div v-if="error" class="form-error">{{ error }}</div>
  </div>
</template>

<script>
import { ref } from 'vue'
//https://vue3datepicker.com/
import { v4 as uuid } from 'uuid'

import Datepicker from 'vue3-date-time-picker';
import 'vue3-date-time-picker/dist/main.css'
// Example using a custom format function
export default {
  components: { Datepicker },
  inheritAttrs: false,
  props: {
    id: {
      type: String,
      default() {
        return `text-input-${uuid()}`
      },
    },
    type: {
      type: String,
      default: 'text',
    },
    error: String,
    label: String,
    modelValue: String,
  },
  emits: ['update:modelValue'],
  data() {
    return {
      selected: this.modelValue,
    }
  },
  watch: {
    selected(selected) {
      this.$emit('update:modelValue', selected)
    },
  },
  methods: {
    focus() {
      this.$refs.input.focus()
    },
    setup() {
      const date = ref(new Date())
      // In case of a range picker, you'll receive [Date, Date]
      const format = (date) => {
        const day = date.getDate()
        const month = date.getMonth() + 1
        const year = date.getFullYear()
        return `${day}/${month}/${year}`
      }
      return { date, format }
    }
  }
}
</script>