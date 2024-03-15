<?php
session_start();
if (!isset($_SESSION['screen1']) || $_SESSION['screen1'] !== true) {
    header("location: index.php?tramposo=1");
    exit(); 
} else {
    $_SESSION['screen1'] = true; 
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha384-xrR3o5VTRmZI1eVNYjJ7Y4B5On/TJKM6JL5X2AGlAghncqJCt4zihKRKhQ8WDIpz" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Escape room WW2</title>
    <body class="interrogatorio" class="responsive">
    <script>
    function interrogatorio() {
        var respuesta = prompt("Te encuentras en un interrogatorio. ¿Cómo decides enfrentar al interrogador?\n1. Cooperar\n2. Mantener el silencio\n3. Negociar información\n4. Intentar escapar del interrogatorio");
        if (respuesta) {
            respuesta = respuesta.toLowerCase();
            switch (respuesta) {
                case "1":
                case "2":
                case "3":
                    alert("Tu decisión ha tenido consecuencias.");
                    window.location.href = "rendido.php";
                    break;
                case "4":
                    document.getElementById("respuestaForm").value = "4"; // Establece el valor del campo oculto
                    document.getElementById("form").submit(); // Envía el formulario
                    break;
                default:
                    alert("Respuesta no válida. Inténtalo de nuevo.");
                    break;
            }
        } else {
            alert("Respuesta no válida. Inténtalo de nuevo.");
        }
    }
</script>
</head>
         <div class="contenedor">
            <h3 class="titulo">"Te encuentras en un interrogatorio ya que te han encontrado los
            guardias saliendo de la celda. Se han quedado perplejos ya que era imposible,<br>
            entonces el capitán al mando del regimiento carcelero<br>
            se interesa por ti."<br><h3>
                <br>
            <p class="maquina">¿Cómo decides enfrentar al interrogador?<br>
            ¿Qué acción decides realizar?</p><br>
            <form id="form" action="screen3.php" method="post">
                <input type="hidden" id="respuestaForm" name="respuesta"> 
                <button onclick="interrogatorio()" class="img-button" name="screen3">ELEGIR</button>
            </form>
        </div>
</body>