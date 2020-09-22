<template>
    <div id="curtain">        
        <div class="makeVisible" style="height: 100vh">

            <div id="navbar">
                <navbar></navbar>
            </div>

            <div class="container" style="padding-top: 18%; ">
                <span class="row text-center">
                    <div class="col text-center">
                        <h1 style="font-size: 70px; ">Clicker Startup Game</h1>     
                    </div>
                </span>
            </div> 
            <div class="container" style="padding-top: 5%;">
                <div class="row">
                    <div class="col ">
                    </div>
                    <div class="col ">
                        <span class="">
                            <h5 style="text-align: center">React</h5>    
                            <h5 style="text-align: center">JavaScript</h5>
                            <h5 style="text-align: center">HTML/CSS</h5>
                            <h5 style="text-align: center">Bootstrap</h5>
                        </span> 
                    </div>
                    <div class="col ">
                    </div>
                </div>
            </div>  

            <div class="container" style="padding-top: 5%;">
                <div class="row">
                    <div class="col ">
                    </div>
                    <div class="col" align="center">
                        <!-- @click make #lacamila-more fade in -->
                        <a href="#startupclicker-more" style="text-decoration: none; color: black;" @mouseover="arrowGrow = true" @mouseleave="arrowGrow = false">
                            <svg v-bind:class="{'arrow-grow': arrowGrow, 'arrow-style': (arrowGrow == false)}" 
                                viewBox="0 0 16 16" class="bi bi-chevron-double-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a> 
                    </div>
                    <div class="col ">
                    </div>
                </div>

            </div>  

        </div>
        <div id="startupclicker-more" style="height: 100vh" >
            <div class="container" >
                <div class="row" style="padding-top: 5%;">
                    <div class="col-5 tag" >
                        <!-- information and links -->
                        <h3>Clicker Startup Game</h3>
                        <br>
                        <h5 style="text-align:justify;">
                            Using React.js to manage numerous states, this web app pays tribute to the popular Cookie Clicker web game, 
                            but with a modern tech start-up twist. 
                        <br>
                        <br>
                            By clicking the computer and hiring more employees to do the clicking, players can unlock perks to quickly make 
                            their tech startup the fastest growing company in Silicon Valley.
                        </h5>
                        <a href="https://cookieclickerstartup.netlify.app/" style="color: black;">https://cookieclickerstartup.netlify.app</a>
                    </div>
                    
                </div>
                <div class="row tag" style="padding-top: 2%;">
                    <!-- photos -->
                    <div class="col ">
                        <img class="img-align" src="/images/clickerstartup-intro-message.PNG" alt="image">
                    </div>
                </div>
                <div class="row tag" style="padding-top: 2%;">
                    <div class="col ">
                        <img class="img-align" src="/images/clickerstartup-gameplay.PNG" alt="image">
                    </div>
                </div>
                <div class="row tag" style="padding-top: 2%;">
                    <div class="col ">
                        <img class="img-align" src="/images/clickerstartup-gameplay-more.PNG" alt="image">
                    </div>
                </div>
            </div>
            <br><br>
        </div>
        
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Cookie Clicker Component mounted.')
        },
        data: () => ({
            arrowGrow: false,
        }),
    }
</script>