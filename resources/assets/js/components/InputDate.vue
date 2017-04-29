<template>
	<div class="field">
		<label class="label">{{label}}</label>
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
			},
			label:{
				type: String,
				default:"Seleccione Fecha"
			}
		},
		mounted() {
			// console.log('Component mounted.')
		}
	}
</script>
