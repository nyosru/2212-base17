<template>
  <div class="container my-3 px-6 mx-auto">
    <section class="mb-32 text-gray-800 text-center">
      <div v-if="errored === true">...</div>
      <div v-else>
        <h2 class="text-1xl font-bold mb-1 pb-1 text-center">
          Кадастровые новости
        </h2>

        <div v-if="loading === true">.. загрузка ..</div>
        <div v-else>
          <h2 class="text-3xl">{{ item.head }}</h2>
          <p>{{ item.date }}</p>
          <div class="text-left">
            <img
              :src=" (
          item.img && item.img.length > 0
                    ? item.img
                    : 'https://mdbcdn.b-cdn.net/img/new/standard/city/0' +
                      randomInteger(10, 99) +
                      '.webp' )"
              style="float: left; max-width: 30vw;"
              class="mr-3"
            />
            <span v-html="item.opis"></span>
          </div>
          <!-- item: {{ item }} -->
          <br />
          <!-- breadcrSteps: {{ breadcrSteps }} -->
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import axios from 'axios'
import { useRoute } from 'vue-router'

import Breadc from './../../use/Breadcrumbs.js'



import FnNumeric from './../../use/FnNumeric'
const { randomInteger } = FnNumeric()

const {
  steps: breadcrSteps,
  // breadcrumbsClean,
  breadcrumbsAddStep,
  breadcrumbsCreate,
} = Breadc()

breadcrumbsCreate([
  { nameLink: 'Земельный кадастр', to: '/', active: false },
  { nameLink: 'Новости', to: '/news/', active: false },
  // { nameLink: 'Новости2', to: '/news/77', active: true },
])

const route = useRoute()

// console.log('$attrs',$attrs);
console.log('route.params.id', route.params.key)
// console.log('this $route',this.$route);
// console.log('this $route',this.$router);
// console.log('$router',$router);

// import NewsItemComponent from './10NewsItemComponent.vue'

// let $news = [
//   {
//     name: 'Стойка',
//     date: '2022-05-15',
//     type: 'youtube',
//     link: 'OvA-01Nak6Y',
//     opis: 'Первый выпуск видео школы игры в бильярд, стойка!',
//   },
// ]

// const props = defineProps({
//   id: Number
// })

const item = ref({})
const loading = ref(true)
const errored = ref(false)

axios
  .get('//' + window.location.host + '/api/zemk/news/' + route.params.key)
  .then((response) => {
    if (response.status == 200) {
      item.value = response.data.data
      loading.value = false
    } else {
      errored.value = true
    }
  })

</script>

<style scoped>
@media (min-width: 992px) {
  .rotate-lg-6 {
    transform: rotate(3deg);
  }
}
</style>
