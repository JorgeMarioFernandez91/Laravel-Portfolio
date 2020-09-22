<template>
    <div id="curtain">        
        <div class="makeVisible" style="height: 100vh">

            <div id="navbar">
                <navbar></navbar>
            </div>

            <div class="container" style="padding-top: 10%; ">
                <span class="row text-center">
                    <div class="col-1">
                        <a href="/portfolio" class="vertical-center" style="text-decoration: none; color: black;" @mouseover="arrowGrow1 = true" @mouseleave="arrowGrow1 = false">
                            <svg v-bind:class="{'arrow-grow': arrowGrow1, 'arrow-style': (arrowGrow1 == false)}" 
                                viewBox="0 0 16 16" class="bi bi-chevron-double-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col text-center">
                        <h1 class="work-title-size;">Detecting Simulated Galaxies</h1>     
                    </div>
                    <div class="col-1">
                        <a href="/lacamila" class="vertical-center" style="text-decoration: none; color: black;" @mouseover="arrowGrow2 = true" @mouseleave="arrowGrow2 = false">
                            <svg v-bind:class="{'arrow-grow': arrowGrow2, 'arrow-style': (arrowGrow2 == false)}" 
                                viewBox="0 0 16 16" class="bi bi-chevron-double-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
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

            <div class="container" style="padding-top: 10%;">
                <div class="row">
                    <div class="col ">
                    </div>
                    <div class="col" align="center">
                        <!-- @click make #lacamila-more fade in -->
                        <a href="#thesis-more" class="vertical-center" style="text-decoration: none; color: black; " @mouseover="arrowGrow3 = true" @mouseleave="arrowGrow3 = false">
                            <svg v-bind:class="{'arrow-grow': arrowGrow3, 'arrow-style': (arrowGrow3 == false)}" style="width: 30%;"  
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
                    <div class="col tag" >
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
            arrowGrow1: false,
            arrowGrow2: false,
            arrowGrow3: false,
        }),
    }
</script>