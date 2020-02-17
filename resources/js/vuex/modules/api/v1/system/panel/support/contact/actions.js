import axios from 'axios' // AXIOS

import { URL_BASE } from '../../../../../../../../config/configs' // CONFIGS

const RESOURCE = 'support/contact' // RESOURCE

const CONFIGS = {

    headers: {

        'content-type': 'multipart/form-data',

    }, // headers

} // CONFIGS

export default {

    // INDEX
    contact (context, params) {
        context.commit('PRELOADER', true)
        
        axios.get(`${URL_BASE}${RESOURCE}`, { params } )
                .then( response => context.commit('LOAD_CONTACTS', response.data) )
                .catch( error => console.log(error) )
                .finally( () => context.commit('PRELOADER'), false )

    }, // contact

    // STORE
    store (context, formData) {
        context.commit('PRELOADER', true)
        
        return new Promise( (resolve, reject) => {

            axios.post( `${URL_BASE}${RESOURCE}`, formData, CONFIGS )
                    .then( response => resolve() )
                    .catch( error => reject (error.response) )
                    .finally( () => context.commit('PRELOADER'), false )

        }) // Promise

    }, // store
    
} // export default