<template>
    <v-carousel
      cycle
      height="400"
      hide-delimiter-background
      show-arrows="hover"
    >
      <v-carousel-item
        v-for="(slide, i) in slides"
        :key="i"
      >
        <v-sheet
          :color="colors[i]"
          height="100%"
        >
          <div class="d-flex fill-height justify-center align-center">
            <div class="text-h2">
              {{ slide }} Slide
            </div>
          </div>
        </v-sheet>
      </v-carousel-item>
    </v-carousel>
  </template>

  
<template>
  <div class="one text-center" v-if="!photosLoading && !photosErrored">
    <!-- <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card"> -->
    <!-- photos: {{ photos }} -->
    <!-- <br /> -->
    <!-- photosData: {{ photosData ?? 'x' }} -->
    <!-- <br />
          photosLoading: {{ photosLoading ?? 'x' }} -->
    <!-- <br /> -->
    <!-- photosErrored: {{ photosErrored ?? 'x' }} -->
    <!-- <br /> -->
    <!-- {{ photos[0] }} -->
    <!-- {{ photoNow }} -->

    <template v-for="(p, i) in photosData" :key="p">
      <transition v-if="p" name="image" mode="out-in">
        <!-- <div  > -->
        <!-- {{ i }} / {{ p }} -->
        <img :src="p" v-if="photoNow == i" class="two" />
        <!-- <div class="card-header">Example Component</div>
          <div class="card-body">
            I'm an example component.
          </div> -->
        <!-- </div> -->
      </transition>
    </template>
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
  </div>
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

const showNextPhoto = () => {
  //   photo.value = photosData.value[photoNow.value]
  console.log('photoNow.value', photoNow.value)
  photoNow.value++
  if (photoNow.value > photosData.value.length) photoNow.value = 0
}

// повторить с интервалом 2 секунды
let timerId = setInterval(() => {
  showNextPhoto()
}, 3000)

// остановить вывод через 5 секунд
// setTimeout(() => { clearInterval(timerId); alert('stop'); }, 5000);
</script>

<style scoped>
.one {
  height: 40vh;
  display: block;
}
.two {
  position: static;
  top: 0;
}
img {
  xwidth: 100%;
  max-height: 40vh;
  /* position: fixed; */
  /* top: 0; */
}

.image-enter-active,
.image-leave-active {
  transition: opacity 2s;
}

.image-enter,
.image-leave-to {
  opacity: 0;
}
</style>
