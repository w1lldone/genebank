import Vue from 'vue';
import VueRouter from 'vue-router';

import GenusBase from './components/genus/GenusBase.vue';
import HomeBase from './components/home/HomeBase.vue';

Vue.use(VueRouter)

const routes = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: "/",
            name: 'home',
            component: HomeBase,
        },
        {
            path: "/genus",
            name: 'genus',
            component: GenusBase,
        }
    ]
})

export default routes
