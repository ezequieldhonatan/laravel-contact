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
                                <form class="form">

                                    <input type="hidden" class="form-control" id="ip">

                                    <div class="row">

                                        <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">
                                            
                                            <div :class="['form-group', { 'has-error': errors.name } ]">
                                                <label for="name">Nome</label>
                                                <input type="text" class="form-control" id="name">
                                                <div v-if="errors.name">{{ errors.name[0] }}</div>
                                            </div>

                                        </div> <!-- col-sm-6 col-xs-6 col-lg-6 col-md-6 -->

                                        <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">

                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" id="email">
                                                <div v-if="errors.email">{{ errors.email[0] }}</div>
                                            </div>

                                        </div> <!-- col-sm-6 col-xs-6 col-lg-6 col-md-6 -->

                                    </div> <!-- row -->

                                    <div class="row">

                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                                                
                                            <div class="form-group">
                                                <label for="annex">Anexo</label>
                                                <input type="file" class="form-control" id="annex">
                                                <div v-if="errors.annex">{{ errors.annex[0] }}</div>
                                            </div>

                                        </div> <!-- col-sm-6 col-xs-6 col-lg-6 col-md-6 -->

                                    </div> <!-- row -->

                                    <div class="row">

                                        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                                            
                                            <div class="form-group">
                                                <label for="message">Mensagem</label>
                                                <textarea class="textarea form-control" rows="5" cols="5" id="message"></textarea>
                                                <div v-if="errors.message">{{ errors.message[0] }}</div>
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
    
    data () {

        return {

            errors: {},

        } // return

    }, // data

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