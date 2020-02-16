import axios from 'axios' // AXIOS

import { URL_BASE } from '../../../../../../../../config/configs' // CONFIGS

const RESOURCE = 'support/contact' // RESOURCE

export default {

    // INDEX
    contact (context, params) {
        context.commit('PRELOADER', true)
        
        axios.get(`${URL_BASE}${RESOURCE}`, { params } )
                .then( response => context.commit('LOAD_CONTACTS', response.data) )
                .catch( error => console.log(error) )
                .finally( () => context.commit('PRELOADER'), false )

    }, // contact
    
} // export default