<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>

<h1>Registro de Usuario</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/registro">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="name" required>

    <br><br>

    <label>Correo:</label>
    <input type="email" name="email" required>

    <br><br>

    <label>Contraseña:</label>
    <input type="password" name="password" required>

    <br><br>

    <label>Confirmar contraseña:</label>
    <input type="password" name="password_confirmation" required>

    <br><br>

    <button type="submit">
        Registrarse
    </button>
</form>

</body>
</html>