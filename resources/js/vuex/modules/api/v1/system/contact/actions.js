import axios from 'axios' // AXIOS

import { URL_BASE } from '../../../../../../../../config/configs' // CONFIGS

const RESOURCE = 'support/contact' // RESOURCE

export default {

    // STORE
    store (context, params) {
        context.commit('PRELOADER', true)
        
        return new Promise( (resolve, reject) => {

            axios.post(`${URL_BASE}${RESOURCE}`, params)
                    .then(response => resolve() )
                    .catch(error => reject (error.response) )
                    .finally( () => context.commit('PRELOADER'), false )

        }) // Promise

    }, // store
    
} // export default