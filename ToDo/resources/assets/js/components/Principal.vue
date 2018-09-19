<template>
	
	<div>
		<div class="principal">
			<div class="wrap">
				<form class="formulario" v-on:submit.prevent="agregar(nuevo_Pendiente)">

					<input type="text" name="tareaInput" placeholder="Agrega tu tarea" v-model="nuevo_Pendiente" >
					<input type="button" @click="agregar(nuevo_Pendiente)" class="boton" id="btn-agregar" value="Agregar Tarea">
				</form>
			</div>
			
		</div>
		<div class="tareas">
			<div class="wrap">
				<ul id="listaDePendientes" class="lista">
					<li v-for="pendiente in pendientes">
						<a @click="eliminar(pendiente.id)">
							{{pendiente.pendiente}}
						</a>
					</li>
				</ul>
			</div>
		</div>
		
	</div>
</template>

<style scoped src="../../css/estilo_principal.css">	
</style>

<script>
	export default{
		data(){
			return {
				pendientes:{},
				nuevo_Pendiente:'',
				//nuevoElemento:false,
			}
		},

		created(){
			this.fetchPendientes();
		},

		methods: {
			fetchPendientes(){
				fetch('api/pendientes')
				.then(res=>res.json())
				.then(data => {
					this.pendientes=data;
				})
			},
			agregar(mensaje){
				axios.post('/create',{'tareaInput':mensaje})
					.then(()=>{
						this.fetchPendientes();
					});
				//this.nuevoElemento=true;
			},
			eliminar(mensajeID){
				let ruta=`/delete/${mensajeID}`;
				axios.get(ruta)
					.then(()=>{
						this.fetchPendientes();
					});
			},

		}
	}
</script>