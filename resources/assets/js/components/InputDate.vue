<template>
	<div class="field">
		<label class="label">{{label}}</label>
		<p class="control">
			<input class="input" :class="clase" :name="name" type="text" :placeholder="label">
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
			},
			clase:{
				type: String,
				default:"makedatepicker"
			}

		},
		created(){

		},
		mounted() {
			// console.log('Component mounted.')
		}
	}
</script>
