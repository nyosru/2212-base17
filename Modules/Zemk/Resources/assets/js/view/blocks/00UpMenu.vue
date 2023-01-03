<template>
  <div>
    <nav
      class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between"
    >
      <!-- <div class="px-6 w-full flex flex-wrap items-center justify-between"> -->
      <div class="flex items-center">
        <button
          class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContentY"
          aria-controls="navbarSupportedContentY"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            class="w-5"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
          >
            <path
              fill="currentColor"
              d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
            ></path>
          </svg>
        </button>
      </div>
      <div
        class="navbar-collapse collapse grow items-center"
        id="navbarSupportedContentY"
      >
        <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
          <li class="nav-item">
            <router-link
              to="/"
              class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
            >
              <!-- <a
                class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                href="#!"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
              > -->
              Главная
              <!-- </a> -->
            </router-link>
          </li>
          <li class="nav-item">
            <router-link
              to="/news/"
              class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
            >
              <!-- <a
                class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
                href="#!"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
              > -->
              Новости
              <!-- </a> -->
            </router-link>
          </li>
          <li class="nav-item">
            <a
              class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
              href="#!"
              data-mdb-ripple="true"
              data-mdb-ripple-color="light"
            >
              Контакты
            </a>
          </li>
          <li class="nav-item mb-2 lg:mb-0">
            <a
              class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
              href="#!"
              data-mdb-ripple="true"
              data-mdb-ripple-color="light"
            >
              About
            </a>
          </li>
        </ul>
      </div>
      <!-- </div> -->
    </nav>

    <!-- steps: {{ steps }} -->

    <nav class="rounded-md w-full mx-10 pl-10 py-5">
      <ol class="list-reset flex">
        <template v-for="(s,i) in steps" :key="s.name">
          <li>
            <!-- {{  i }} / {{ steps.length }} / {{  s  }} -->
            <router-link :to="s.to" xhref="#" class="text-blue-600 hover:text-blue-700">{{ s.name }}</router-link>
          </li>
          <li v-if="(steps.length - 1 ) > i" ><span class="text-gray-500 mx-2">/</span></li>
        </template>
        <!-- <li>
          <a href="#" class="text-blue-600 hover:text-blue-700">Library</a>
        </li>
        <li><span class="text-gray-500 mx-2">/</span></li>
        <li class="text-gray-500">Data</li> -->
      </ol>
    </nav>
  </div>
</template>

<script setup>
import Breadc from '../../use/Breadcrumbs'
const {
  steps,
  // breadcrumbsClean,
  // breadcrumbsAddStep,
  // breadcrumbsCreate
} = Breadc()
</script>

<style lang="scss" scoped></style>
