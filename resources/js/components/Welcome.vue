<template>
    <div id="curtain">        
        <div class="makeVisible" >
            <div class="fade-gradient" style="min-height: 100vh">

            
                <div id="navbar">
                    <navbar></navbar>
                </div>


                <div class="container" style="padding-top: 18%">
                    <span class="row">
                        <!-- my portfolio and titles -->
                        <span class="col-xl up-slide" style="padding-left: 20px" >
                            <span class="row">
                                <h1 style="padding-left: 15px; font-size: 70px">My Portfolio</h1>
                            </span>
                            <span class="row">
                                <ul style="list-style: none; padding-left: 20px;">
                                    <li> <h3>Full Stack Developer</h3> </li>
                                    <li> <h3>Web Developer</h3> </li>
                                </ul>
                            </span>
                        </span>
                        <!-- work links -->
                        <span class="col-lg">
                            <span class="row ">
                                <div class="left-slide ">

                                    <span v-if="showWork1">
                                        <div    id="worklink" 
                                                @click="updateWork('hoverWork1', true)"
                                                @mouseover="updateWork('hoverWork1', true)" 
                                                @mouseleave="updateWork('hoverWork1', false)"
                                                class="work-spacing">
                                                <worklink   :hoverWork="hoverWork1"
                                                            :showWork="showWork1"
                                                            href="/lacamila"
                                                            num="1"
                                                            title="La Camila Coffee Co Website" />
                                        </div>
                                    </span>

                                    <span v-if="showWork2">
                                        <div    id="worklink" 
                                                @click="updateWork('hoverWork2', true)"
                                                @mouseover="updateWork('hoverWork2', true)" 
                                                @mouseleave="updateWork('hoverWork2', false)"
                                                class="work-spacing">
                                                <worklink   :hoverWork="hoverWork2"
                                                            :showWork="showWork2"
                                                            href="/clickerstartupgame"
                                                            num="2"
                                                            title="Clicker Start Up Game" />
                                        </div>
                                    </span>

                                    <span v-if="showWork3">
                                        <div    id="worklink" 
                                                @click="updateWork('hoverWork3', true)"
                                                @mouseover="updateWork('hoverWork3', true)" 
                                                @mouseleave="updateWork('hoverWork3', false)"
                                                class="work-spacing">
                                                <worklink   :hoverWork="hoverWork3"
                                                            :showWork="showWork3"
                                                            href="/portfolio"
                                                            num="3"
                                                            title="Portfolio" />
                                        </div>
                                    </span>

                                    <span v-if="showWork4">
                                        <div    id="worklink" 
                                                @click="updateWork('hoverWork4', true)"
                                                @mouseover="updateWork('hoverWork4', true)" 
                                                @mouseleave="updateWork('hoverWork4', false)"
                                                class="work-spacing">
                                                <worklink   :hoverWork="hoverWork4"
                                                            :showWork="showWork4"
                                                            href="/thesis"
                                                            num="4"
                                                            title="Thesis" />
                                        </div>
                                    </span>
                                    
                                </div>
                            </span>
                        </span>
                    </span>
                </div>
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

            updateWork(name, boolResult){

                if (name == 'hoverWork1'){
                    if (boolResult == true){
                        this.hoverWork1 = true;
                        this.showWork2 = false;
                        this.showWork3 = false;
                        this.showWork4 = false;
                    }
                    else{
                        this.hoverWork1 = false;
                        this.showWork2 = true;
                        this.showWork3 = true;
                        this.showWork4 = true;
                    }
                } else if (name == 'hoverWork2'){
                    if (boolResult == true){
                        this.hoverWork2 = true;
                        this.showWork1 = false;
                        this.showWork3 = false;
                        this.showWork4 = false;
                    }
                    else{
                        this.hoverWork2 = false;
                        this.showWork1 = true;
                        this.showWork3 = true;
                        this.showWork4 = true;
                    }
                } else if (name == 'hoverWork3'){
                    if (boolResult == true){
                        this.hoverWork3 = true;
                        this.showWork1 = false;
                        this.showWork2 = false;
                        this.showWork4 = false;
                    }
                    else{
                        this.hoverWork3 = false;
                        this.showWork1 = true;
                        this.showWork2 = true;
                        this.showWork4 = true;
                    }
                } else if (name == 'hoverWork4'){
                    if (boolResult == true){
                        this.hoverWork4 = true;
                        this.showWork1 = false;
                        this.showWork2 = false;
                        this.showWork3 = false;
                    }
                    else{
                        this.hoverWork4 = false;
                        this.showWork1 = true;
                        this.showWork2 = true;
                        this.showWork3 = true;
                    }
                }
            },
        }
    }
</script>
