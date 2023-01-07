<template>
  <!-- Container for demo purpose -->
  <div class="container my-24 px-6 mx-auto">
    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center lg:text-left">
      <div class="md:px-6 py-12 md:px-12">
        <div class="container mx-auto xl:px-32">
          <div class="grid lg:grid-cols-2 flex items-center">
            <div v-if="leftSide" class="md:mb-12 lg:mb-0">
              <img
                :src="
                  'https://mdbootstrap.com/img/new/ecommerce/vertical/0' +
                  randomInteger(10, 99) +
                  '.jpg'
                "
                class="w-full rounded-lg shadow-lg rotate-lg-6"
                alt=""
              />
            </div>

            <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0">
              <div
                class="relative block rounded-lg shadow-lg px-6 pt-12 pb-6 md:px-12 lg:-mr-14"
                style="
                  background: hsla(0, 0%, 100%, 0.55);
                  backdrop-filter: blur(30px);
                  z-index: 1;
                "
              >
                <h2 class="text-3xl font-bold mb-6">{{ i.head }}</h2>

                <p class="text-gray-500 mb-6">
                  <!-- {{ i.opis }} -->
                  <span v-html="i.opis"></span>
                </p>

                <!-- i: {{ i }} -->

                <div
                  v-if="1 == 2"
                  class="grid md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-x-6"
                >
                  <div class="mb-6">
                    <p class="flex items-center">
                      <svg
                        class="w-4 h-4 mr-2 text-gray-900"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                      >
                        <path
                          fill="currentColor"
                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                        ></path>
                      </svg>
                      Support 24/7
                    </p>
                  </div>

                  <div class="mb-6">
                    <p class="flex items-center">
                      <svg
                        class="w-4 h-4 mr-2 text-gray-900"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                      >
                        <path
                          fill="currentColor"
                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                        ></path>
                      </svg>
                      Analytics
                    </p>
                  </div>

                  <div class="mb-6">
                    <p class="flex items-center">
                      <svg
                        class="w-4 h-4 mr-2 text-gray-900"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                      >
                        <path
                          fill="currentColor"
                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                        ></path>
                      </svg>
                      Components
                    </p>
                  </div>
                  <div class="mb-6">
                    <p class="flex items-center">
                      <svg
                        class="w-4 h-4 mr-2 text-gray-900"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                      >
                        <path
                          fill="currentColor"
                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                        ></path>
                      </svg>
                      Updates
                    </p>
                  </div>

                  <div class="mb-6">
                    <p class="flex items-center">
                      <svg
                        class="w-4 h-4 mr-2 text-gray-900"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                      >
                        <path
                          fill="currentColor"
                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                        ></path>
                      </svg>
                      Reports
                    </p>
                  </div>

                  <div class="mb-6">
                    <p class="flex items-center">
                      <svg
                        class="w-4 h-4 mr-2 text-gray-900"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                      >
                        <path
                          fill="currentColor"
                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                        ></path>
                      </svg>
                      Mobile
                    </p>
                  </div>
                  <div class="mb-6">
                    <p class="flex items-center">
                      <svg
                        class="w-4 h-4 mr-2 text-gray-900"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                      >
                        <path
                          fill="currentColor"
                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                        ></path>
                      </svg>
                      Modules
                    </p>
                  </div>

                  <div class="mb-6">
                    <p class="flex items-center">
                      <svg
                        class="w-4 h-4 mr-2 text-gray-900"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                      >
                        <path
                          fill="currentColor"
                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                        ></path>
                      </svg>
                      Blocks
                    </p>
                  </div>

                  <div class="mb-6">
                    <p class="flex items-center">
                      <svg
                        class="w-4 h-4 mr-2 text-gray-900"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                      >
                        <path
                          fill="currentColor"
                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                        ></path>
                      </svg>
                      Templates
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div v-if="!leftSide" class="md:mb-12 lg:mb-0">
              <img
                :src="
                  'https://mdbootstrap.com/img/new/ecommerce/vertical/0' +
                  randomInteger(10, 99) +
                  '.jpg'
                "
                class="w-full rounded-lg shadow-lg rotate-lg-6"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
</template>

<script setup>
import FnNumeric from './../../use/FnNumeric'
const { randomInteger } = FnNumeric()

defineProps({
  i: Object,
  leftSide: Boolean,
  // likes: Number
})
</script>

<style scoped>
@media (min-width: 992px) {
  .rotate-lg-6 {
    transform: rotate(6deg);
  }
}
</style>
