
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('idea', require('./components/IdeaComponent.vue'));
Vue.component('register-client', require('./components/ClientRegisterComponent.vue'));

const app = new Vue({
    el: '#app'
});


$('.dropdown-list-menu').click(function (e) {
    e.preventDefault();
    $(this).find('ul').toggle(100);
    $(this).find('.icon-direcction').toggleClass('fa fa-caret-left fa fa-caret-down');

})

$('.dropdown-list > li > a').click(function () {
    window.location = $(this).attr('href');
});