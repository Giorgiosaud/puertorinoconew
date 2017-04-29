<template>
	<div class="field">
		<label class="label">{{label}}</label>
		<p class="control">
			<input class="input" :class="clase" :id="identificador" :name="name" type="text" :placeholder="label">
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
			},
			identificador:{
				type: String,
				required:false,
				default:""
			}

		},
		created(){
			console.info(this.props);
			// if(typeof this.props.identificador === 'undefined'){
				// $('.makedatepicker').datepicker({
					// language:"es",
				// });
			// }
			// else{
				// if(this.props.identificador==="fechaReserva"){
					// $('#'+this.props.identificador).datepicker({
						// language:"en",
					// });		
				// }
			// }
		},
		
	}
</script>
