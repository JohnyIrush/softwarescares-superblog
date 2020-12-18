require('./bootstrap');

window.Vue = require('vue');



Vue.component('uploader', require('./Plugins/Library/Uploader/widgets/uploader.vue').default); //File Uploader
Vue.component('fileactions', require('./Plugins/Library/Media/widgets/fileActions.vue').default); //File management actions (Delete, Rename etc)

//import Plugin classes

import Request from './Plugins/common/Request'
Vue.mixin(Request); //compile commonjs

const app = new Vue({
    el: '#app',
});
