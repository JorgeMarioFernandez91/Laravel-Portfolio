<template>
    <workpage 
        mainTitle=    "Clicker Startup Game"
        :techChild=   "techParent"
        infoTitle=    "Clicker Startup Game"
        :paraChild=   "paraParent"
        hrefName=     "https://cookieclickerstartup.netlify.app"
        hrefCurrWork= "https://cookieclickerstartup.netlify.app"
        hrefPrevWork= "/lacamila"
        hrefNextWork= "/portfolio"
        :imgChild=    "imgParent" />
</template>

<script>
    export default {
        mounted() {
            // console.log('Clicker Start Up Component mounted.')
        },
        data: () => ({
            arrowGrow1: false,
            arrowGrow2: false,
            arrowGrow3: false,
            techParent: ["React", "JavaScript", "HTML/CSS", "Bootstrap"],
            paraParent: ["Using React.js to manage numerous states, this web app pays tribute to the popular Cookie Clicker web game, but with a modern tech start-up twist.",
                        "By clicking the computer and hiring more employees to do the clicking, players can unlock perks to quickly make their tech startup the fastest growing company in Silicon Valley."],
            imgParent: ["/images/clickerstartup-intro-message.PNG", "/images/clickerstartup-gameplay.PNG", "/images/clickerstartup-gameplay-more.PNG"],
        }),
    }
</script>