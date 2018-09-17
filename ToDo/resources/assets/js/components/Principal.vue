<template>
	
	<div>
		<div class="principal">
			<div class="wrap">
				<form class="formulario" action="/create" method="post">

					<input type="text" name="tareaInput" placeholder="Agrega tu tarea" v-model="nuevo_Pendiente">
					<input type="button" @click="agregar(nuevo_Pendiente)" class="boton" id="btn-agregar" value="Agregar Tarea">
				</form>
			</div>
		</div>

		<div v-for="pendiente in pendientes">
			<p>{{pendiente}}</p>
		</div>
	</div>
</template>

<style scoped src="C:/Users/Jose Antonio G/Desktop/sistema de llaves/practica/ToDo/resources/assets/css/estilo_principal.css">	
</style>

<script>
	export default{
		data(){
			return {
				pendientes:[],
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
				axios.post('/create',{'tareaInput':mensaje});
			}

		}
	}
</script>