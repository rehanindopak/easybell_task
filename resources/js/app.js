/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

import App from './App.vue'


Vue.use(VueRouter)



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('users-list', require('./components/UsersListComponent.vue').default);
Vue.component('users-add', require('./components/AddUsersListComponent.vue').default);
Vue.component('users-edit', require('./components/EditUsersListComponent.vue').default);




/* Creating Custom Vue Routes Start HEre */
import Users from './components/UsersListComponent.vue';
import AddUser from './components/AddUsersListComponent.vue';
import EditUser from './components/EditUsersListComponent.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [{
            name: 'userlist',
            path: '/',
            component: Users
        },
        {
            name: 'adduser',
            path: '/create',
            component: AddUser
        },
        {
            name: 'edituser',
            path: '/edit/:id',
            component: EditUser
        }
    ],
});

/* Creating Custom Vue Routes End  HEre */


const app = new Vue({
    el: '#app',
    components: { App },
    router,
});