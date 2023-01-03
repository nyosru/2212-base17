<template>
  <div>
    <div v-if="1 == 1" class="mb-6 lg:mb-0">
      <div class="relative block bg-white rounded-lg shadow-lg">
        <div class="flex">
          <router-link :to="'/news/read/' + item.id">
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
              <!-- <a href="#!"> -->
              <div
                class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                style="background-color: rgba(255, 255, 255, 0.15);"
              ></div>
              <!-- </a> -->
            </div>
          </router-link>
        </div>
        <div class="p-6">
          <router-link :to="'/news/read/' + item.id">
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
                <!-- от            <a href="//gosuslugi.ru" target="_blank" class="text-gray-900">гос сайт</a> -->
              </small>
            </p>
            <p class="mb-4 pb-2">
              {{ item.opis_small }}
            </p>
          </router-link>
          <!-- <a
          href="#!"
          data-mdb-ripple="true"
          data-mdb-ripple-color="light"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
        >
          Read more
        </a> -->
          <!-- item: {{ item }} -->
        </div>
      </div>
    </div>

    <div v-if="1 == 2" class="mb-6 lg:mb-0">
      <div class="relative block bg-white rounded-lg shadow-lg">
        <div class="flex" v-if="item.type == 'youtube'">
          <a
            :href="'https://www.youtube.com/watch?v=' + item.link"
            target="_blank"
            xonClick="window.open(this.href, '', 'width='+screen.availWidth/2+',height='+screen.availHeight/2+',top='+screen.availHeight/4+',left='+screen.availWidth/4); return false;"
          >
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
              data-mdb-ripple="true"
              data-mdb-ripple-color="light"
            >
              <img
                xsrc="https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp"
                :src="'//img.youtube.com/vi/' + item.link + '/sddefault.jpg'"
                class="w-full"
              />
              <div
                class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                style="background-color: rgba(251, 251, 251, 0.15);"
              ></div>
            </div>
          </a>
        </div>

        <div class="p-6">
          <h5 class="font-bold text-lg mb-3">{{ item.name }}</h5>
          <p class="text-gray-500 mb-4">
            <small>
              <!-- Published -->
              <u>{{ item.date }}</u>
              <!-- by -->
              <!-- <a href="" class="text-gray-900">Anna Maria Doe</a> -->
            </small>
          </p>
          <p class="mb-4 pb-2">
            {{ item.opis }}
          </p>
          <!-- <a
          href="#!"
          data-mdb-ripple="true"
          data-mdb-ripple-color="light"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
        >
          Read more
        </a> -->
        </div>
      </div>
      <!-- </a> -->
    </div>
  </div>
</template>

<script setup>
defineProps({
  item: Object,
  // likes: Number
})
</script>

<style scoped>
@media (min-width: 992px) {
  .rotate-lg-6 {
    transform: rotate(3deg);
  }
}
</style>
