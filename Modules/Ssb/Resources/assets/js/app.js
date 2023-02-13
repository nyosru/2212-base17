// import vue from "vue";

import { createApp } from 'vue'
import App from './app.vue'

import { createRouter, createWebHistory } from 'vue-router'

// import notFound from "./components/didrive/NoFound.vue";

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')
    // window.Vue = require('vue').default;
    // import 'bootstrap';

// import 'bootstrap/dist/css/bootstrap.min.css'

// require("confetti");
// import 'confetti';
// require('canvas-confetti');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('notFound', require('./components/didrive/NoFound.vue').default);
// Vue. // component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//  import indexPage from "./components/didrive/indexPage.vue";

// import notFound from "./components/didrive/NoFound.vue";

// import ItemsPage from "./components/didrive/ItemsPage.vue";
// import ItemsPage from "./components/didrive/ModItems.vue";

// import ItemsPage from "./components/didrive/ModItems2.vue";

// import PageIndex from './components/didrive/PageIndexComponent.vue'
// import LeftMenu from "./components/didrive/appMenu.vue";
// import ModuleNavigator from "./components/didrive/ModuleNavigator.vue";
// import ModuleNavigator from "./components/didrive/Navigator2Component.vue";

// import PageIndex from    './components/Tehnologii.vue';
import AppMenu from './components/menu.vue'

import PageIndex from './pages/index.vue'
import PageTimeline from './pages/timeline.vue'
import PageLern from './pages/lern.vue'
import PageNews from './pages/News.vue'
import PageMoney from './pages/Money.vue'
import PageTests from './pages/Tests.vue'
import PageTorrent from './pages/Torrent.vue'

const routes = [

    { path: '/', redirect: '/index' },
    {
        path: '/index',
        name: 'index',
        components: {
            //     leftMenu: LeftMenu,
            content: PageIndex,
            // menu: AppMenu,
        },
    },

    {
        path: '/:pathMatch(.*)*',
        components: {
            content: PageIndex,
        },
    },
]

const routers = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    mode: 'history',
    linkActiveClass: 'active',
    linkExactActiveClass: 'exact-active',
    routes,
})

const app = createApp(App)
app.use(routers)
app.mount('#app')