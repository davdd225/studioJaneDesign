import { createRouter, createWebHistory  } from "vue-router";

import HomeComponents from '../components/homeComponents.vue';

const routes = [

    {
        path:'resources/views/welcome.blade.php',
        component: HomeComponents,
        name: 'home.index'
     }
]

export default createRouter({
    history :createWebHistory(),
    routes
})