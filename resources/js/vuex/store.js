import Vue from 'vue' // vue
import Vuex from 'vuex' // vuex

/**
 * * AUTH
*/
import login from './modules/api/v1/system/panel/auth/login/login' // LOGIN

/**
 * * LAYOUTS
*/
import preloader from './modules/api/v1/system/panel/layouts/preloader/preloader' // PRELOADER

/**
 * * DASHBOARD (MODULE 1.0)
*/
import overview from './modules/api/v1/system/panel/dashboard/overview' // OVERVIEW (MODULE 1.1)

/**
 * * REGISTRATION (MODULE 2.0)
*/
import contact from './modules/api/v1/system/panel/support/contact/contact' // CONTACT (MODULE 2.1)

Vue.use(Vuex)

const store = new Vuex.Store
(
    {
        modules: {

            /**
             * * AUTH
            */
           login, // LOGIN

            /**
             * * LAYOUTS
            */
           preloader, // PRELOADER

            /**
             * * DASHBOARD (MODULE 1.0)
            */
           overview, // OVERVIEW (MODULE 1.1)

           /**
             * * REGISTRATION (MODULE 2.0)
            */
           contact, // CONTACT (MODULE 2.1)

        }, // modules
    }
) // store

export default store // store
