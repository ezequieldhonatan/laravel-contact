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
Vue.component('preloader-component', require('./components/backend/api/v1/system/panel/layouts/preloader/PreloaderComponent').default); // PRELOADER
Vue.component('master', require('./components/backend/api/v1/system/panel/layouts/master/Master').default); // MASTER

const app = new Vue
(
    {
        el: '#app', // app
        router, // router
        store, // store
    }
);

store.dispatch('contact')

store.dispatch('checkLogin')
        .then( () => router.push( { name: store.state.login.urlBack } ) )
