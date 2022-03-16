<template>
  <div>
    <Head title="Contacts" />
    <QRCodeVue3 value="Iftakher Ahammed" :dotsOptions="{type: 'rounded' ,color: '#26249a' }" />
    <!-- <QRCodeVue3
      :width="200"
      :height="200"
      value="https://scholtz.sk"
      :qrOptions="{ typeNumber: 0, mode: 'Byte', errorCorrectionLevel: 'H' }"
      :imageOptions="{ hideBackgroundDots: true, imageSize: 0.4, margin: 0 }"
      :dotsOptions="{
        type: 'rounded',
        color: '#26249a',
        gradient: {
          type: 'linear',
          rotation: 0,
          colorStops: [
            { offset: 0, color: '#26249a' },
            { offset: 1, color: '#26249a' },
           ],
        },
      }"
      :backgroundOptions="{ color: '#ffffff' }"
      :cornersSquareOptions="{ type: 'dot', color: '#000000' }"
      :cornersDotOptions="{ type: undefined, color: '#000000' }"
      fileExt="png"
      :download="true"
      myclass="my-qur"
      imgclass="img-qr"
      downloadButton="my-button"
      :downloadOptions="{ name: 'vqr', extension: 'png' }"
    /> -->
  </div>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'
import QRCodeVue3 from 'qrcode-vue3'

export default {
  components: {
    Head,
    QRCodeVue3
  },
  layout: Layout,
  props: {
    
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
