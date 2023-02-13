<template>
  <div class="containder-fluid mt-5">
    <transition>
      <form v-if="!sended" class="row g-3" @submit.prevent="ssend">
        <!-- Телефон {{ name }} -->
        <div class="col-auto">
          <!-- <label for="staticEmail2" class="visually-hidden">
          Телефон {{ name }}
        </label> -->
          <input
            type="text"
            class="form-control"
            id="staticEmail2"
            v-model="formPhone"
            placeholder="укажите свой Телефон"
          />
          <!-- </div> -->
          <br />
          <!-- <div class="col-auto"> -->
          <transition>
            <button v-if="loading" class="btn btn-ligth mb-3">
              ... загружаю ...
            </button>
            <button v-else type="submit" class="btn btn-primary mb-3">
              Отправить заявку
            </button>
          </transition>
        </div>
      </form>

      <div v-else class="alert alert-primary" role="alert">
        Телефон отправлен, скоро позвоню
      </div>
    </transition>

    <!-- loading: {{ loading ?? 'x' }}
    <br/>
    loaded: {{ loaded ?? 'x' }}
    <br/>
    sended: {{ sended ?? 'x' }}
    <br/>
    loadError: {{ loadError ?? 'x'}}
    <br/> -->
  </div>
</template>

<script setup>
import { ref } from '@vue/reactivity'
// import FormSend from './../use/FormSend.js'
import sendTelegramm from './../use/sendTelegramm.ts'

const props = defineProps({
  name: String,
})

// const { uriVar, sendForm, loading, loaded, loadError } = FormSend()

const formPhone = ref('')

// uriVar.value = '/api/ssb/msg'

const { sendToTelegramm, loading, sended, errored } = sendTelegramm()

const ssend = async () => {
  loading.value = true

  let ww = await sendToTelegramm(
    'Форма: ' +
      props.name +
      //
      '<br>' +
      'Тел: ' +
      formPhone.value,
  ).then((res) => {
    loading.value = false
  })

  console.log('ww', ww)
  // this.result = ww;
}

// import { ref } from "vue";
//

// import Tehnologii from './../components/Tehnologii.vue'

// const showTime = 1

// export default {
//   props: {
//     titleFrom: { type: String, default: "x" },
//   },

// components: {
//   Tehnologii,
// },

// data() {
//   return {};
// },

// setup(props) {
//   // const result = ref("x");
//   // const loading = ref(false);

//   return {
//     //   result,
//     //   loading,
//   };
// },

//   //   mounted() {
//   //     console.log("Component mounted.");
//   //   },
//   methods: {
//     async formSend() {
//       //   console.log(2222, this.formName, this.formPhone, this.formMsg);
//       //   console.log(2222, this.formPhone, this.titleFrom);

//       this.loading = true;

//       const { sendToTelegramm } = sendTelegramm();
//       let ww = await sendToTelegramm(
//         "Где: " +
//           this.titleFrom +
//           "<br>" +
//           "Как зовут: " +
//           this.formName +
//           "<br>" +
//           "Телефон: " +
//           this.formPhone +
//           "<br>" +
//           "Сообщение: " +
//           this.formMsg
//       );
//       //   console.log('ww',ww);
//       this.result = ww;
//     },
//   },
// };
</script>

<style lang="scss"></style>
