<template>
    <div>

        <div class="row">

            <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">

                <nav aria-label="breadcrumb">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item">
                            <router-link :to="{ name: 'overview.index' }">
                                Dashboard
                            </router-link>
                        </li>

                        <li class="breadcrumb-item active">Suporte</li>

                    </ol> <!-- breadcrumb -->

                </nav> <!-- breadcrumb -->

            </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->
            
        </div> <!-- row -->

        <div class="row">

            <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">

                <div class="card">

                    <div class="card-header" style="background-color: #FFF">

                        <div class="text-center">
                            <h1>
                                <strong>Contatos</strong>
                            </h1>
                        </div>

                    </div> <!-- card-header -->

                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">

                                <!-- TABLE
                                ================================================== -->
                                <div class="table-responsive">

                                    <table class="table table-striped">

                                        <thead class="black white-text">

                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">IP</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">E-mail</th>
                                                <th scope="col">Celular</th>
                                                <th scope="col">Data | Hora</th>
                                            </tr>

                                        </thead> <!-- -->

                                        <tbody>

                                            <tr v-for="contact in contacts.data" :key="contact.id">

                                                <th scope="row">
                                                    <a href="#">
                                                        {{ contact.id }}
                                                    </a>
                                                </th>

                                                <td>
                                                    <a href="#">
                                                        {{ contact.ip }}
                                                    </a>
                                                </td>

                                                <td>
                                                    <a href="#">
                                                        {{ contact.name }}
                                                    </a>
                                                </td>

                                                <td>
                                                    <a href="#">
                                                        {{ contact.email }}
                                                    </a>
                                                </td>

                                                <td>
                                                    <a href="#">
                                                        {{ contact.cell_phone }}
                                                    </a>
                                                </td>

                                                <td>
                                                    <a href="#">
                                                        {{ contact.created_at }}
                                                    </a>
                                                </td>

                                            </tr> <!-- -->

                                        </tbody> <!-- -->

                                    </table> <!-- table -->

                                    <br>

                                    <!-- <p>Total de registros: {{ totalContacts }}</p> -->

                                    <!-- PAGINATION
                                    ================================================== -->
                                    <pagination
                                        :pagination="contacts"
                                        :offset="10"
                                        @paginate="contact"
                                    >
                                    </pagination>

                                </div> <!-- table-responsive -->

                            </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->

                        </div> <!-- row -->

                    </div> <!-- card-body -->

                </div> <!-- card -->

            </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->
            
        </div> <!-- row -->

    </div> <!-- -->
</template> <!-- -->

<script>
import pagination from '../../layouts/pagination/Pagination' // PAGINATION

export default {

    components: {

        pagination, // PAGINATION

    }, // components

    created () {

        this.contact(1)

    }, // created

    computed: {

        contacts () {

            return this.$store.state.contact.items

        }, // contacts

        params () {

            return {

                page: this.contact.current_page

            } // return

        }, // params

    }, // computed
    
    methods: {

        contact (page) {

            this.$store.dispatch( 'contact', { ...this.params, page } )

        }, // contact

    }, // methods

} // export default
</script>

<style scoped>
    
</style>
