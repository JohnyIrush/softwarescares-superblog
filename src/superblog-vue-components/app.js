/**Powered By SoftwaresCares Technologies**/
require('./bootstrap');

window.Vue = require('vue');


//Media Library widgets
Vue.component('uploader', require('./softwarescares/superblog/Plugins/Library/Uploader/widgets/uploader.vue').default); //File Uploader
Vue.component('fileactions', require('./softwarescares/superblog/Plugins/Library/Media/widgets/fileActions.vue').default); //File management actions (Delete, Rename etc)
Vue.component('diskcapacity', require('./softwarescares/superblog/Plugins/Library/Media/widgets/diskcapacity.vue').default); //Disk Levels

//Content Management System widgets
Vue.component('cms', require('./softwarescares/superblog/Plugins/CMS/cms.vue').default); //CMS Dashboard

//import Plugin classes
import Request from './softwarescares/superblog/Plugins/common/Request' //send http requests
Vue.mixin(Request); //compile commonjs

import level from './softwarescares/superblog/Plugins/common/level' //show levels eg(disk used, free disk)
Vue.mixin(level); //compile level class

import Swal from "vue-sweetalert2"; //Sweet alerts
Vue.use(Swal);

const app = new Vue({
    el: '#app',
});

/**Powered By SoftwaresCares Technologies**/