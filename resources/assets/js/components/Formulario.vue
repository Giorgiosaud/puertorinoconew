<template>
    <form :method="method" accept-charset="utf-8">
        <slot></slot>
    </form>
</template>

<script>
    export default {
        props: {
            method:{
                type: String,
                default:"POST"
            }
        },
        data(){
            return {
                
            };
        },
        mounted() {
            console.log('Component mounted.');
        }
    }
</script>
