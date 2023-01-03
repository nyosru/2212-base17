<template>
  <div class="container my-3 px-6 mx-auto">
    <section class="mb-6 mt-5 text-gray-800 text-center">
      <div v-if="news_errored === true">...</div>
      <div v-else>
        <h2 class="text-3xl font-bold mb-3 pb-5 text-center">
          Кадастровые новости
        </h2>
        <transition>
          <div style="min-height: 300px;" v-if="news_loading === true">
            <div
              class="spinner-border animate-spin inline-block w-8 h-8 border-4 rounded-full text-green-500"
              role="status"
            >
              <span class="visually-hidden">Loading...</span>
            </div>
            <br />
            .. секундочку ..
          </div>
          <template v-else>
            <div>
              <div class="grid lg:grid-cols-3 mb-6 gap-6 xl:gap-x-12">
                <template v-for="(i, k) in news.data">
                  <item-component :item="i" />
                </template>

                <div v-if="1 == 2" class="mb-6 lg:mb-0">
                  <div class="relative block bg-white rounded-lg shadow-lg">
                    <div class="flex">
                      <div
                        class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                      >
                        <img
                          xsrc="https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp"
                          src="http://placekitten.com/g/420/300"
                          class="w-full"
                        />
                        <a href="#!">
                          <div
                            class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                            style="background-color: rgba(251, 251, 251, 0.15);"
                          ></div>
                        </a>
                      </div>
                    </div>
                    <div class="p-6">
                      <h5 class="font-bold text-lg mb-3">My paradise</h5>
                      <p class="text-gray-500 mb-4">
                        <small>
                          Published
                          <u>13.01.2022</u>
                          by
                          <a href="" class="text-gray-900">Anna Maria Doe</a>
                        </small>
                      </p>
                      <p class="mb-4 pb-2">
                        Ut pretium ultricies dignissim. Sed sit amet mi eget
                        urna placerat vulputate. Ut vulputate est non quam
                        dignissim elementum. Donec a ullamcorper diam.
                      </p>
                      <a
                        href="#!"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                      >
                        Read more
                      </a>
                    </div>
                  </div>
                </div>

                <div v-if="1 == 2" class="mb-6 lg:mb-0">
                  <div class="relative block bg-white rounded-lg shadow-lg">
                    <div class="flex">
                      <div
                        class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                      >
                        <img
                          src="https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp"
                          class="w-full"
                        />
                        <a href="#!">
                          <div
                            class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                            style="background-color: rgba(251, 251, 251, 0.15);"
                          ></div>
                        </a>
                      </div>
                    </div>
                    <div class="p-6">
                      <h5 class="font-bold text-lg mb-3">Travel to Italy</h5>
                      <p class="text-gray-500 mb-4">
                        <small>
                          Published
                          <u>12.01.2022</u>
                          by
                          <a href="" class="text-gray-900">Halley Frank</a>
                        </small>
                      </p>
                      <p class="mb-4 pb-2">
                        Suspendisse in volutpat massa. Nulla facilisi. Sed
                        aliquet diam orci, nec ornare metus semper sed. Integer
                        volutpat ornare erat sit amet rutrum.
                      </p>
                      <a
                        href="#!"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                      >
                        Read more
                      </a>
                    </div>
                  </div>
                </div>

                <div v-if="1 == 2" class="mb-0">
                  <div class="relative block bg-white rounded-lg shadow-lg">
                    <div class="flex">
                      <div
                        class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                      >
                        <img
                          src="https://mdbcdn.b-cdn.net/img/new/standard/city/081.webp"
                          class="w-full"
                        />
                        <a href="#!">
                          <div
                            class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                            style="background-color: rgba(251, 251, 251, 0.15);"
                          ></div>
                        </a>
                      </div>
                    </div>
                    <div class="p-6">
                      <h5 class="font-bold text-lg mb-3">Chasing the sun</h5>
                      <p class="text-gray-500 mb-4">
                        <small>
                          Published
                          <u>10.01.2022</u>
                          by
                          <a href="" class="text-gray-900">Joe Svan</a>
                        </small>
                      </p>
                      <p class="mb-4 pb-2">
                        Curabitur tristique, mi a mollis sagittis, metus felis
                        mattis arcu, non vehicula nisl dui quis diam. Mauris ut
                        risus eget massa volutpat feugiat. Donec.
                      </p>
                      <a
                        href="#!"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                      >
                        Read more
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <template v-for="" ></template> -->
              <!-- {{ route.params.page ?? 'x' }} -->

              <!-- <pagination-component :links="news.meta.links" /> -->
              <pagination-component
                v-if="news.meta.links.length > 1"
                :links="news.meta.links"
              ></pagination-component>
              <!-- news.meta: {{ news.meta ?? 11 }} -->
              <!-- news.meta.links: {{ news.meta.links ?? 'xx' }} -->
              <!-- <pagination-component :links="news" /> -->
            </div>
          </template>
        </transition>
      </div>
    </section>

    <!-- <section class="mb-32 text-gray-800 text-left">
      <div class="flex justify-center">
        <nav aria-label="Page navigation example">
          <ul class="flex list-style-none">
            <li class="page-item disabled">
              <a  
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-500 pointer-events-none focus:shadow-none"
                href="#"
                tabindex="-1"
                aria-disabled="true"
              >
                Previous
              </a>
            </li>
            <li class="page-item">
              <a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                href="#"
              >
                1
              </a>
            </li>
            <li class="page-item active">
              <a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-blue-600 outline-none transition-all duration-300 rounded text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
                href="#"
              >
                2
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="page-item">
              <a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                href="#"
              >
                3
              </a>
            </li>
            <li class="page-item">
              <a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                href="#"
              >
                Next
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </section> -->
    <!-- <section class="mb-32 text-gray-800 text-left">
      <pre>
      res: {{ news }}
    </pre
      >
    </section> -->
    <!-- Section: Design Block -->

    <!-- <img
      src="//img.youtube.com/vi/JMJXvsCLu6s/sddefault.jpg"
      width="640"
      height="480"
    /> -->
  </div>
</template>

<script setup>
import { ref, watchEffect } from 'vue'
import axios from 'axios'
import ItemComponent from './10NewsListItemComponent.vue'
import PaginationComponent from './../../comand/PaginationComponent.vue'
import { useRoute } from 'vue-router'
// let $news = [
//   {
//     name: 'Стойка',
//     date: '2022-05-15',
//     type: 'youtube',
//     link: 'OvA-01Nak6Y',
//     opis: 'Первый выпуск видео школы игры в бильярд, стойка!',
//   },
// ]
// v-if="news.meta.links && news.meta.links.length"
const news = ref({ meta: { links: [1] } })
const news_loading = ref(true)
const news_errored = ref(false)

const route = useRoute()
// console.log('$attrs',$attrs);
console.log('route.params.page', route.params.page)

const getNews = (page = 1) => {
  axios
    .get('//' + window.location.host + '/api/zemk/news?page=' + page)
    .then((response) => {
      if (response.status == 200) {
        news.value = response.data
        news_loading.value = false
      } else {
        news_errored.value = true
      }
    })
}

getNews()

watchEffect(() => {
  news_loading.value = true
  getNews(route.params.page)
})
</script>

<style scoped>
@media (min-width: 992px) {
  .rotate-lg-6 {
    transform: rotate(3deg);
  }
}
</style>
