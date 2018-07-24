import Vue from 'vue';
import VueRouter from 'vue-router';

import GenusBase from './components/genus/GenusBase.vue';
import HomeBase from './components/home/HomeBase.vue';
import VegetableBase from './components/vegetable/VegetableBase.vue';
import VegetableDetails from './components/vegetable/VegetableDetails.vue';
import VegetableFormBase from './components/vegetable/VegetableFormBase.vue';
import CharacterBase from './components/character/CharacterBase.vue';
import Search from './components/search/Search.vue';
import Passport from './components/search/Passport.vue';
import Characterization from './components/search/Characterization.vue';
import Evaluation from './components/search/Evaluation.vue';
import Download from './components/download/Download.vue';
import News from './components/news/News.vue';
import Gallery from './components/gallery/Gallery.vue';
import Terms from './components/terms/Terms.vue';
import About from './components/about/About.vue';

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
            path: '/vegetable/:id/:category',
            name: 'vegetable.details',
            component: VegetableDetails,
            props: true,
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
        {
            path: "/search",
            name: 'search',
            component: Search,
        },
        {
            path: "/search/passport",
            name: 'search.passport',
            component: Passport,
        },
        {
            path: "/search/characterization",
            name: 'search.char',
            component: Characterization,
        },
        {
            path: "/search/evaluation",
            name: 'search.eval',
            component: Evaluation,
        },
        {
            path: "/download",
            name: 'download',
            component: Download,
        },
        {
            path: "/news",
            name: 'news',
            component: News,
        },
        {
            path: "/gallery",
            name: 'gallery',
            component: Gallery,
        },
        {
            path: "/terms",
            name: 'terms',
            component: Terms,
        },
        {
            path: "/about",
            name: 'about',
            component: About,
        }

    ]
})

export default routes
