<template>
  <Head title="Register" />
  <div class="flex items-center justify-center p-6 min-h-screen bg-indigo-800">
    <div class="w-full max-w-prose">
      <logo class="block mx-auto w-full max-w-xs fill-white" height="50" />
      <form class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden" @submit.prevent="register">
        <div class="flex flex-wrap -mb-8 -mr-6 p-8">
          <text-input v-model="form.first_name" :error="form.errors.first_name" class="pb-8 pr-6 w-full lg:w-1/2" label="First name" />
          <text-input v-model="form.last_name" :error="form.errors.last_name" class="pb-8 pr-6 w-full lg:w-1/2" label="Last name" />
          <date-input v-model="form.dob" :error="form.errors.dob" class="pb-8 pr-6 w-full lg:w-1/2" label="Date of birth" />
          <text-input v-model="form.address" :error="form.errors.address" class="pb-8 pr-6 w-full lg:w-1/2" label="Address" />
          <text-input v-model="form.city" :error="form.errors.city" class="pb-8 pr-6 w-full lg:w-1/2" label="City" />
          <text-input v-model="form.region" :error="form.errors.region" class="pb-8 pr-6 w-full lg:w-1/2" label="Province/State" />
          <text-input v-model="form.postal_code" :error="form.errors.postal_code" class="pb-8 pr-6 w-full lg:w-1/2" label="Postal code" />
          <select-input v-model="form.country" :error="form.errors.country" class="pb-8 pr-6 w-full lg:w-1/2" label="Country">
            <option :value="null" />
            <option v-for="(country, index) in countries" :value="index" :key="index">{{ country.name }}</option>
          </select-input>
          <text-input v-model="form.phone" :error="form.errors.phone" class="pb-8 pr-6 w-full lg:w-1/2" label="Phone" />
          <text-input v-model="form.email" :error="form.errors.email" class="pb-8 pr-6 w-full lg:w-1/2" label="Email" />
          <text-input v-model="form.password" :error="form.errors.password" class="pb-8 pr-6 w-full lg:w-1/2" label="Password" type="password" />
          <text-input v-model="form.password_confirm" :error="form.errors.password" class="pb-8 pr-6 w-full lg:w-1/2" label="Password Confirm" type="password" />
        </div>
        <div class="flex px-10 py-4 bg-gray-100 border-t border-gray-100">
          <Link class="block px-6 py-2" href="/login">Already registered</Link>
          <loading-button :loading="form.processing" class="btn-indigo" type="submit">Create Account</loading-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import Logo from '@/Shared/Logo'
import TextInput from '@/Shared/TextInput'
import SelectInput from '@/Shared/SelectInput'
import LoadingButton from '@/Shared/LoadingButton'
import DateInput from '@/Shared/DateInput'

export default {
  components: {
    Head,
    Link,
    LoadingButton,
    Logo,
    SelectInput,
    TextInput,
    DateInput,
  },
  props: {
    countries: Object,
  },
  data() {
    return {
      form: this.$inertia.form({
        first_name: 'Iftakher',
        last_name: 'Ahammed',
        dob: null,
        address: '11 Valentines Road',
        city: 'London',
        region: 'Essex',
        country: '238',
        postal_code: 'IG1 4RZ',
        phone: '07707492700',
        email: 'iahammed@gmail.com',
        password: 'secret',
        password_confirm: 'secret',
        remember: false,
      }),
    }
  },
  methods: {
    register() {
      this.form.post('/register')
    },
  },
}
</script>
