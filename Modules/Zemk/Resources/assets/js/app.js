require('./bootstrap');

import { createRouter, createWebHistory } from "vue-router";

import 'tw-elements';
import { createApp } from "vue";
import App from "./App.vue";

import { routes } from './router';

const routers = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    mode: "history",
    linkActiveClass: "active",
    linkExactActiveClass: "exact-active",
    routes
});

createApp(App).use(routers).mount("#app");