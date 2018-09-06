<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset('/css/CSS.css') }}">
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
	<title>Lista de Tareas</title>
</head>
<!--este es un script de js para ver si puedo redirigir con javascript-->
<body>
	<div class="principal">
		<div class="wrap">
			<form class="formulario" action="/create" method="post">

				{{csrf_field()}}

				<input type="text" name="tareaInput" placeholder="Agrega tu tarea">
				<input type="submit" class="boton" id="btn-agregar" value="Agregar Tarea">
			</form>
		</div>
	</div>
 	{{$idIndex=1}}
	<div class="tareas">
		<div class="wrap">
			
			<ul class="lista" id="lista">
				@foreach($lista as $pendiente)
					<li><a href="/delete/{{$pendiente->id}}" >{{$idIndex++}}- {{$pendiente->pendiente}}</a></li>
					
				@endforeach
			</ul>
		</div>
	</div>
</body>
</html>