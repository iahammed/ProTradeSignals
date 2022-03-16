<template>
  <div>
    <Head title="Contacts" />
		<div v-for="(plan, index) in plans" :key="index" class="container w-full p-3">
			<div class="container bg-white text-gray-800 w-full h-64 flex flex-row rounded-lg shadow-lg overflow-hidden">
				<div class="bg-cover bg-center w-1/3"></div>
					<div class="flex flex-col space-y-5 w-2/3 p-5">
						<div class="flex flex-row justify-between">
							<h1 class="text-2xl text-left text-black font-semibold">{{ plan.name }}</h1>
						</div>
						<span class="text-gray-600 font-semibold text-left">{{ plan.value }} USDT</span>
						<div class="flex flex-col space-y-2 mt-3">
							<button 
								class="bg-black text-white font-semibold rounded-lg px-3 py-2 border-2 border-transparent shadow-none transform scale-100 hover:shadow-lg hover:scale-105 transition duration-500 focus:outline-none">
								<div class="flex flex-row space-x-2 items-start mx-auto w-max">
									<svg role="img" class="w-5 fill-current text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Bitcoin icon</title><path d="M23.638 14.904c-1.602 6.43-8.113 10.34-14.542 8.736C2.67 22.05-1.244 15.525.362 9.105 1.962 2.67 8.475-1.243 14.9.358c6.43 1.605 10.342 8.115 8.738 14.548v-.002zm-6.35-4.613c.24-1.59-.974-2.45-2.64-3.03l.54-2.153-1.315-.33-.525 2.107c-.345-.087-.705-.167-1.064-.25l.526-2.127-1.32-.33-.54 2.165c-.285-.067-.565-.132-.84-.2l-1.815-.45-.35 1.407s.975.225.955.236c.535.136.63.486.615.766l-1.477 5.92c-.075.166-.24.406-.614.314.015.02-.96-.24-.96-.24l-.66 1.51 1.71.426.93.242-.54 2.19 1.32.327.54-2.17c.36.1.705.19 1.05.273l-.51 2.154 1.32.33.545-2.19c2.24.427 3.93.257 4.64-1.774.57-1.637-.03-2.58-1.217-3.196.854-.193 1.5-.76 1.68-1.93h.01zm-3.01 4.22c-.404 1.64-3.157.75-4.05.53l.72-2.9c.896.23 3.757.67 3.33 2.37zm.41-4.24c-.37 1.49-2.662.735-3.405.55l.654-2.64c.744.18 3.137.524 2.75 2.084v.006z"/></svg>
										<span class="text-sm">Pay by BTC</span> 
								</div>
							</button>
						</div>
							<!-- <span class="text-gray-500 text-left font-semibold">Plus $20 Software Fees</span> -->
					</div>
			</div>
		</div>
  </div>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'

export default {
  components: {
    Head,
  },
  layout: Layout,
  props: {
    plans: Object
  },
  data() {
    return {
    }
  },
  watch: {

  },
  methods: {

  },
}
</script>
