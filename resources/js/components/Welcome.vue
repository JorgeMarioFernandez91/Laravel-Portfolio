<template>
    <div id="curtain">
        <div v-bind:class="[fadeIn == true ? 'makeVisible': 'makeInvisible' ]">

            <div class="container" style="padding-top: 25%">

                <!-- main -->
                <span class="row">
                    <span class="col">
                        <h1>My Portfolio</h1>
                        <h2>Jorge Mario Fernandez</h2>
                    </span>
                    <span class="col">
                    
                    </span>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Welcome Component mounted.')
        },
        updated(){
            console.log("updated");
        },
        data: () => ({
            fadeIn: true,
        }),
        methods: {
            fade(){
                this.fadeIn = !this.fadeIn;
                console.log(this.fadeIn);
            },
            
        }
    }
</script>
