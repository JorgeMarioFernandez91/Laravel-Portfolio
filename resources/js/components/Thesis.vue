<template>
    <workpage 
        mainTitle=    "Detecting Simulated Galaxies"
        :techChild=   "techParent"
        infoTitle=    "Detecting Simulated Galaxies"
        :paraChild=   "paraParent"
        hrefName=     "One Drive Link"
        hrefCurrWork= "https://uwoca-my.sharepoint.com/personal/jferna29_uwo_ca/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fjferna29%5Fuwo%5Fca%2FDocuments%2FFTR%20%5FJorgeFernandez%20%281%29%2Epdf&parent=%2Fpersonal%2Fjferna29%5Fuwo%5Fca%2FDocuments&originalPath=aHR0cHM6Ly91d29jYS1teS5zaGFyZXBvaW50LmNvbS86YjovZy9wZXJzb25hbC9qZmVybmEyOV91d29fY2EvRVdCNnl4ZmZjOUJKcVY2WmxTbmJ3WFFCMG5FcHZvRXpSX0tQd3B3emJOU2taQT9ydGltZT1hVVdpRXZ4aTJFZw"
        hrefPrevWork= "/portfolio"
        hrefNextWork= "/lacamila"
        :imgChild=    "imgParent" />
</template>

<script>
    export default {
        mounted() {
            // console.log('Detecting Sim Galaxies Component mounted.')
        },
        data: () => ({
            arrowGrow1: false,
            arrowGrow2: false,
            arrowGrow3: false,
            techParent: ["Python", "OpenCV", "Python Imaging Library", "SciPy"],
            paraParent: ["The purpose of this thesis was to determine if simulated, computer generated images of galaxies, are comparable to images of real galaxies.",
                        "Using computer vision I was able to develop a system that can, with high accuracy, determine if a simulated galaxy is a good representation of a real galaxy or not. This gives simulation scientists and astronomers in general a new method of testing their results."],
            imgParent: ["/images/thesis-test-accuracies.PNG", "/images/thesis-skill-noskill-comparison.PNG", "/images/thesis-algorithms.PNG"],
        }),
    }
</script>