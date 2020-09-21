<template>
    <div id="curtain">        
        <div class="makeVisible" style="height: 100vh">

            <div id="navbar">
                <navbar></navbar>
            </div>

            <div class="container" style="padding-top: 18%; ">
                <span class="row text-center">
                    <div class="col text-center">
                        <h1 style="font-size: 70px; ">La Camila E-Commerce Website</h1>     
                    </div>
                </span>
            </div> 
            <div class="container" style="padding-top: 5%;">
                <div class="row">
                    <div class="col ">
                    </div>
                    <div class="col ">
                        <span class="">
                            <h5 style="text-align: center">PHP</h5>    
                            <h5 style="text-align: center">JavaScript</h5>
                            <h5 style="text-align: center">HTML/CSS</h5>
                            <h5 style="text-align: center">Bootstrap</h5>
                            <h5 style="text-align: center">MySQL</h5>
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
                        <a href="#lacamila-more" style="text-decoration: none; color: black;" @mouseover="arrowGrow = true" @mouseleave="arrowGrow = false">
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
        <div id="lacamila-more" style="height: 100vh">
            
            <div class="row">
                <!-- information and links -->
            </div>
            <div class="row">
                <!-- photos -->
            </div>


        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('La Camila Component mounted.')
        },
        data: () => ({
            arrowGrow: false,
        }),
    }
</script>