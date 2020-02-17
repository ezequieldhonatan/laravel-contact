<template>
    <div>
        
        <div class="preloader" v-show="preloader">

            <img src="assets/api/v1/system/panel/images/preloader.gif" alt="Preloader...">

        </div> <!-- preloader -->

    </div> <!-- -->
</template> <!-- -->

<script>
export default {

    computed: {

        preloader () {

            return this.$store.state.preloader.loading

        }, // preloader

    }, // computed
    
} // export default
</script>

<style scoped>
    
    .preloader {

        background: #0000;
        position: absolute;
        z-index: 9999;
        opacity: .6;
        width: 100%;
        height: 100%;
        margin: 0;
        text-align: center;
        padding: 10%;

    } /** preloader */

    .preloader img {

        max-width: 300px;
        
    } /** preloader img */

</style>
