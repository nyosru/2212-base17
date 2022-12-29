<template>
  <div class="container my-24 px-6 mx-auto">
    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800">
      <!-- Jumbotron -->
      <div class="container mx-auto xl:px-32 text-center lg:text-left">
        <div class="grid lg:grid-cols-2 flex items-center">
          <div class="mb-12 lg:mb-0">
            <div
              class="block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14"
              style="
                background: hsla(0, 0%, 100%, 0.55);
                backdrop-filter: blur(30px);
              "
            >
              <h2 class="text-3xl font-bold mb-6 pb-2">
                Обучение игре в бильярд
              </h2>
              <p class="text-gray-500 mb-6 pr-4 pb-2">
                Уровень своей игры можно хорошо поднять с&nbsp;помощью как серии
                уроков так и&nbsp;парочки (чтобы закрепить знания и&nbsp;навыки)
                <br />
                <br />
                Отправте свой телефон, позвоним расскажем о&nbsp;порядке
                и&nbsp;сроках обучения
                <br />
                <br />
                Первый урок: 1`000 ₽
              </p>

              <div v-if="1 == 2" class="flex flex-wrap mb-6">
                <div class="w-full md:w-4/12 mb-4">
                  <p class="flex items-center justify-center lg:justify-start">
                    <svg
                      class="w-4 h-4 mr-2 text-gray-900"
                      role="img"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"
                      ></path>
                    </svg>
                    Урок 1-2 часа
                  </p>
                </div>
                <div class="w-full md:w-4/12 mb-4">
                  <p class="flex items-center justify-center lg:justify-start">
                    <svg
                      class="w-4 h-4 mr-2 text-gray-900"
                      role="img"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"
                      ></path>
                    </svg>
                    Тактика
                  </p>
                </div>
                <div class="w-full md:w-4/12 mb-4">
                  <p class="flex items-center justify-center lg:justify-start">
                    <svg
                      class="w-4 h-4 mr-2 text-gray-900"
                      role="img"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"
                      ></path>
                    </svg>
                    Точность
                  </p>
                </div>
                <div class="w-full md:w-4/12 mb-4">
                  <p class="flex items-center justify-center lg:justify-start">
                    <svg
                      class="w-4 h-4 mr-2 text-gray-900"
                      role="img"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"
                      ></path>
                    </svg>
                    Техника
                  </p>
                </div>
                <div class="w-full md:w-4/12 mb-4">
                  <p class="flex items-center justify-center lg:justify-start">
                    <svg
                      class="w-4 h-4 mr-2 text-gray-900"
                      role="img"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"
                      ></path>
                    </svg>
                    Красивые удары
                  </p>
                </div>
                <div class="w-full md:w-4/12 mb-4">
                  <p class="flex items-center justify-center lg:justify-start">
                    <svg
                      class="w-4 h-4 mr-2 text-gray-900"
                      role="img"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        fill="currentColor"
                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"
                      ></path>
                    </svg>
                    Соревнования в Тюмени
                  </p>
                </div>
              </div>

              <div class="text-center" v-if="sended == false">
                <form action="" method="post" @submit.prevent="sendForm1">
                  <input
                    type="text"
                    class="form-control inline-block xw-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleFormControlInput3"
                    placeholder="Ваш телефон"
                    v-model="phone"
                    required
                  />
                  <!-- 00-{{ phone }}-00 -->
                  <button
                    type="submit"
                    xclass="inline-block px-7 py-3 bg-red-800 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out"
                    class="inline-block px-7 pt-3 pb-2 bg-red-500 text-white font-medium text-sm xleading-snug uppercase rounded xshadow-md xhover:bg-red-400 xhover:px-8 xhover:py-4 xhover:shadow-lg xhover:scale-125 xhover:bg-blend-darken hover:drop-shadow-md focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out xpx-4 xpy-2 font-semibold xtext-sm xbg-violet-500 xtext-white xrounded-md xshadow-sm xease-in-out xduration-700"
                    data-mdb-ripple="true"
                    data-mdb-ripple-color="light"
                  >
                    Записаться
                  </button>
                </form>
              </div>

              <div class="text-center" v-else>
                <div class="text-center" v-if="!loaded">
                  <!-- ... Отправляю ... -->
                  <button
                    type="button"
                    class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-white 
                      xbg-indigo-500 hover:bg-indigo-400 
                      bg-yellow-500
                      transition ease-in-out duration-150 cursor-not-allowed"
                    disabled=""
                  >
                    <svg
                      class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <circle
                        class="opacity-25"
                        cx="12"
                        cy="12"
                        r="10"
                        stroke="currentColor"
                        stroke-width="4"
                      ></circle>
                      <path
                        class="opacity-75"
                        fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                      ></path>
                    </svg>
                    Обработка...
                  </button>
                </div>
                <div class="text-center" v-else="loaded">
                  ✅ Тел: {{ phone }} Отправлено!
                </div>
              </div>
            </div>
          </div>

          <div>
            <img
              src="/ttt/img/stols2.jpg"
              class="w-full rounded-lg shadow-lg"
              alt=""
            />
          </div>
        </div>
      </div>
      <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
  </div>
</template>

<script setup>
import { ref } from 'vue'
// import axios from 'axios'
// import NewsItem from './10NewsItem.vue'

import FormReg from './FormReg.js'

const sended = ref(false)

const phone = ref('')

// // let $news = [
// //   {
// //     name: 'Стойка',
// //     date: '2022-05-15',
// //     type: 'youtube',
// //     link: 'OvA-01Nak6Y',
// //     opis: 'Первый выпуск видео школы игры в бильярд, стойка!',
// //   },
// // ]

// const news = ref({})
// const news_loading = ref(true)

// axios.get('http://localhost/api/ttt72/news').then((response) => {
//   news.value = response
//   news_loading.value = false
// })

// const sendForm = () => {
//   console.log('2222+' + phone.value)
// }

const sendForm1 = async () => {
  sended.value = true
  let ar = {
    phone: phone.value,
    // phone: bw_phone.value,
    // socweb: bw_socweb.value,
    // predlogau: bw_predlogau.value,
  }
  // console.log( 'loading1',loading.value);
  // console.log( 'loaded1',loaded.value);
  let ee = await sendForm('Форма: обучение бильярду', ar)
  console.log('ee', ee)
  // console.log( 'loading2',loading.value);
  // console.log( 'loaded2',loaded.value);
}

// const fio = ref('')
// const phone = ref('')
// const socweb = ref('')
// const predlogau = ref('')
const { loading, sendForm, loadError, loaded, form_now } = FormReg()
</script>

<style scoped></style>
