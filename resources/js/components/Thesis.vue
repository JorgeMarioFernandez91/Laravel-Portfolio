<template>
    <div id="curtain">        
        <div class="makeVisible" style="height: 100vh">

            <div id="navbar">
                <navbar></navbar>
            </div>

            <div class="container" style="padding-top: 18%; ">
                <span class="row text-center">
                    <div class="col text-center">
                        <h1 style="font-size: 70px; ">Detecting Simulated Galaxies</h1>     
                    </div>
                </span>
            </div> 
            <div class="container" style="padding-top: 5%;">
                <div class="row">
                    <div class="col ">
                    </div>
                    <div class="col ">
                        <span class="">
                            <h5 style="text-align: center">Python</h5> 
                            <h5 style="text-align: center">OpenCV</h5>      
                            <h5 style="text-align: center">Python Imaging Library</h5>
                            <h5 style="text-align: center">SciPy</h5>
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
                        <a href="#thesis-more" style="text-decoration: none; color: black;" @mouseover="arrowGrow = true" @mouseleave="arrowGrow = false">
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
        <div id="thesis-more" style="height: 100vh" >
            <div class="container" >
                <div class="row" style="padding-top: 5%;">
                    <div class="col-5 tag" >
                        <!-- information and links -->
                        <h3>Detecting Simulated Galaxies</h3>
                        <br>
                        <h5 style="text-align:justify;">
                            The purpose of this thesis was to determine if simulated, computer generated images of galaxies, are 
                            comparable to images of real galaxies.  
                        <br>
                        <br>
                            Using computer vision I was able to develop a system that can, with high accuracy, determine if a 
                            simulated galaxy is a good representation of a real galaxy or not. This gives simulation scientists 
                            and astronomers in general a new method of testing their results.
                        </h5>
                        <a href="https://uwoca-my.sharepoint.com/:b:/g/personal/jferna29_uwo_ca/EWB6yxffc9BJqV6ZlSnbwXQB0nEpvoEzR_KPwpwzbNSkZA?e=d0aJDd" style="color: black;">One Drive Link</a>
                    </div>
                    
                </div>
                <div class="row tag" style="padding-top: 2%;">
                    <!-- photos -->
                    <div class="col ">
                        <img class="img-align" src="/images/thesis-test-accuracies.PNG" alt="image">
                    </div>
                </div>
                <div class="row tag" style="padding-top: 2%;">
                    <div class="col ">
                        <img class="img-align" src="/images/thesis-skill-noskill-comparison.PNG" alt="image">
                    </div>
                </div>
                <div class="row tag" style="padding-top: 2%;">
                    <div class="col ">
                        <img class="img-align" src="/images/thesis-algorithms.PNG" alt="image">
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
            console.log('Thesis Component mounted.')
        },
        data: () => ({
            arrowGrow: false,
        }),
    }
</script>