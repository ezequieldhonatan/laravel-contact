<template>
    <div>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">
                
                <router-link class="navbar-brand" :to="{ name: 'overview.index' }">
                    Painel
                </router-link>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="#">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <router-link class="nav-link" :to="{ name: 'overview.index' }">
                                Dashboard
                            </router-link>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Suporte
                            </a>

                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <router-link class="dropdown-item" :to="{ name: 'contact.index' }">
                                    E-mail ( {{ totalContacts }} )
                                </router-link>
                            </div>

                        </li> <!-- nav-item dropdown -->

                    </ul> <!-- navbar-nav mr-auto -->
                    
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Ezequiel Dhonatan
                                <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="#">
                                    Sair
                                </a>

                            </div> <!-- dropdown-menu dropdown-menu-right -->

                        </li> <!-- nav-item dropdown -->

                    </ul> <!-- navbar-nav ml-auto -->

                </div> <!-- collapse navbar-collapse -->

            </div> <!-- container -->

        </nav> <!-- navbar navbar-expand-md navbar-light bg-white shadow-sm -->

        <br>

        <div class="container">
        
            <router-view></router-view>

        </div> <!-- container -->

    </div> <!-- -->
</template> <!-- -->

<script>
export default {

    computed: {

        totalContacts () {

            return this.$store.state.contact.items.data.length

        }, // totalContact

    }, // computed

} // export default
</script>

<style scoped>
    
</style>
