<template>
    <div id="curtain">
        <div class="makeVisible" >
            <div class="fade-gradient">
                <div style="height: 100vh">

                    <div id="navbar">
                        <navbar></navbar>
                    </div>
                    
                    <div class="container">
                        <div class="row" style="padding: 10% 20px 20px 20px">

                            <div class="col">
                                <!-- image -->
                                <img :src="[image[0]]" class="self-photo-align" alt="photo">
                            </div>
                            <div class="col" style="padding: 20px;">
                                <!-- desc -->
                                <h1>A little about <span style="font-style: italic;">myself!</span> </h1><br>

                                <h4>My name is Jorge Mario, but everyone refers to me as Mario!</h4>

                                <h4>I recently graduate from Western University with a BSc with Honors in Computer Science. 
                                    But my passion for software has always gone past the classroom. As such, I always have one or two projects 
                                    in the works.So check back often to find out what else I'm working on! </h4>
                                    
                                <h4>Currently I'm tryting to become the best developer I can be with the goal of becoming a full stack developer.</h4>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            // console.log('About Component mounted.')
        },
        data: ()=> ({
            image: ["/images/photo-self.png"],
        })
        
    }
</script>