<template>
    <div id="curtain">

        
        
        <div v-bind:class="[fadeIn == true ? 'makeVisible': 'makeInvisible' ]">

            <div id="navbar">
                <navbar></navbar>
            </div>

            <div class="container" style="padding-top: 18%">

                <!-- main -->
                <span class="row">
                    <span class="col up-slide" style="padding-left: 20px" >
                        <span class="row">
                            <h1  style="padding-left: 15px; font-size: 80px">My Portfolio</h1>
                        </span>
                        <span class="row">
                            <ul  style="list-style: none; padding-left: 20px;">
                                <li> <h3>Full Stack Developer</h3> </li>
                                <li> <h3>Web Developer</h3> </li>
                            </ul>
                        </span>
                        
                    </span>
                    <span class="col" style="padding: 25px;">
                        <div id="left-slide" >
                            <a href="" class="work-links">1</a >
                            <a href="" class="work-links">2</a >
                            <a href="" class="work-links">3</a >
                            <a href="" class="work-links">4</a >
                        </div>
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
