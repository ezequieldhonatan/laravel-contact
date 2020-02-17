import { NAME_TOKEN } from '../../../../../../../../config/configs'; // CONFIGS

export default {
    
    login (context, params) {
        context.commit('PRELOADER', true)

        return axios.post('/api/auth', params)
                    .then( response => {
                        context.commit('AUTH_USER_OK', response.data.user)

                        localStorage.setItem(NAME_TOKEN, response.data.token)
                    })
                    .catch( error => console.log(error) )
                    .finally( () => context.commit('PRELOADER'), false )

    }, // login

    checkLogin (context) {
        context.commit('PRELOADER', true)

        return new Promise( (resolve, reject) => {

            const token = localStorage.getItem(NAME_TOKEN)

            if ( !token )
                return reject()

            axios.get('/api/user')
                    .then(response => {
                        context.commit('AUTH_USER_OK', response.data.user)

                        resolve()
                    })
                    .catch( () => reject () )
                    .finally( () => context.commit('PRELOADER'), false )

        }) // Promise

    }, // checkLogin

} // export default