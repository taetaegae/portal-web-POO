<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">

        <a class="navbar-brand text-white fw-bold" href="/">
            Portal Web
        </a>
        <div>
            <a class="btn btn-nav me-2" href="/">
                Inicio
            </a>

            <a class="btn btn-nav me-2" href="/productos">
                Productos
            </a>

            <a class="btn btn-nav me-2" href="/contacto">
                Contacto
            </a>

            <form method="POST" action="/logout" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger ms-2">
                    Logout
                </button>
            </form>
        </div>

    </div>
</nav>

<main class="container py-5">
    <div class="contacto-card">
        <h2 class="text-center mb-4">Chat de Ayuda</h2>

        <div id="chat" class="chat-window">
        </div>

        <div class="mb-3">
            <input type="text" id="mensaje" class="form-control" placeholder="Escribe un mensaje">
        </div>

        <button onclick="enviar()" class="btn btn-dark w-100">
            Enviar
        </button>
    </div>
</main>

<script>
function enviar() {

    let mensaje = document.getElementById("mensaje").value;
    let chat = document.getElementById("chat");

    chat.innerHTML += "<p><b>Tú:</b> " + mensaje + "</p>";

    let respuesta = "No entendí tu pregunta.";

    if(mensaje.toLowerCase().includes("hola")){
        respuesta = "Hola, ¿en qué puedo ayudarte?";
    }

    if(mensaje.toLowerCase().includes("registro")){
        respuesta = "Puedes registrarte desde la sección Registro.";
    }

    if(mensaje.toLowerCase().includes("login")){
        respuesta = "Puedes iniciar sesión desde la página Login.";
    }

    chat.innerHTML += "<p><b>Bot:</b> " + respuesta + "</p>";

    document.getElementById("mensaje").value = "";
}
</script>

</body>
</html>