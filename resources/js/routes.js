import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

//importare i compoenti
import HomePage from './components/pages/HomePage.vue';
import ContactPage from './components/pages/ContactPage.vue';
import NotFoundPage from './components/pages/NotFoundPage.vue';
import PostDataPage from './components/pages/PostDataPage.vue';
//inizializzare router

const router= new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        { path: '/', component: HomePage, name: 'Home'},
        { path: '/contacts', component: ContactPage, name: 'Contact'},
        { path: '/posts/:id', component: PostDataPage, name: 'post-detail'},
        { path: '*', component: NotFoundPage, name: 'NotFoundPage'}
    ]
});

export default router;