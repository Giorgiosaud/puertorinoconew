<template>
    <form :method="method" accept-charset="utf-8">
        <slot></slot>
    </form>
</template>

<script>
    export default {
        data(){
            return {
                method:"POST"
            };
        },
        mounted() {
            console.log('Component mounted.');
        }
    }
</script>
