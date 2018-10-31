<template>
	<div>
		<form v-on:submit.prevent="upFile()">
			<input type="file" id="archivoPrueba" v-on="file_archivo" ><br>
			<input type="submit" @click="upFile(file_archivo)" value="agregar archivo">
		</form>
		
	</div>
</template>

<script>
export default {
	data(){
		return {
			file_archivo:'',
		}
	},
	methods:{
		upFile(archivoSubir){
			axios.post('/api/uploadFile',{'archivoPrueba':archivoSubir})
				.then(()=>{
					alert('archivo subido');
				});
		}
	}
}
</script>
