<template>
    <div id="curtain">
        <div class="makeVisible" style="height: 100vh">
            <div class="container">

                <div id="navbar">
                    <navbar></navbar>
                </div>
                
                <div class="row" style="padding-top: 8%; padding-left: 30px;">
                    <div class="col" >
                        <h1>Education</h1>

                        <h4 style="padding-top: 10%; font-weight: bold;">BSc with Honors in Computer Science</h4>
                        <h4>Western University</h4>
                        <h6>January 2016 to April 2020</h6>

                        <br><br>
                        <h4 style="font-weight: bold;">BSc with Honors in Health Science</h4>
                        <h4>Western University</h4>
                        <h6>September 2010 to April 2014</h6><br><br>
                    </div>
                    <div class="col">
                        <h1>Experiences</h1>

                        <h4 style="padding-top: 10%; font-weight: bold;">Portfolio Website</h4>
                        <h4>Web Developer</h4>
                        <h5>September 2020</h5>
                        <h6>Laravel, Vue, PHP, HTML/CSS, JavaScript, Bootstrap, Git</h6><br><br>
                            
                        <h4 style="font-weight: bold;">Cookie Clicker Startup</h4>
                        <h4>Web Developer</h4>
                        <h5>August 2020</h5>
                        <h6>React, HTML/CSS, JavaScript, Bootstrap, Git</h6><br><br>

                        <h4 style="font-weight: bold;">La Camila Coffee Co. E-Commerce Website</h4>
                        <h4>Full Stack Developer</h4>
                        <h5>January 2020 to Present</h5>
                        <h6>PHP, HTML/CSS, JavaScript, jQuery, Bootstrap, MySQL, Git</h6><br><br>

                        <h4 style="font-weight: bold;">Western University Software Researcher</h4>
                        <h4>Back End Developer</h4>
                        <h5>June 2018 to August 2019</h5>
                        <h6>Java, Docker, Kubernetes</h6><br><br>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Resume Component mounted.')
        },
        
    }
</script>