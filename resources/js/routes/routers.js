import Vue from 'vue' // vue
import VueRouter from 'vue-router' // vue-router



/**
 * * LAYOUTS (FRONTEND)
 */
import MasterHome from '../components/frontend/layouts/master/MasterHome' // HOME

/**
 * * HOME CONTACT (FRONTEND)
 */
import HomeContact from '../components/frontend/contact/HomeContact' // HOME (CONTACT)



/**
 * * LAYOUTS (BACKEND)
*/
import Master from '../components/api/v1/system/panel/layouts/master/Master' // MASTER
import Header from '../components/api/v1/system/panel/layouts/header/Header' // HEADER
import Footer from '../components/api/v1/system/panel/layouts/footer/Footer' // FOOTER

/**
 * * AUTH
*/
import AuthLogin from '../components/api/v1/system/panel/layouts/auth/Login' // LOGIN

/**
 * * DASHBOARD (MODULE 1.0)
    * OVERVIEW (MODULE 1.1)
*/
import Overview from '../components/api/v1/system/panel/dashboard/Overview' // OVERVIEW (MODULE 1.0)

/**
 * * SUPPORT (MODULE 2.0)
    * CONTACT (MODULE 2.1)
 */
import Contact from '../components/api/v1/system/panel/support/contact/Contact' // CONTACT (MODULE 2.1)

Vue.use(VueRouter)

const routes = [

    {
        path: '/',
        component: MasterHome,
        children: [
            
            { path: '', component: HomeContact, name: 'home.index' }, // HOME (CONTACT)

        ] // children

    }, //

    {
        path: '/',
        component: Master,
        children: [
            
            /**
             * * AUTH
            */
            { path: 'login', component: AuthLogin, name: 'auth.login' }, // LOGIN

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
)

export default router