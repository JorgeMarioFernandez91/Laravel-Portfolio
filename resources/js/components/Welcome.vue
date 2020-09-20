<template>
    <div id="curtain">        
        <div class="makeVisible">

            <div id="navbar">
                <navbar></navbar>
            </div>

            <div class="container" style="padding-top: 18%">
                <span class="row">
                    <!-- <span class="col-1 testBorder "></span> -->
                    <!-- my portfolio and titles -->
                    <span class="col-xl up-slide" style="padding-left: 20px" >
                        <span class="row">
                            <h1  style="padding-left: 15px; font-size: 70px">My Portfolio</h1>
                        </span>
                        <span class="row">
                            <ul  style="list-style: none; padding-left: 20px;">
                                <li> <h3>Full Stack Developer</h3> </li>
                                <li> <h3>Web Developer</h3> </li>
                            </ul>
                        </span>
                    </span>
                    <!-- work links -->
                    <span class="col-lg">
                        <span class="row ">
                            <div class="left-slide ">

                                <span id="worklink" >
                                        <worklink />
                                </span>

                                <span v-if="showWork1"> 
                                    <div    @mouseover="hoverWork1 = true; updateWork1()"
                                            @click="hoverWork1 = true; updateWork1()" 
                                            @mouseleave="hoverWork1 = false; updateWork1()"
                                            style="display: inline-block; margin-right: 30px;">
                                            <div class="row" style="padding: 0 0 20px 35px;">
                                                <a href="/lacamila" class="work-links testBorder" > 
                                                    <span    
                                                        v-bind:class="{'makeWorkVisible': showWork1, 'increaseHoverArea': hoverWork1}">1</span>  
                                                </a >
                                            </div>
                                            <div class="row" style="padding: 0 0 20px 35px;">
                                                <span v-if="hoverWork1" class="testBorder"> 
                                                    <h5 class="work-desc-slide">La Camila Coffee Co Website</h5>
                                                    <h6 class="work-desc-slide">An e-commerce website I designed and developed to increase the exposure of an international company which specializes in growing and processing coffee in an environmentally conscious manner.</h6> 
                                                </span> 
                                            </div>
                                    </div>                          
                                </span>
                                
                                <span v-if="showWork2"> 
                                    <div    @mouseover="hoverWork2 = true; updateWork2()"
                                            @click="hoverWork2 = true; updateWork2()" 
                                            @mouseleave="hoverWork2 = false; updateWork2()"
                                            style="display: inline-block; margin-right: 30px;">
                                            <div class="row" style="padding: 0 0 20px 35px;">
                                                <a href="#" class="work-links testBorder" > 
                                                    <span    
                                                        v-bind:class="{'makeWorkVisible': showWork2, 'increaseHoverArea': hoverWork2}">2</span>  
                                                </a >
                                            </div>
                                            <div class="row" style="padding: 0 0 20px 35px;">
                                                <span v-if="hoverWork2"> 
                                                    <h5 class="work-desc-slide">Clicker Start Up Game</h5>
                                                    <h6 class="work-desc-slide">An online web game created to maximize user retention by providing fun and engaging gameplay. An homage to Cookie Clicker.</h6> 
                                                </span> 
                                            </div>
                                    </div>                          
                                </span>
                                
                                <span v-if="showWork3"> 
                                    <div    @mouseover="hoverWork3 = true; updateWork3()"
                                            @click="hoverWork3 = true; updateWork3()" 
                                            @mouseleave="hoverWork3 = false; updateWork3()"
                                            style="display: inline-block; margin-right: 30px;">
                                            <div class="row" style="padding: 0 0 20px 35px;">
                                                <a href="#" class="work-links testBorder" > 
                                                    <span    
                                                        v-bind:class="{'makeWorkVisible': showWork3, 'increaseHoverArea': hoverWork3}">3</span>  
                                                </a >
                                            </div>
                                            <div class="row" style="padding: 0 0 20px 35px;">
                                                <span v-if="hoverWork3"> 
                                                    <h5 class="work-desc-slide">Portfolio</h5>
                                                    <h6 class="work-desc-slide">My online portfolio you are currently visiting!</h6> 
                                                </span> 
                                            </div>
                                    </div>                          
                                </span>
                                
                                <span v-if="showWork4"> 
                                    <div    @mouseover="hoverWork4 = true; updateWork4()"
                                            @click="hoverWork4 = true; updateWork4()" 
                                            @mouseleave="hoverWork4 = false; updateWork4()"
                                            style="display: inline-block;">
                                            <div class="row" style="padding: 0 0 20px 35px;">
                                                <a href="#" class="work-links testBorder" > 
                                                    <span    
                                                        v-bind:class="{'makeWorkVisible': showWork4, 'increaseHoverArea': hoverWork4}">4</span>  
                                                </a >
                                            </div>
                                            <div class="row" style="padding: 0 0 20px 35px;">
                                                <span v-if="hoverWork4"> 
                                                    <h5 class="work-desc-slide">Detecting Galaxies</h5>
                                                    <h6 class="work-desc-slide">My Computer Science graduating thesis.</h6> 
                                                </span> 
                                            </div>
                                    </div>                          
                                </span>
                                
                            </div>

                        </span>
                        
                    </span>
                    <!-- <span class="col-xl-1 testBorder "></span> -->
                </span>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            // console.log('Welcome Component mounted.')
        },
        updated(){
            // console.log("updated");
        },
        data: () => ({
            hoverWork1: false,
            hoverWork2: false,
            hoverWork3: false,
            hoverWork4: false,
            
            showWork1: true,
            showWork2: true,
            showWork3: true,
            showWork4: true,
        }),
        methods: {
            
            updateWork1(){ // allows the hovered element to stay visible while hiding the others
                // console.log("something");
                if (this.hoverWork1 == true){
                    this.showWork2 = false;
                    this.showWork3 = false;
                    this.showWork4 = false;
                }
                else {
                    this.showWork2 = true;
                    this.showWork3 = true;
                    this.showWork4 = true;
                }
            },
            updateWork2(){
            
                if (this.hoverWork2 == true){
                    this.showWork1 = false;
                    this.showWork3 = false;
                    this.showWork4 = false;
                }
                else {
                    this.showWork1 = true;
                    this.showWork3 = true;
                    this.showWork4 = true;
                }
            },
            updateWork3(){
            
                if (this.hoverWork3 == true){
                    this.showWork1 = false;
                    this.showWork2 = false;
                    this.showWork4 = false;
                }
                else {
                    this.showWork1 = true;
                    this.showWork2 = true;
                    this.showWork4 = true;
                }
            },
            updateWork4(){
            
                if (this.hoverWork4 == true){
                    this.showWork1 = false;
                    this.showWork2 = false;
                    this.showWork3 = false;
                }
                else {
                    this.showWork1 = true;
                    this.showWork2 = true;
                    this.showWork3 = true;
                }
            },
            
        }
    }
</script>
