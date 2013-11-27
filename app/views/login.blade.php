<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		<!-- Si existen errores en el Login, se muestran aqui -->
		<p>
			{{ $errors->first('username') }}
			{{ $errors->first('password') }}
		</p>
		<p>
			{{ Form::label('username', 'Usuario:') }}
			{{ Form::text('username', Input::old('username'), array('placeholder' => 'Usuario')) }}
		</p>
		<p>
			{{ Form::label('password','Password:') }}
			{{ Form::password('password') }}
		</p>
		<p>
			{{ Form::submit('Iniciar sesión') }}
		</p>
	{{ Form::close() }}
</body>
</html>