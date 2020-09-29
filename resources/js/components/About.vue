<template>
    <div id="curtain">
        <div class="makeVisible" style="height: 100vh">
            <div class="container">

                <div id="navbar">
                    <navbar></navbar>
                </div>
                
                <div class="row" style="padding-top: 10%">

                    <div class="col">
                        <!-- image -->
                        <img :src="[image[0]]" class="self-photo-align" alt="photo">
                    </div>
                    <div class="col" style="padding: 20px;">
                        <!-- desc -->
                        <h3>A little about myself!</h3>
                        <p>My name is Jorge Mario, but everyone calls me Mario!</p>
                        <p>I'm a recent graduate from Western University in London, ON Canada.</p>
                        <p>I love working on all parts of software, that is why I'm pursuing the path of full stack development.</p>
                        <p>I'm constantly working on new projects, so check back soon (or contact me), to find out what my latest work is all about!</p>
                    </div>

                </div>


            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('About Component mounted.')
        },
        data: ()=> ({
            image: ["/images/photo-self.png"],
            // image: ["https://images.unsplash.com/photo-1601277237358-93d22efff93f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"],
        })
        
    }
</script>