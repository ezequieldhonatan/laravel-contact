<template>
    <div>
        
        <div class="row">

            <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">

                <div class="card">
                    
                    <div class="card-body">
                        
                        <h4 class="card-title">
                            <a>Contatos</a>
                        </h4>
                        
                        <p class="card-text">
                            <strong>{{ totalContacts }}</strong>
                        </p>

                    </div> <!-- card-body -->

                </div> <!-- card -->

            </div> <!-- col-sm-6 col-xs-6 col-lg-6 col-md-6 -->
            
        </div> <!-- row -->
        
    </div> <!-- -->
</template> <!-- -->

<script>
export default {

    computed: {

        totalContacts () {

            return this.$store.state.contact.items.data.length

        }, // totalContacts

    }, // computed

} // export default
</script>

<style scroped>

</style>