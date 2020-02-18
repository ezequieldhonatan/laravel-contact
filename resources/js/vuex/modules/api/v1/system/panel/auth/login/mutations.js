export default {

    AUTH_USER_OK (state, user) {
        
        state.authenticated = true,

        state.me = user

    }, // AUTH_USER_OK

    AUTH_USER_LOGOUT (state) {

        state.me = {}

        state.authenticated = false

        state.urlBack = 'home.index'

    }, // AUTH_USER_LOGOUT

    CHANGE_URL_BACK (state, url) {

        state.urlBack = url

    }, // CHANGE_URL_BACK
    
} // export default