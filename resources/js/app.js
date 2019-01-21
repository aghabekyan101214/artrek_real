
require('./bootstrap');
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('davo-component', require('./components/DavoComponent'));

const app = new Vue({
    el: '#app'
});
