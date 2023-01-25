<template>
  <div>
    <div class="container cont-tl">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-12 text-center">
          <h2>Заработаем на простых действиях!!</h2>
          <p>
            Компании готовы платить, помогите им это сделать, весь доход делим
            пополам
          </p>
        </div>
      </div>

      <div v-for="i in list" :key="i.name" class="row justify-content-center">

        <div class="col-xl-3 col-12">

        </div>
        <div class="col-xl-9 col-12">
          <h2>{{ i.name }}</h2>
        </div>

        <div class="col-xl-3 col-12">
          <h4>получите</h4>
        </div>
        <div class="col-xl-9 col-12">
          {{ i.summa }}
        </div>

        <div class="col-xl-3 col-12">
          <h4>Описание</h4>
        </div>
        <div class="col-xl-9 col-12">
          {{ i.opis }}
        </div>

      </div>
    </div>
  </div>
</template>

<script setup>
const list = [
  {
    name: 'Альфа банк платит за регистрацию первой карты',
    summa: '~ 500р',
    kto: [
      'Живёте в России',
      'больше 20 лет',
      'раньше никогда не было карточки от Альфа Банка',
    ],
    opis:
      'Схема следующая: Пишите мне в тележку @phpcatcom ... "дай ссылку на альфа банк", отправляю вам ссылку, Переходите по ссылке, регистрируетесь и заказываете карту (курьер привезёт бесплатно), пишите мне в тележку @phpcatcom ... что "альфабанк карта на руках" ... пополню вам карту на 20р и нужно что нить купить в магазине незначительное ... потом банк платит мне вознаграждение за вас, мы его делим 50% вам на карту скину',
  },
]
</script>

<style lang="scss"></style>
