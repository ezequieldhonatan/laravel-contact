import { NAME_TOKEN } from '../../../../../../../../config/configs'; // CONFIGS

export default {
    
    login (context, params) {
        context.commit('PRELOADER', true)

        return axios.post('/api/auth', params)
                    .then( response => {
                        const token = response.data.user

                        context.commit('AUTH_USER_OK', token)

                        localStorage.setItem(NAME_TOKEN, token)

                        window.axios.defaults.headers.common['Authorization'] = `Bearer ${ token }`;
                    })
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

    logout (context) {

        localStorage.removeItem(NAME_TOKEN)

        context.commit('AUTH_USER_LOGOUT')
        
    }, // logout

} // export default