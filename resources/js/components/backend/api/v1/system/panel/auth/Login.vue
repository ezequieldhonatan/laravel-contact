<template>
    <div>
        
        <br> <br>

        <div class="row justify-content-center">

            <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">

                <div class="card">

                    <div class="card-header">
                        Área restrita
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">

                                <!-- LOGIN
                                ================================================== -->
                                <form class="form" @submit.prevent="login">

                                    <div class="row">

                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                                            
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" id="email" v-model="formData.email">
                                                <div v-if="errors.email">{{ errors.email[0] }}</div>
                                            </div>

                                        </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->

                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">

                                            <div class="form-group">
                                                <label for="password">Senha</label>
                                                <input type="password" class="form-control" id="password" v-model="formData.password">
                                                <div v-if="errors.password">{{ errors.password[0] }}</div>
                                            </div>

                                        </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->

                                    </div> <!-- row -->

                                    <div class="row">

                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                                            
                                            <div class="form-group">
                                                <button class="btn btn-outline-success" type="submit">
                                                    Acessar
                                                </button>
                                            </div>

                                        </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->

                                    </div> <!-- row -->

                                </form> <!-- form -->

                            </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->

                        </div> <!-- row -->

                    </div> <!-- card-body -->

                </div> <!-- card -->

            </div> <!-- col-sm-6 col-xs-6 col-lg-6 col-md-6 -->
            
        </div> <!-- row -->
        
    </div> <!-- -->
</template> <!-- -->

<script>
export default {

    data () {

        return {

            errors: {},

            formData: {

                email: '',
                password: '',

            }, // formData

        } // return

    }, // data

    methods: {

        login () {

            this.$store.dispatch('login', this.formData)
                        .then( () => this.$router.push( { name: 'overview.index' } ) )
                        .catch( () => {
                            this.$snotify.error('Dados inválidos!', 'Ops...')
                        })
        }, // login

    }, // methods

} // export default
</script>

<style scroped>

.has-error {
    
    color: red;

} /** has-error */

.has-error  input {
    
    border: 1px solid red;

} /** has-error input */

</style>