<template>
    
    <a  :href="href" 
        class="work-links" 
        v-bind:class="{'makeWorkVisible': showWork, 'increaseHoverArea': (num != '4' && hoverWork == true), 'increaseHoverAreaFor4' : (num == '4' && hoverWork == true)}"> {{ num }}
        
        <div class="row desc-spacing" :style= "[ num == '4' ? {paddingBottom: '50px'} : {} ]">
            <span v-if="hoverWork"> 
                <h5 class="work-desc-slide ">{{ title }}</h5>
            </span> 
        </div>
    </a>
    
</template>

<script>
    export default {
        name: "WorkLink",
        props: {
            hoverWork: Boolean,
            showWork: Boolean,
            href: String,
            num: String,
            title: String,
        },
        mounted() {
            console.log('Worklink Component mounted.')
        },
        data: () => ({
        }),
        methods: {
        }
    }
</script>