
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');


import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));




let EniloloboOverview = require('./components/EniloloboOverview.vue');
let EniloloboResearch = require('./components/EniloloboResearch.vue');
let EniloloboTeaching = require('./components/EniloloboTeaching.vue');
let EniloloboServices = require('./components/EniloloboServices.vue');



let BelloOverview = require('./components/BelloOverview.vue');
let BelloResearch = require('./components/BelloResearch.vue');
let BelloTeaching = require('./components/BelloTeaching.vue');
let BelloServices = require('./components/BelloServices.vue');

let DaramolaOverview = require('./components/DaramolaOverview.vue');
let DaramolaResearch = require('./components/DaramolaResearch.vue');
let DaramolaTeaching = require('./components/DaramolaTeaching.vue');
let DaramolaServices = require('./components/DaramolaServices.vue');


let OgboiOverview = require('./components/OgboiOverview.vue');
let OgboiResearch = require('./components/OgboiResearch.vue');


let NjogoOverview = require('./components/NjogoOverview.vue');

const routes = [

  { path: '/eniloloboresearch', component: EniloloboResearch },
  { path: '/eniloloboservices', component: EniloloboServices },
  { path: '/eniloloboteaching', component:EniloloboTeaching},
  { path: '/enilolobooverview', component:EniloloboOverview },

  { path: '/belloresearch', component:BelloResearch },
  { path: '/bellooverview', component:BelloOverview },
  { path: '/belloservices', component:BelloServices },
  { path: '/belloteaching', component:BelloTeaching },

  { path: '/ogboioverview', component:OgboiOverview },
  { path: '/ogboiresearch', component:OgboiResearch },
  { path: '/njogooverview', component:NjogoOverview },

  { path: '/daramolaoverview', component:DaramolaOverview },
  { path: '/daramolaresearch', component:DaramolaResearch },
  { path: '/daramolateaching', component:DaramolaTeaching },
  { path: '/daramolaservices', component:DaramolaServices }
  
]

const router = new VueRouter({
  routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    router,
    data: {
    	message: "Hello World"
    }
});
