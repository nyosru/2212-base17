<template>
  <div class="grid grid-rows-3 grid-flow-col gap-4">
    <div class="row-span-3 ...">01</div>
    <div class="col-span-2 ...">02</div>
    <div class="row-span-2 col-span-2 ...">03</div>
  </div>
  <div
    class="grid grid-flow-row-dense grid-rows-1 grid-cols-3 xmd:grid-cols-3 xmb-6 xgap-6 xxxl:gap-x-12"
  >
    <div v-if="leftSide">111</div>
    <div class="col-span-2">
      leftSide: {{ leftSide }}
      <br />
      i: {{ i }}
    </div>
    <div v-if="!leftSide">111</div>
  </div>
  <!-- <div class="relative block bg-white rounded-lg shadow-lg"> -->
  <!-- <div class="flex">
          <router-link :to="'/news/read/' + item.id ?? 'x'">
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
              data-mdb-ripple="true"
              data-mdb-ripple-color="light"
            >
              <img
                xsrc="https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp"
                src="http://placekitten.com/g/400/120"
                class="w-full"
              />
              <div
                class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                style="background-color: rgba(255, 255, 255, 0.15);"
              ></div>
            </div>
          </router-link>
        </div> -->
  <!-- <div class="p-6"> -->
  <!-- 772 -->
  <!-- <router-link :to="'/news/read/' + item.id">
            <h5 class="font-bold text-lg mb-3">{{ item.head }}</h5>
            <p class="text-gray-500 mb-4">
              <small>
                <u>{{ item.date }}</u>
                <span v-if="item.author_website && item.author_website.length">
                  с
                  <a :href="'http://' + item.author_website" target="_blank">
                    {{ item.author_website }}
                  </a>
                </span>
                <span v-else> от {{ item.author_name }}</span>                
              </small>
            </p>
            <p class="mb-4 pb-2">
              {{ item.opis_small }}
            </p>
          </router-link> -->

  <!-- </div>
      </div>
    </div>

  </div> -->
</template>

<script setup>
defineProps({
  i: Object,
  leftSide: Boolean,
  // likes: Number
})
</script>

<style scoped></style>
