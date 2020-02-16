require('./bootstrap');

window.Vue = require('vue');

import router from './routes/routers' // router
import store  from './vuex/store' // store

import SNotify from 'vue-snotify' // SNotify

Vue.use
(
    SNotify,
    {
        toast:
        {
            showProgressBar: false
        }
    }
) // SNotify

/**
 * Global Components
 */
Vue.component('preloader-component', require('./components/api/v1/system/panel/layouts/preloader/PreloaderComponent').default); // PRELOADER
Vue.component('master-component', require('./components/api/v1/system/panel/layouts/master/MasterComponent').default); // MASTER

const app = new Vue
(
    {
        el: '#app', // app
        router, // router
        store, // store
    }
);
