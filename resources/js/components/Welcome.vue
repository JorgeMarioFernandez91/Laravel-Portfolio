<template>
    <div id="curtain">

        
        
        <div v-bind:class="[fadeIn == true ? 'makeVisible': 'makeInvisible' ]">

            <div id="navbar">
                <navbar></navbar>
            </div>

            <div class="container" style="padding-top: 20%">

                <!-- main -->
                <span class="row">
                    <span class="col" style="padding-left: 20px">
                        <h1 style="padding-left: 15px; font-size: 80px">My Portfolio</h1>
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
