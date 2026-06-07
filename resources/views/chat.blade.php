<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Chat de Ayuda</h2>

<div id="chat" class="border p-3 mb-3" style="height:300px; overflow-y:auto;">
</div>

<input type="text" id="mensaje" class="form-control" placeholder="Escribe un mensaje">

<button onclick="enviar()" class="btn btn-primary mt-2">
    Enviar
</button>

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