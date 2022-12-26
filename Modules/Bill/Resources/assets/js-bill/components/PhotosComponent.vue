<template>
  <v-carousel cycle height="35vh" hide-delimiter-background show-arrows="hover">
    <v-carousel-item v-for="(p, i) in photosData" :key="i">
      <v-sheet xcolor="colors[i]" height="35vh">
        <div class="d-flex fill-height justify-center align-center photo-item" :style="'background-image: url('+p+')'">            
            <div class="text-h2 fill-height align-center">
              <!-- {{ slide }} Slide -->
              <!-- {{  i }} / {{ p }} -->
              <img :src="p" />            
            </div>
          </div>
      </v-sheet>
    </v-carousel-item>
  </v-carousel>
</template>

<script setup>

import { ref } from '@vue/reactivity'

import PhotosJs from './Photos.js'

const {
  get: photosGet,
  data: photosData,
  loading: photosLoading,
  errored: photosErrored,
} = PhotosJs()

photosGet()

// const photos = ref([
//   //   '/bill/adv/1.jpg',
//   '/bill/adv/2.jpg',
//   '/bill/adv/3.jpg',
//   '/bill/adv/4.jpg',
//   '/bill/adv/5.jpg',
//   '/bill/adv/6.jpg',
//   '/bill/adv/7.jpg',
// ])
// const photo = ref(photosData[0])
const photoNow = ref(0)

// const showNextPhoto = () => {
//   //   photo.value = photosData.value[photoNow.value]
//   console.log('photoNow.value', photoNow.value)
//   photoNow.value++
//   if (photoNow.value > photosData.value.length) photoNow.value = 0
// }

// // повторить с интервалом 2 секунды
// let timerId = setInterval(() => {
//   showNextPhoto()
// }, 3000)

// остановить вывод через 5 секунд
// setTimeout(() => { clearInterval(timerId); alert('stop'); }, 5000);
</script>

<style scoped>
.photo-item{
    background-size: cover;
    background-position: center center;
}
.photo-item div{
    background-color: rgba(255,255,255,0.7);
    width: 100%;
    height: 100%;
    text-align: center;
}
.photo-item img{
    height: 100%;
}
</style>
