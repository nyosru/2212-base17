<template>
  <div>
    <div class="container">
      <div class="row mt-5">
        <div class="col-6">
          <img src="https://php-cat.com/phpcat/ya6.jpg" style="width: 100%;" />
        </div>

        <div class="col-6">
          <!-- {{ showTime }} -->
          <h2>
            Сергей Бакланов
            <br />
            Маркетёр
          </h2>
          <h3>
            внедрение маркетинговых инструментов в&nbsp;деятельность
            вашего&nbsp;дела
            <br />
            точки касания с клиентом (16-32&nbsp;элемента)
            <br/>
            <br/>
            Звоните: <a href="tel:+79222622289" >89-222-6-222-89</a>
          </h3>
        </div>
      </div>
    </div>

    <div class="container px-4 py-5" id="featured-3">
      <h2 class="pb-1">Варианты нашего взаимодествия</h2>
      <p class="pb-2 border-bottom">
        планируйте 6 месяцев сотрудничества, далее своими силами будете
        использовать что настроено
      </p>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
          <div
            class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"
          >
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#collection"></use>
            </svg>
          </div>
          <h3 class="fs-2">По&nbsp;быстрому</h3>
          <p>30тр/месяц</p>
          <p>2&nbsp;встречи в&nbsp;месяц.</p>
          <p>Подготовка предложений</p>
          <a href="#" class="icon-link d-inline-flex align-items-center">
            Отправить заявку
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#chevron-right"></use>
            </svg>
          </a>
        </div>
        <div class="feature col">
          <div
            class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"
          >
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#people-circle"></use>
            </svg>
          </div>
          <h3 class="fs-2">Танго</h3>
          <p>50тр/месяц</p>
          <p>Встреча раз&nbsp;в&nbsp;неделю</p>
          <p>Подготовка предложений</p>
          <p>Проверка реализации</p>
          <p>Формирование ежемесячных отчётов по&nbsp;ключевым показателям</p>
          <a href="#" class="icon-link d-inline-flex align-items-center">
            Отправить заявку
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#chevron-right"></use>
            </svg>
          </a>
        </div>
        <div class="feature col">
          <div
            class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"
          >
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#toggles2"></use>
            </svg>
          </div>
          <h3 class="fs-2">Полное погружение</h3>
          <p>150тр/месяц</p>
          <p>Работаю в&nbsp;вашей организации 3&nbsp;дня в&nbsp;неделю</p>
          <p>Подготовка предложений</p>
          <p>Внедрение предложений</p>
          <p>Обучение сотрудников</p>
          <p>Проверка реализации</p>
          <p>Формирование ежемесячных отчётов по&nbsp;ключевым показателям</p>
          <a href="#" class="icon-link d-inline-flex align-items-center">
            Отправить заявку
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#chevron-right"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <!-- <tehnologii /> -->
  </div>
</template>

<script setup>
// import { ref } from "vue";
// import sendTelegramm from "./../use/sendTelegramm.ts";

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
