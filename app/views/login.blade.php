<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/login.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<title>Login</title>
</head>
<body>
	<div class="ppal">
		{{ Form::open(array('url' => 'login')) }}
			<h4>Iniciar Sesion</h4>

			<!-- Si existen errores en el Login, se muestran aqui -->
			<p>
				{{ $errors->first('username') }}
				{{ $errors->first('password') }}
			</p>
			<p>
				{{ Form::label('username', 'Usuario:') }}
				{{ Form::text('username', Input::old('username'), array('placeholder' => 'Usuario', 'class' => 'input-medium')) }}
			</p>
			<p>
				{{ Form::label('password','Password:') }}
				{{ Form::password('password', array('placeholder' => '*********', 'class' => 'input-medium')) }}
			</p>
			<p>
				{{ Form::submit('Iniciar sesión', array('class' => 'btn-small btn-warning')) }}
			</p>
		{{ Form::close() }}
	</div>
</body>
</html>