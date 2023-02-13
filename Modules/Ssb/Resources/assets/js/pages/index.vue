<template>
  <div>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <div class="container">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg> -->
        <img
                  src="/ssb/leprecon.jpg"
                  style="max-width: 120px;"
                  class="bi me-2"
                />
        <span class="fs-4">Планирование и&nbsp;Реализация Маркетинг&nbsp;идей</span>
      </a>
    </div>
      <!-- <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul> -->
    </header>

    <div class="container">
      <div class="row">
        <!-- <div class="col-12">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-md-6 mt-5 text-end"
              style="vertical-align: middle;"
>
                <img
                  src="/ssb/leprecon.jpg"
                  style="max-width: 200px; width: 100%; float: left;"
                  class="pr-2"
                />
                Маркетинг инструменты планирование и&nbsp;реализация!
              </div>
            </div>
          </div>
        </div> -->

        <div class="col-12 col-md-6 mt-5">
          <img src="https://php-cat.com/phpcat/ya6.jpg" style="width: 100%;" />
        </div>

        <div class="col-12 col-md-6 mt-5">
          <!-- {{ showTime }} -->
          <h2>
            Сергей Бакланов
            <br />
            Маркетёр
          </h2>
          <p>
            внедрение маркетинговых инструментов в&nbsp;деятельность
            вашего&nbsp;дела
            <br />
            точки касания с клиентом (16-32&nbsp;элемента)
            <br />
            <br />
            Нахожусь в Тюмени
            <br />
            <br />
            Звоните:
            <a href="tel:+79222622289">89-222-6-222-89</a>
            <br />
            и пишите в телеграм
            <a href="https://t.me/phpcatcom" target="_blank">@phpcatcom</a>
          </p>
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

          <transition>
            <a
              v-if="!showForm1 && !showForm2 && !showForm3"
              @click.prevent="showForm1 = !showForm1"
              href="#"
              class="icon-link d-inline-flex align-items-center"
            >
              Отправить заявку
              <!-- <svg class="bi" width="1em" height="1em">
                <use xlink:href="#chevron-right"></use>
              </svg> -->
            </a>

            <index-form v-else-if="showForm1" name="По быстрому 30к/м" />
          </transition>
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

          <transition>
            <a
              v-if="!showForm1 && !showForm2 && !showForm3"
              @click.prevent="showForm2 = !showForm2"
              href="#"
              class="icon-link d-inline-flex align-items-center"
            >
              Отправить заявку
              <!-- <svg class="bi" width="1em" height="1em">
                <use xlink:href="#chevron-right"></use>
              </svg> -->
            </a>

            <index-form v-else-if="showForm2" name="Танго 50к/м" />
          </transition>
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

          <transition>
            <a
              v-if="!showForm1 && !showForm2 && !showForm3"
              @click.prevent="showForm3 = !showForm3"
              href="#"
              class="icon-link d-inline-flex align-items-center"
            >
              Отправить заявку
              <!-- <svg class="bi" width="1em" height="1em">
                <use xlink:href="#chevron-right"></use>
              </svg> -->
            </a>

            <index-form v-else-if="showForm3" name="Полное 150к/м" />
          </transition>
        </div>
      </div>

      <!-- <div class="row">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">
            Предложение руки и идей за рекламу. Бесплатно!
          </h1>
          <p class="col-md-8 fs-4">
            Так как я заинтересован в продвижении своей услуги,
            <br />
            с меня 3 рекомендации,
            <br />
            с Вас размещение наклейки (10смх30см) на 6 месяцев, с рекламой
            данной услуги, которую видно при входе
          </p>
          <a
            href="tel:+79222622289"
            class="btn btn-primary btn-lg"
            type="button"
          >
            Позвонить 89-222-6-222-89
          </a>
        </div>
      </div> -->
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
// import sendTelegramm from "./../use/sendTelegramm.ts";

// import Tehnologii from './../components/Tehnologii.vue'
import indexForm from './index-form.vue'

const showForm1 = ref(false)
const showForm2 = ref(false)
const showForm3 = ref(false)

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

<style lang="scss">
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
