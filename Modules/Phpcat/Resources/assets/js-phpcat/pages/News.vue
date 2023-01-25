<template>
  <div>
    <div class="container cont-tl">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-12">
          <h2>Заработаем на простых действиях!!</h2>
        </div>

        <div v-for="i in list" :key="i.name" class="col-xl-10 col-12">
          <h2>{{ i.name }}</h2>
          <h4>получите: {{ i.summa }}</h4>
          <p>Описание: {{ i.opis }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const list = [
  {
    name: 'Альфа банк платит за регистрацию карты',
    summa: '~ 500р',
    usloviay:
      'Живёте в России, больше 20 лет, раньше никогда не было карточки от Альфа Банка',
    opis:
      'Схема следующая: Пишите мне в тележку @phpcatcom ... "дай ссылку на альфа банк", отправляю вам ссылку, Переходите по ссылке, регистрируетесь и заказываете карту (курьер привезёт бесплатно), пишите мне в тележку @phpcatcom ... что "альфабанк карта на руках" ... пополню вам карту на 20р и нужно что нить купить в магазине незначительное ... потом банк платит мне вознаграждение за вас, мы его делим 50% вам на карту скину',
  },
]

// import { ref } from "vue";
// import sendTelegramm from "./../use/sendTelegramm.ts";

// import news from "./../components/News.vue";

// export default {
//   components: { news },

//   //   props: {
//   //     titleFrom: { type: String, default: "x" },
//   //   },

// //   data() {
// //     return {

// //     };
// //   },

//   setup(props) {
//     // const result = ref("x");
//     // const loading = ref(false);

//     return {
//       //   result,
//       //   loading,
//     };
//   },

// };
</script>

<style lang="scss"></style>
