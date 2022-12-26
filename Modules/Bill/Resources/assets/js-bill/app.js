// import vue from "vue";

import { createApp } from 'vue'

import { createRouter, createWebHistory } from 'vue-router'

require('./bootstrap')
    // window.Vue = require('vue').default;
    // import 'bootstrap';

import 'bootstrap/dist/css/bootstrap.min.css'

// require("confetti");
// import 'confetti';
// require('canvas-confetti');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import App1 from './app.vue'

import MenuComponent from './components/MenuComponent.vue'
// import IndexComponent from './pages/IndexComponent.vue'
import IndexComponent from './components/IndexComponent.vue'

const routes = [
    { path: '/', redirect: '/index' },
    // {
    //     path: '/index',
    //     name: 'index',
    //     //     //   component: Home
    //     // component: () => import(/* webpackChunkName: "about" */ './components/didrive/ModItems.vue' ),
    //     //     //         // component: About1,
    //     // component: PageIndex
    //     components: {
    //         menu: MenuComponent,
    //         content: PageIndex,
    //     },
    // },
    {
        path: '/:pathMatch(.*)*',
        components: {
            menu: MenuComponent,
            content: IndexComponent,
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

const app = createApp(App1)

app.use(routers)

// import CKEditor from "@ckeditor/ckeditor5-vue";
// import CKEditor from "@ckeditor/ckeditor5-vue";
// app.use(CKEditor);



// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const vuetify = createVuetify({
    components,
    directives,
})

app.use(vuetify)



app.mount('#app')
    // app.mount();

// const app = new Vue({
//     el: '#app',
// });