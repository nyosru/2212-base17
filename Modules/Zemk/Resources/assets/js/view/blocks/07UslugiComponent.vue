<template>
  <div class="container my-5 px-6 mx-auto text-gray-800">
    <!-- <div class="grid md:grid-cols-2 mb-6 gap-6 xl:gap-x-12">       -->
      <!-- <template > -->
        <!-- {{ i }}
        <br />
        {{ k }}
        <br />
        <br /> -->
        <item-component v-for="(i, k) in data" :key="i.id" :i="i" :leftSide="k%2==0"/>
      <!-- </template> -->
    <!-- </div> -->
    <!-- data: {{ data }} -->
      </div>
</template>

<script setup>
import { ref } from 'vue'
import axios from 'axios'
import ItemComponent from './07UslugiItemComponent.vue'

const data = ref({})
const loading = ref(true)
const errored = ref(false)

const getData = () => {
  axios
    .get('//' + window.location.host + '/api/zemk/uslugi')
    .then((response) => {
      if (response.status == 200) {
        data.value = response.data.data
        loading.value = false
      } else {
        errored.value = true
      }
    })
}

getData()

// // watchEffect(() => {
// //   news_loading.value = true
// //   getNews(route.params.page)
// // })
</script>

<style scoped></style>
