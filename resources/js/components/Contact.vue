<template>
    <div id="curtain">
        <div class="makeVisible" >
            <div class="fade-gradient">
                <div style="height: 100vh">

                    <div id="navbar">
                        <navbar></navbar>
                    </div>

                    <div class="container">
                        <div class="row"  style="padding-top: 10%">
                            <div class="col up-slide" >
                                <div class="row">
                                    <div class="col" style="padding: 15% 20px 20px 20px">
                                        <h1>Do you need someone to bring your vision to life?</h1>
                                        <h1>Contact me:</h1><br>
                                        <h3 class="up-slide-delay-1">jmferna91@gmail.com</h3>
                                        <a  href="www.linkedin.com/in/jorge-mario-fernandez-67578b106" style="color:black; font-size: 30px;" ><h3 class="up-slide-delay-2">LinkedIn</h3></a>
                                        <a  href="https://github.com/JorgeMarioFernandez91" style="color:black; font-size: 30px;"><h3 class="up-slide-delay-3">GitHub</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col left-slide">
                                <img :src="[image[0]]" class="self-photo-align" alt="photo">
                                
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
            // console.log('Contact Component mounted.')
        },
        data: ()=> ({
            image: ["/images/photo-self.png"],
        })
    }
</script>