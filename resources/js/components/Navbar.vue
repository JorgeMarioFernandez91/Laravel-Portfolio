<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Jorge Mario Fernandez</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <!-- <a class="nav-item nav-link active" href="#">Jorge Mario Fernandez<span class="sr-only">(current)</span></a> -->
                    <a class="nav-item nav-link " href="#">About</a>
                    <a class="nav-item nav-link" href="#">Work</a>
                    <a class="nav-item nav-link" href="#">Resume</a>
                    <a class="nav-item nav-link" href="#">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Navbar Component mounted.')
        },
        
    }
</script>
