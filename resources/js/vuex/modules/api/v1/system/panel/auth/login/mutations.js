export default {

    AUTH_USER_OK (state, user) {
        
        state.authenticated = true,
        state.me = user

    }, // AUTH_USER_OK
    
} // export default