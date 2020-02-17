export default {
    
    login (context, params) {

        axios.post('/api/auth', params)
                .then( response => console.log(response) )
                .catch( error => console.log(error) )

    }, // login

} // export default