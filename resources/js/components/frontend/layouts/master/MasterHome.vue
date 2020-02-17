<template>
    <div>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">
                
                <router-link class="navbar-brand" :to="{ name: 'home.index' }">
                    Ezequiel Dhonatan
                </router-link>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="#">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown">

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <strong>Área restrita</strong>
                                </a>
                            </li>

                        </li> <!-- nav-item dropdown -->

                    </ul> <!-- navbar-nav ml-auto -->

                </div> <!-- collapse navbar-collapse -->

            </div> <!-- container -->

        </nav> <!-- navbar navbar-expand-md navbar-light bg-white shadow-sm -->

        <br> <br>

        <div class="container">

            <router-view></router-view>

        </div> <!-- container -->

    </div> <!-- -->
</template> <!-- -->

<script>
export default {

} // export default
</script>

<style scoped>
    
</style>
