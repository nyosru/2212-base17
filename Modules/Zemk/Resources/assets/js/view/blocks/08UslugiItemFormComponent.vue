<template>
  <div>
    <transition name="fade">
      <div
        v-if="result == 'sended'"
        class="px-5 py-3 text-center bg-green-200 rounded-xl"
      >
        <i class="fa fa-check" aria-hidden="true"></i>
        Указали тел:
        <u>{{ formPhone }}</u>
        <br />
        Скоро позвоним, спасибо!
      </div>

      <form v-else @submit.prevent="formSend" class="mt-5">
        <p class="text-gray-600">
          Отправте свой телефон и очень кратко что нужно, позвоним уточнить
          детали заказа
        </p>
        <input
          type="text"
          class="form-control block w-full mt-3 mb-3 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
          name="phone"
          required
          @click="showForm = true"
          placeholder="89***"
          v-model="formPhone"
        />
        <div v-if="showForm == true">
          <textarea
            name="msg"
            required
            class="form-control block w-full mb-3 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            placeholder="обозначьте что нужно сделать, кратко"
            v-model="formMsg"
          ></textarea>
          <div v-if="loading">... отправляю ...</div>
          <button
            v-else
            type="submit"
            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
          >
            Отправить
          </button>
          <transition name="fade">
            <div
              class="text-red-800 inline-block bg-red-400 ml-3 rounded-md px-2 py-1"
              v-if="result == 'errored'"
            >
              упс .. произошла ошибка
            </div>
          </transition>
        </div>
      </form>
    </transition>
  </div>
</template>

<script setup>
// import FnNumeric from './../../use/FnNumeric'
// const { randomInteger } = FnNumeric()

import { ref } from 'vue'
import sendTelegramm from './../../use/sendTelegramm.js'

const props = defineProps({
  // i: Object,
  // leftSide: Boolean,
  // likes: Number
  formTitle: String,
})

console.log('formTitle', props.formTitle)

const showForm = ref(false)
const formPhone = ref('')
const formMsg = ref('')
const titleFrom = ref('')
const result = ref('x')
const loading = ref(false)

const { sendToTelegramm } = sendTelegramm()

const formSend = async () => {
  //   console.log(2222, this.formName, this.formPhone, this.formMsg);
  //   console.log(2222, this.formPhone, this.titleFrom);
  result.value = 'x'
  loading.value = true

  let ww = await sendToTelegramm(
    'услуга где форма: ' +
      props.formTitle +
      '<br>что хотят: ' +
      formMsg.value +
      '<br>' +
      'Телефон: ' +
      formPhone.value,
  )
  // console.log('ww',ww);
  result.value = await ww

  loading.value = false
}
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 1s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
