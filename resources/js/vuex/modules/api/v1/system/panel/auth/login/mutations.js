export default {

    AUTH_USER_OK (state, user) {
        
        state.authenticated = true,
        state.me = user

    }, // AUTH_USER_OK

    CHANGE_URL_BACK (state, url) {

        state.urlBack = url

    }, // CHANGE_URL_BACK
    
} // export default