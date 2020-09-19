<template>
    <div id="curtain">        
        <div v-bind:class="[fadeIn == true ? 'makeVisible': 'makeInvisible' ]">

            <div id="navbar">
                <navbar></navbar>
            </div>

            <div class="container" style="padding-top: 18%">
                <span class="row">
                    <!-- my portfolio and titles -->
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
                    <!-- work links -->
                    <span class="col" style="padding: 25px;">
                        <div id="left-slide" class="float-right">
                            <a href="" class="work-links"> 
                                <span   @mouseover="updateWork1()" 
                                        @mouseleave="updateWork1()"
                                        v-bind:class="{'makeWorkVisible': showWork1, 'makeWorkInvisible': (showWork1 == false)}">1</span>
                            </a >

                            <a  href="" class="work-links"> 
                                <span   @mouseover="updateWork2()" 
                                        @mouseleave="updateWork2()" 
                                        v-bind:class="{'makeWorkVisible': showWork2, 'makeWorkInvisible': (showWork2 == false)}">2</span>  
                            </a >

                            <a  href="" class="work-links"> 
                                <span   @mouseover="updateWork3()" 
                                        @mouseleave="updateWork3()" 
                                        v-bind:class="{'makeWorkVisible': showWork3, 'makeWorkInvisible': (showWork3 == false)}">3</span>  
                            </a >

                            <a  href="" class="work-links" style="padding-right: 0;"> 
                                <span   @mouseover="updateWork4()" 
                                        @mouseleave="updateWork4()" 
                                        v-bind:class="{'makeWorkVisible': showWork4, 'makeWorkInvisible': (showWork4 == false)}">4</span>  
                            </a >
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
            // console.log("updated");
        },
        data: () => ({
            fadeIn: true,
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
            fade(){
                this.fadeIn = !this.fadeIn;
            },
            updateWork1(){ // allows the hovered element to stay visible while hiding the others
                this.hoverWork1 = !this.hoverWork1;

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
                this.hoverWork2 = !this.hoverWork2;

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
                this.hoverWork3 = !this.hoverWork3;

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
                this.hoverWork4 = !this.hoverWork4;

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
