<template>
    <workpage 
        mainTitle=    "Portfolio"
        :techChild=   "techParent"
        infoTitle=    "Portfolio"
        :paraChild=   "paraParent"
        hrefName=     "http://jorgemariofernandez.com"
        hrefCurrWork= "http://jorgemariofernandez.com"
        hrefPrevWork= "/clickerstartupgame"
        hrefNextWork= "/thesis"
        :imgChild=    "imgParent" />
</template>

<script>
    export default {
        mounted() {
            // console.log('Portfolio Component mounted.')
        },
        data: () => ({
            arrowGrow1: false,
            arrowGrow2: false,
            arrowGrow3: false,
            techParent: ["Laravel", "Vue", "JavaScript", "HTML/CSS", "Bootstrap"],
            paraParent: ["By using Laravel and Vue I designed and implemented this portfolio to have a minimalistic and modern aesthetic that looks great on all devices and showcases my work as a full stack and web developer.",
                        "Users can browse the work that I've done, learn about me as a developer, and view my resume."],
            imgParent: ["/images/portfolio-home.PNG", "/images/portfolio-home-hover.PNG", "/images/portfolio-work-ex.PNG"],
        }),
    }
</script>