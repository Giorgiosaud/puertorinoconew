<template>
	<div class="field">
		<label class="label">Name</label>
		<p class="control">
			<input class="input" :name="name" type="text" placeholder="Text input">
		</p>
	</div>
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
