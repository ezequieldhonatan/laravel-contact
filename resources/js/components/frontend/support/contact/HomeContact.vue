<template>
    <div>
        
        <div class="row">

            <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">

                <h1>
                    <strong>Contato</strong>
                </h1>

                <div class="card">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">

                                <!-- CONTATO
                                ================================================== -->
                                <form class="form" @submit.prevent="onSubmit">

                                    <input type="hidden" class="form-control" id="ip" v-model="contact.ip">

                                    <div class="row">

                                        <div class="col-sm-5 col-xs-5 col-lg-5 col-md-5">
                                            
                                            <div :class="['form-group', { 'has-error': errors.name } ]">
                                                <label for="name">Nome</label>
                                                <input type="text" class="form-control" id="name" v-model="contact.name">
                                                <div v-if="errors.name">{{ errors.name[0] }}</div>
                                            </div>

                                        </div> <!-- col-sm-5 col-xs-5 col-lg-5 col-md-5 -->

                                        <div class="col-sm-4 col-xs-4 col-lg-4 col-md-4">

                                            <div :class="['form-group', { 'has-error': errors.email } ]">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" id="email" v-model="contact.email">
                                                <div v-if="errors.email">{{ errors.email[0] }}</div>
                                            </div>

                                        </div> <!-- col-sm-4 col-xs-4 col-lg-4 col-md-4 -->

                                        <div class="col-sm-3 col-xs-3 col-lg-3 col-md-3">
                                                
                                            <div :class="['form-group', { 'has-error': errors.cell_phone } ]">
                                                <label for="cell_phone">Celular</label>
                                                <input type="text" class="form-control" id="cell_phone">
                                                <div v-if="errors.cell_phone">{{ errors.cell_phone[0] }}</div>
                                            </div>

                                        </div> <!-- col-sm-3 col-xs-3 col-lg-3 col-md-3 -->

                                    </div> <!-- row -->

                                    <div class="row">

                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                                                
                                            <div :class="['form-group', { 'has-error': errors.annex } ]">
                                                <label for="annex">Anexo</label>
                                                <input type="file" class="form-control" id="annex" @change="onFileChange">
                                                <div v-if="errors.annex">{{ errors.annex[0] }}</div>
                                            </div>

                                        </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->

                                    </div> <!-- row -->

                                    <div class="row">

                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                                            
                                            <div :class="['form-group', { 'has-error': errors.message } ]">
                                                <label for="message">Mensagem</label>
                                                <textarea class="form-control" rows="5" cols="5" id="message" v-model="contact.message"></textarea>
                                                <div v-if="errors.message">{{ errors.message[0] }}</div>
                                            </div>

                                        </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->

                                    </div> <!-- row -->

                                    <div class="row">

                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                                            
                                            <div class="form-group">
                                                <button class="btn btn-outline-success">
                                                    Enviar
                                                </button>
                                            </div>

                                        </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->

                                    </div> <!-- row -->

                                </form> <!-- form -->

                            </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->

                        </div> <!-- row -->

                    </div> <!-- card-body -->

                </div> <!-- card -->

            </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->
            
        </div> <!-- row -->
        
    </div> <!-- -->
</template> <!-- -->

<script>
export default {

    props: {

        contact: {

            require: true,
            type: Object,
            default: () => {

                return {

                    ip: '',
                    name: '',
                    email: '',
                    cell_phone: '',
                    annex: '',
                    message: '',

                } // return

            }, // default

        }, // contact
        
    }, // props
    
    data () {

        return {

            errors: {},

            upload: null,

        } // return

    }, // data

    methods: {

        onSubmit () {

            const formData = new FormData()

            if ( this.upload != null )
                formData.append('annex', this.upload)

            formData.append('ip', this.contact.ip)
            formData.append('name', this.contact.name)
            formData.append('email', this.contact.email)
            formData.append('cell_phone', this.contact.cell_phone)
            formData.append('message', this.contact.message)

            this.$store.dispatch('store', formData)
                        .then( () => {
                            this.$snotify.success('Enviador com sucesso!', 'Sucesso')
                            
                            this.$router.push( { name: 'auth.login' } )
                        })
                        .catch(errors => {
                            this.$snotify.error('Falha ao enviar!', 'Ops...')

                            this.errors = errors.data.errors
                        })

        }, // submit

        onFileChange (e) {

            let files = e.target.files || e.dataTransfer.files

            if ( !files.length )
                return

            this.upload = files[0]

        }, // onFileChange

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