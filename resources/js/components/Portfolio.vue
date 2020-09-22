<template>
    <div id="curtain">        
        <div class="makeVisible" style="height: 100vh">

            <div id="navbar">
                <navbar></navbar>
            </div>

            <div class="container" style="padding-top: 18%; ">
                <span class="row text-center">
                    <div class="col text-center">
                        <h1 style="font-size: 70px; ">Portfolio</h1>     
                    </div>
                </span>
            </div> 
            <div class="container" style="padding-top: 5%;">
                <div class="row">
                    <div class="col ">
                    </div>
                    <div class="col ">
                        <span class="">
                            <h5 style="text-align: center">Laravel</h5> 
                            <h5 style="text-align: center">Vue.js</h5>      
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
                        <a href="#portfolio-more" style="text-decoration: none; color: black;" @mouseover="arrowGrow = true" @mouseleave="arrowGrow = false">
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
        <div id="portfolio-more" style="height: 100vh" >
            <div class="container" >
                <div class="row" style="padding-top: 5%;">
                    <div class="col-5 tag" >
                        <!-- information and links -->
                        <h3>Portfolio</h3>
                        <br>
                        <h5 style="text-align:justify;">
                            By using Laravel and Vue I designed and implemented this portfolio to have a minimalistic and modern aesthetic 
                            that looks great on all devices and showcases my work as a full stack and web developer. 
                        <br>
                        <br>
                            Users can browse the work that I've done, learn about me as a developer, and view my resume.
                        </h5>
                        <a href="/" style="color: black;">http://jorgemariofernandez.com</a>
                    </div>
                    
                </div>
                <div class="row tag" style="padding-top: 2%;">
                    <!-- photos -->
                    <div class="col ">
                        <img class="img-align" src="/images/portfolio-home.PNG" alt="image">
                    </div>
                </div>
                <div class="row tag" style="padding-top: 2%;">
                    <div class="col ">
                        <img class="img-align" src="/images/portfolio-home-hover.PNG" alt="image">
                    </div>
                </div>
                <div class="row tag" style="padding-top: 2%;">
                    <div class="col ">
                        <img class="img-align" src="/images/portfolio-work-ex.PNG" alt="image">
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
            console.log('Portfolio Component mounted.')
        },
        data: () => ({
            arrowGrow: false,
        }),
    }
</script>