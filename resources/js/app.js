
require('./bootstrap');
window.Vue = require('vue');

//Vue Notify installation....
import Vue from 'vue'
import Snotify, { SnotifyPosition } from 'vue-snotify'

const options = {
  toast: {
   	position: SnotifyPosition.rightTop
  }
}

Vue.use(Snotify, options)

//Vue Form installation....

import { Form, HasError, AlertError } from 'vform'
window.Form = Form

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)




//Vue Router for installation....
import VueRouter from 'vue-router'
Vue.use(VueRouter)

//All Backend Router are includes here....
import Dashboard from './components/back/Dashboard.vue'
import Customer from './components/back/Customer.vue'
import Category from './components/back/Category.vue'
import TopCategory from './components/back/TopCategory.vue'
import Location from './components/back/Location.vue'
import Newsletter from './components/back/Newsletter.vue'
import Slider from './components/back/Slider.vue'
import Event from './components/back/Event.vue'



//All Fontend Router are includes here....
import Home from './components/front/Home.vue'
import Category_Event from './components/front/Category_Event.vue'

const routes= [

    { path: '/admin/dashboard', component: Dashboard },
    { path: '/admin/customer', component: Customer },
    { path: '/admin/category', component: Category },
    { path: '/admin/topcategory', component: TopCategory },
    { path: '/admin/location', component: Location },
    { path: '/admin/newsletter', component: Newsletter },
    { path: '/admin/slider', component: Slider },
    { path: '/admin/event', component: Event },



    //All Fontend Router are includes here....ekhan theke category_vue te niye geci abar.
    { path: '/', component: Home },
    { path: '/home', component: Home },
    { path: '/cate_output/:id', component: Category_Event },

]

var router = new VueRouter({
	mode: 'history',
    routes
});


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('pagination-component', require('./components/partial/PaginationComponent.vue').default);
Vue.component('sidebar-component', require('./components/partial/Sidebar.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
});
