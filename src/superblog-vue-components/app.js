require('./bootstrap');

window.Vue = require('vue');



Vue.component('', require('./components/.vue').default);



const app = new Vue({
    el: '#app',
});
