
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 window.toastr = require('./toastr')
 window._ = require('lodash');
 window.Popper = require('popper.js').default;

 /**
  * We'll load jQuery and the Bootstrap jQuery plugin which provides support
  * for JavaScript based Bootstrap features such as modals and tabs. This
  * code may be modified to fit the specific needs of your application.
  */

 try {
     window.$ = window.jQuery = require('jquery');

     require('bootstrap');
 } catch (e) {}

require('./sb-admin');
 /**
  * We'll load the axios HTTP library which allows us to easily issue requests
  * to our Laravel back-end. This library automatically handles sending the
  * CSRF token as a header based on the value of the "XSRF" token cookie.
  */
 var instance = require('axios')

 window.axios = instance.create({
     baseURL: env.baseUrl,
     headers: {
         'Content-Type': 'application/json'
     }
 });

 // window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

 /**
  * Next we will register the CSRF Token as a common header with Axios so that
  * all outgoing HTTP requests automatically have it attached. This is just
  * a simple convenience so we don't have to attach every token manually.
  */

 let apiToken = window.env.apiToken;

 if (apiToken) {
     window.axios.defaults.headers.common['Authorization'] = 'Bearer ' + apiToken
 } else {
     console.error('API token not found');
 }

window.Vue = require('vue');

Vue.mixin({
    computed: {
        env: function () {
            return window.env
        }
    },
    methods: {
        url(string) {
            return this.env.baseUrl + string
        }
    }
});

Vue.component('Spinner', require('./components/Spinner'));

Vue.component('VegetableIndex', require('./components/admin/vegetable/VegetableIndex'));
Vue.component('VegetableShow', require('./components/admin/vegetable/VegetableShow'));

Vue.filter('titleCase', function (value) {
  if (!value) return ''
  
  return value.toLowerCase().split('_').map(function(word) {
    return (word.charAt(0).toUpperCase() + word.slice(1));
  }).join(' ');
})

const app = new Vue({
    el: '#wrapper',
});
