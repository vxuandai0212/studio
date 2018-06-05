import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import App from './App.vue';
import Home from './components/Home.vue';
import About from './components/About.vue';
import Portfolio from './components/Portfolio.vue';
import Service from './components/Service.vue';
import Contact from './components/Contact.vue';

const routes = [
    {name: 'Home', path: '/', component: Home},
    {name: 'About', path: '/about', component: About},
    // {name: 'Portfolio', path: '/portfolios', component: Portfolio},
    // {name: 'Service', path: '/service', component: Service},
    // {name: 'Contact', path: '/contact', component: Contact},
];

const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');
