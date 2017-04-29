<template>
	<input type="text" :name="name">
</template>

<script>
	export default {
		props: {
            name:{
                type: String,
                default:"date"
            }
        },
		mounted() {
			// console.log('Component mounted.')
		}
	}
</script>
