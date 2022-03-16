<template>
  <div>
    <Head title="Notify" />
    <h1 class="mb-8 text-3xl font-bold">Notify </h1>
    <form class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden" @submit.prevent="notify">
      <div class="flex flex-wrap -mb-8 -mr-6 p-8">
        <label class="block text-gray-700">Currency Pair:</label>
        <select v-model="form.pair" class="form-select mt-1 w-full lg:w-1/2">
          <option :value="null" />
          <option :key="index" v-for="(pair, index) in pairs" :value="pair.id">{{ pair.name }}  </option>
        </select>
        <p @click="reset">Reset</p>
        <text-input v-model="notifyForm.price" class="pb-8 pr-6 w-full lg:w-1/2" label="Price" disabled/>
        <text-input v-model="notifyForm.tp" class="pb-8 pr-6 w-full lg:w-1/2" label="Take profit" />
        <text-input v-model="notifyForm.sl" class="pb-8 pr-6 w-full lg:w-1/2" label="Stop loss" />
        <input type="radio" v-model="notifyForm.position" value="buy">Buy
        <input type="radio" v-model="notifyForm.position" value="sale">Sale
      </div>
      <div class="flex justify-between px-10 py-4 bg-gray-100 border-t border-gray-100">
        <loading-button :loading="notifyForm.processing" :value="buy" class="px-6 py-3 text-white whitespace-nowrap text-sm font-bold leading-4 bg-indigo-600 hover:bg-orange-400 focus:bg-orange-400 rounded" type="submit">Broadcast Sgnal</loading-button>
      </div>
    </form>
    
    <h1 class="mb-8 mt-12 text-3xl font-bold">History </h1>
    <div class="bg-white rounded-md shadow overflow-x-auto">
      <table class="w-full whitespace-nowrap">
        <tr class="text-left font-bold">
          <th class="pb-4 pt-6 px-6">Date</th>
          <th class="pb-4 pt-6 px-6">Pair</th>
          <th class="pb-4 pt-6 px-6">Stop Loss</th>
          <th class="pb-4 pt-6 px-6">Take profit</th>
          <th class="pb-4 pt-6 px-6">Position</th>
        </tr>
        <tr v-for="notification in notifications.data" :key="notification.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
          <td class="border-t">
            <p class="flex items-center px-6 py-4 focus:text-indigo-500">{{ notification.message_at }}</p>
          </td>
          <td class="border-t">
            <p class="flex items-center px-6 py-4 focus:text-indigo-500">{{ notification.pair }}</p>
          </td>
          <td class="border-t">
            <p class="flex items-center px-6 py-4 focus:text-indigo-500">{{ notification.sl }}</p>
          </td>
          <td class="border-t">
            <p class="flex items-center px-6 py-4 focus:text-indigo-500">{{ notification.tp }}</p>
          </td>
          <td class="border-t">
            <p class="flex items-center px-6 py-4 focus:text-indigo-500">{{ notification.position }}</p>
          </td>
        </tr>
        <tr v-if="notifications.length === 0">
          <td class="px-6 py-4 border-t" colspan="4">No notifications found.</td>
        </tr>
      </table>
    </div>
    <pagination class="mt-6" :links="notifications.links" />
  </div>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import pickBy from 'lodash/pickBy'
import throttle from 'lodash/throttle'
import Layout from '@/Shared/Layout'
import TextInput from '@/Shared/TextInput'
import Pagination from '@/Shared/Pagination'
import mapValues from 'lodash/mapValues'
import LoadingButton from '@/Shared/LoadingButton'

export default {
  components: {
    Head,
    TextInput,
    Pagination,
    LoadingButton,
  },
  
  layout: Layout,
  props: {
    filters: Object,
    pairs: Object,
    notifications: Object,
    exchageRate: null,
  },
  data() {
    return {
      form: this.$inertia.form({
        pair: this.filters.pair,
      }),
      notifyForm: this.$inertia.form({
        pair: null,
        price: 0.00,
        tp: 0.00,
        sl: 0.00,
        position: null,
      }),
    }
  },
  watch: {
    form: {
      deep: true,
      handler: throttle(function () {
        this.$inertia.get('/notify', pickBy(this.form), 
          { 
            preserveState: true,
            onSuccess: (response) => {
              this.notifyForm.price = response.props.exchageRate.price
              this.notifyForm.tp = response.props.exchageRate.price * 1.10
              this.notifyForm.sl = response.props.exchageRate.price * 0.9
              this.notifyForm.pair = this.form.pair
            }
          }
        )
      }, 150),
    },
  },
  methods: {
    reset() {
      this.form = mapValues(this.form, () => null)
    },
    notify() {
      this.notifyForm.post('/notify')
    },
  },
}
</script>
