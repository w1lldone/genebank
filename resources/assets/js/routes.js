import Vue from 'vue';
import VueRouter from 'vue-router';

import GenusBase from './components/genus/GenusBase.vue';
import HomeBase from './components/home/HomeBase.vue';
import VegetableBase from './components/vegetable/VegetableBase.vue';
import VegetableFormBase from './components/vegetable/VegetableFormBase.vue';
import CharacterBase from './components/character/CharacterBase.vue';

Vue.use(VueRouter)

const routes = new VueRouter({
    mode: 'history',
    base: window.env.baseUrl,
    history: true,
    routes: [
        {
            path: "",
            name: 'home',
            component: HomeBase,
        },
        {
            path: "/genus",
            name: 'genus',
            component: GenusBase,
        },
        {
            path: '/vegetable',
            name: 'vegetable',
            component: VegetableBase,
        },
        {
            path: '/vegetable/create',
            name: 'vegetable.create',
            component: VegetableFormBase,
        },
        {
            path: '/character/:id',
            name: 'character.index',
            component: CharacterBase,
            props: true,
        },
    ]
})

export default routes
