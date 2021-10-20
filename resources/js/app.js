/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


import Vue from 'vue';
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'

import Input from './components/input.vue';
import Label from './components/label.vue';
import TextArea from './components/textArea.vue';
import Button from './components/button.vue';
import Message from './components/messages.vue';
import Confirm from './components/confirm.vue';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.Vue = Vue;
Vue.config.productionTip = false

const app = new Vue({
    el: '#app',
    components:{
        'input-form' : Input,
        'label-name' : Label,
        'text-area':TextArea,
        'button-action':Button,
        'message-toast':Message,
        'confirm-delete':Confirm,
    }
});

global.vm = app;