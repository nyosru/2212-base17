<template>
  <div>
    <header-app />
    <up-menu />

    <!-- <router-view></router-view> -->
    <router-view name="pageCallToAction1"></router-view>
    <router-view name="pageUslugi"></router-view>
    <router-view name="pageCallToAction2"></router-view>
    <router-view name="pageBody"></router-view>

    <!-- <news-component /> -->

    <!-- <up-header /> -->
    <!-- <1up-header-2 /> -->
    <!-- <1up-header-menu /> -->
    <!-- <h1>222</h1> -->
    <!-- 77777 -->
    <!-- <div class="container mt-10 mx-auto" style="min-height:60vh;">
      <div class="flex flex-row w-full justify-around">
        <div class="basis-1/4">01</div>
        <div class="basis-1/4">02</div>
        <div class="basis-1/4">02</div>
        <div class="basis-1/4">02</div>
        <div class="basis-1/2">03</div>
      </div>
    </div> -->
    <!-- <block-start /> -->
    <!-- <1app-footer /> -->
    <!-- <block-news /> -->
    <!-- <block-price /> -->
    <!-- 33333 -->
    <!-- <block-form-submit /> -->
    <footer-app />
  </div>
</template>

<script setup>
import HeaderApp from './view/app/Header.vue'
import FooterApp from './view/app/Footer.vue'

// import UpHeader from './view/UpHeadMenu.vue'

import UpMenu from './view/blocks/00UpMenu.vue'
// import BlockStart from './view/blocks/00Start.vue'
// import NewsComponent from './view/blocks/10NewsListComponent.vue'
// // import BlockPrice from './view/blocks/20Price.vue'
// // import BlockFormSubmit from './view/blocks/05FormSubmit.vue'

// // import UpHeader from './view/UpHeader.vue'
// // import UpHeader2 from './view/UpHeader2.vue'
// // import UpHeaderMenu from './view/UpHeaderMenu.vue'
// // import AppFooter from './view/app/Footer.vue'
</script>

<style scoped>
h1 {
  font-size: 10px;
}
</style>
