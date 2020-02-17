export default {
    
    login (context, params) {
        context.commit('PRELOADER', true)

        return axios.post('/api/auth', params)
                    .then( response => {
                        context.commit('AUTH_USER_OK', response.data.user)
                    })
                    .catch( error => reject (error.response) )
                    .finally( () => context.commit('PRELOADER'), false )

    }, // login

} // export default