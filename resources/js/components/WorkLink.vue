<template>
    <div >
    </div>
    
</template>

<script>
    export default {
        name: "WorkLink",
        props: {
            workNum: {
                type: String
            },
            workTitle: {
                type: String
            },
            workDesc: {
                type: String
            },
            hoverWork: {
                type: Boolean
            }
        },
        mounted() {
            console.log('Worklink Component mounted.')
        },
        data: () => ({
            fadeIn: true,
            
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