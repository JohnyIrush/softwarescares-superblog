require('./bootstrap');

window.Vue = require('vue');



Vue.component('uploader', require('./Plugins/Library/Uploader/widgets/uploader.vue').default); //File Uploader
Vue.component('fileactions', require('./Plugins/Library/Media/widgets/fileActions.vue').default); //File management actions (Delete, Rename etc)
Vue.component('diskcapacity', require('./Plugins/Library/Media/widgets/diskcapacity.vue').default); //Disk Levels

//import Plugin classes
import Request from './Plugins/common/Request' //send http requests
Vue.mixin(Request); //compile commonjs

import level from './Plugins/common/level' //show levels eg(disk used, free disk)
Vue.mixin(level); //compile level class

import Swal from "vue-sweetalert2"; //Sweet alerts
Vue.use(Swal);

const app = new Vue({
    el: '#app',
});
