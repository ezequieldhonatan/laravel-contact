import Vue from 'vue' // vue
import VueRouter from 'vue-router' // vue-router

import store from '../vuex/store' // store



/**
 * * LAYOUTS (FRONTEND)
 */
import MasterHome from '../components/frontend/layouts/master/MasterHome' // HOME

/**
 * * HOME CONTACT (FRONTEND)
 */
import HomeContact from '../components/frontend/support/contact/HomeContact' // HOME (CONTACT)



/**
 * * LAYOUTS (BACKEND)
*/
import Master from '../components/backend/api/v1/system/panel/layouts/master/Master' // MASTER

/**
 * * AUTH
*/
import AuthLogin from '../components/backend/api/v1/system/panel/auth/Login' // LOGIN

/**
 * * DASHBOARD (MODULE 1.0)
    * OVERVIEW (MODULE 1.1)
*/
import Overview from '../components/backend/api/v1/system/panel/dashboard/Overview' // OVERVIEW (MODULE 1.0)

/**
 * * SUPPORT (MODULE 2.0)
    * CONTACT (MODULE 2.1)
 */
import Contact from '../components/backend/api/v1/system/panel/support/contact/Contact' // CONTACT (MODULE 2.1)

Vue.use(VueRouter)

const routes = [

    {
        path: '/',
        component: MasterHome,
        children: [

            /**
             * * AUTH
            */
           { path: 'login', component: AuthLogin, name: 'auth.login' }, // LOGIN
            
            { path: '', component: HomeContact, name: 'home.index' }, // HOME (CONTACT)

        ] // children

    }, //

    {
        path: '/',
        component: Master,
        meta: { auth: true },
        children: [

            /**
             * * DASHBOARD (MODULE 1.0)
                * OVERVIEW (MODULE 1.1)
            */
            { path: 'dashboard/overview', component: Overview, name: 'overview.index' }, // OVERVIEW (MODULE 1.1)

            /**
                * * REGISTRATION (MODULE 2.0)
                * INDICATED (MODULE 2.1)
            */
           { path: 'support/contact', component: Contact, name: 'contact.index' }, // CONTACT (MODULE 2.1)

        ] // children

    }, //

]; // routes

const router = new VueRouter
(
    {
        routes, // routes
    }

) // router

router.beforeEach( (to, from, next) => {

    if ( to.meta.auth && !store.state.login.authenticated) {

        store.commit('CHANGE_URL_BACK', to.name)

        return router.push( { name: 'auth.login' } )

    } // if

    if ( to.matched.some(record => record.meta.auth) && !store.state.login.authenticated) {

        store.commit('CHANGE_URL_BACK', to.name)

        return router.push( { name: 'auth.login' } )

    } // if

    next()

}) // beforeEach

export default router
