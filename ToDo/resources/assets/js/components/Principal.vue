<template>
	<div>
		<h2>pagina Principal</h2>

		<div v-for="pendiente in pendientes">
			<p>{{pendiente.pendiente}}</p>
		</div>
	</div>
</template>

<script>
	export default{
		data(){
			return {
				pendientes:[]
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
					console.log(this.pendientes);
				})
			}
		}
	}
</script>