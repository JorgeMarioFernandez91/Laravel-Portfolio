<template>
    <div id="curtain">        
        <div v-bind:class="[fadeIn == true ? 'makeVisible': 'makeInvisible' ]">

            <div id="navbar">
                <navbar></navbar>
            </div>

            la camila page

        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('La Camila Component mounted.')
        },
        
    }
</script>