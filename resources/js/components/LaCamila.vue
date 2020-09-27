<template>
    <workpage 
        mainTitle=    "La Camila E-Commerce Website"
        :techChild=   "techParent"
        infoTitle=    "La Camila Coffee Co."
        :paraChild=   "paraParent"
        hrefName=     "https://trilladoraytostadoralacamila.com/"
        hrefCurrWork= "https://trilladoraytostadoralacamila.com/"
        hrefPrevWork= "/thesis"
        hrefNextWork= "/clickerstartupgame"
        :imgChild=    "imgParent"  />
</template>

<script>
    export default {
        mounted() {
            console.log('La Camila Component mounted.')
        },
        data: () => ({
            arrowGrow1: false,
            arrowGrow2: false,
            arrowGrow3: false,
            techParent: ["PHP", "JavaScript", "HTML/CSS", "Bootstrap", "MySQL"],
            paraParent: ["A Colombian company that prides itself in growing and processing quality coffee products in an environmentally sustainable manner.",
                        "This website was designed from the ground up to have a modern and responsive layout that looks great on all devices. This allows the traditional practice of growing coffee to be present and successful in today's e-markets."],
            imgParent: ["/images/lacamila-welcome-page.PNG", "/images/lacamila-services.PNG", "/images/lacamila-products.PNG"],
        }),
    }
</script>