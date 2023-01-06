<template>
  <div class="container my-3 px-6 mx-auto">
    
    <!-- 654654654 {{ page }}
    <br />
    <br />
    data_loading: {{ data_loading }}
    <br />
    <br /> -->

    <div v-if="data_loading" class="mx-auto">... идёт загрузка ...</div>
    <div v-else>
      <h2 class="text-4xl">{{ data.name }}</h2>
      <span v-html="data.html"></span>
    </div>
  </div>
</template>

<script setup>
import { ref, watchEffect } from 'vue'
import axios from 'axios'
// import ItemComponent from './10NewsListItemComponent.vue'
// import PaginationComponent from '../../comand/PaginationComponent.vue'
import { useRoute } from 'vue-router'
// // let $news = [
// //   {
// //     name: 'Стойка',
// //     date: '2022-05-15',
// //     type: 'youtube',
// //     link: 'OvA-01Nak6Y',
// //     opis: 'Первый выпуск видео школы игры в бильярд, стойка!',
// //   },
// // ]
// // v-if="news.meta.links && news.meta.links.length"
// // const news = ref({ meta: { links: [1] } })
const data = ref({})
const data_loading = ref(true)
const data_errored = ref(false)

const route = useRoute()
// // console.log('$attrs',$attrs);
const page = ref(route.params.page)
const pageLoading = ref('')
console.log('route.params.page', route.params.page)

const getData = ( loadPage = 1) => {

  if( pageLoading.value == loadPage ){
    return {}
  }

  data_loading.value = true
  pageLoading.value = loadPage

  page.value = loadPage
  axios
    .get('//' + window.location.host + '/api/zemk/page/' + loadPage)
    .then((response) => {
      if (response.status == 200) {
        data.value = response.data.data
        data_loading.value = false
      } else {
        data_errored.value = true
      }
    })
}

getData(route.params.page)

watchEffect(() => {
  //   news_loading.value = true
  getData(route.params.page)
})
</script>

<style scoped></style>
