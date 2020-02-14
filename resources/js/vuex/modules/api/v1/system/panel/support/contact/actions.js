import { URL_BASE } from '../../../../../../../../config/configs' // CONFIGS

const RESOURCE = 'support/contact' // RESOURCE

export default {

    // INDEX
    contact (context) {
        context.commit('PRELOADER', true)
        
        axios.get(`${URL_BASE}${RESOURCE}`)
                .then(response => {
                    console.log(response)

                    context.commit('LOAD_CONTACTS', response)
                })
                .catch(error => {
                    console.log(error)
                })
                .finally( () => context.commit('PRELOADER'), false )

    }, // contact
    
} // export default