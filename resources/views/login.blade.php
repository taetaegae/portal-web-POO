<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Iniciar Sesión</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form method="POST" action="/login">
    @csrf

    <label>Correo:</label>
    <input type="email" name="email" required>

    <br><br>

    <label>Contraseña:</label>
    <input type="password" name="password" required minlength="8">

    <br><br>

    <button type="submit">
        Ingresar
    </button>
</form>

</body>
</html>