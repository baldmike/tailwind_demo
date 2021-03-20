import Vue from 'vue' 
import VueRouter from 'vue-router'
import { router } from './router'

require('./bootstrap');
Vue.use(VueRouter)

window.Vue = require('vue');

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

window.addEventListener('load', function () { 
    const app = new Vue({
        el: '#app',
        template: '<router-view></router-view>',
        router,
    })
})