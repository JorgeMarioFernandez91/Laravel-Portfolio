<template>
    <div @click="childMethod()">
        something
    </div>
    
</template>

<script>
    export default {
        name: "WorkLink",
        props: ['workNum', 'workTitle', 'workDesc'],
        mounted() {
            console.log('Worklink Component mounted.')
        },
        data: () => ({
            fadeIn: true,
            
            hoverWork: false,
            showWork: true,
        }),
        methods: {
             childMethod(){
                //  this.$emit()
                 console.log("something happens");
             },
        }
    }
</script>