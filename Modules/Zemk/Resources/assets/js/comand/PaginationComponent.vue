<template>

    <section class="mb-2 text-gray-800 text-center">
      <div class="flex justify-center">
        <nav aria-label="Page navigation">
          <ul class="flex list-style-none">
            <template v-for="ii in props.links">
              <!-- {{ ii }} 
              <br/>
              <br/> -->

              <li class="page-item" v-if="ii.label == '...'">
                <span
                  class="page-link relative block py-1.5 px-3 rounded border-0 outline-none rounded bg-transparent text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                >
                  ...
                </span>
              </li>

              <li class="page-item" v-else-if="ii.label > 0">
                <router-link
                  class="page-link relative block py-1.5 px-3 rounded border-0 outline-none transition-all duration-300 rounded"
                  :to="'/news/'+ii.label"
                  :class="[
                    ii.active
                      ? 'bg-blue-600 text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md'
                      : 'bg-transparent text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none',
                  ]"
                >
                  {{ ii.label }}
              </router-link>
              </li>
            </template>

            <!-- <li class="page-item disabled">
              <a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-500 pointer-events-none focus:shadow-none"
                href="#"
                tabindex="-1"
                aria-disabled="true"
              >
                Previous
              </a>
            </li>
            <li class="page-item">
              <a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                href="#"
              >
                1
              </a>
            </li>
            <li class="page-item active">
              <a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-blue-600 outline-none transition-all duration-300 rounded text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
                href="#"
              >
                2
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="page-item">
              <a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                href="#"
              >
                3
              </a>
            </li>
            <li class="page-item">
              <a
                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                href="#"
              >
                Next
              </a>
            </li> -->
          </ul>
        </nav>
      </div>
    </section>

</template>

<script setup>
// import { watchEffect } from 'vue'
import { ref } from 'vue'
// // import pagination from './Pagination.js'

const props = defineProps({
  links: Array,
})

const now_page = ref(1)

// console.log('links', links)

// // const page_kolvo = ref({ 1 : 2 , 2 : 2 ,  3 : 77 })

// // // // export default {
// // //   props: {
// // //     itemsKolvo: {
// // //       type: Number,
// // //       //   required: true,
// // //       //   default: 5,
// // //     },
// // //     onPage: {
// // //       type: Number,
// // //       //   required: true,
// // //     },
// // //     showPagesAround: {
// // //       type: Number,
// // //       default: 5,
// // //     },
// // //     nowPage: {
// // //       type: Number,
// // //       //   required: true,
// // //       default: 1,
// // //     },
// // //   },

// //   // data: () => ({
// //     const skip_page = 0;
// //   // }),

// //   // setup(props) {
// //     // console.log("commis", "table pages", "setup");

// // const { now_page, onPage, setPage, kolvo: itemsKolvo } = pagination()

// //     // let itemsKolvo = 20;
// //     // data_filtered

// //   //   return {
// //   //     onPage,
// //   //     itemsKolvo: kolvo,
// //   //     setPage,
// //   //     now_page,
// //   //   };
// //   // },

// //   // components: {
// //   // },

// //   // methods: {
// const setLookPage = (page) => {
//   console.log('кликнули новая страница ' + page)
//   //     //       // this.nowPage = page;
//   //     //       this.$emit("actionClick", page);
// }

// //     //     // показывать эту страницу или нет
// //     const showThisPage = (i, kolvo, around) => {

// //       if (
// //         (i >= this.now_page - around && i <= this.now_page + around) ||
// //         i == kolvo ||
// //         i == 1
// //       ) {
// //         if (this.skip_page != 0) {
// //           this.skip_page = 0;
// //         }
// //         return true;
// //       } else {
// //         if (this.skip_page == 1) {
// //           this.skip_page = 2;
// //         } else if (this.skip_page == 0) {
// //           this.skip_page = 1;
// //         }

// //         return false;
// //       }
// //     }

// const page_kolvo = ref(0)

// watchEffect(() => {
//   page_kolvo.value = Math.ceil(itemsKolvo / onPage)
// })

// //   // // computed: {
// //   //   page_kolvo() {
// //   //     return Math.ceil(this.itemsKolvo / this.onPage);
// //   //   },
// //   // },

// //   // mounted() {
// //   //     console.log("commis", "table", "mounted");
// //   // }
// // // };
</script>

<style></style>
