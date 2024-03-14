<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['decision'])) {
    $decision = $_POST['decision'];

    if ($decision === 'rendido') {
        header("Location: rendido.php");
        exit();
    }
} else {
    header("Location: screen5.php");
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="./js/script.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha384-xrR3o5VTRmZI1eVNYjJ7Y4B5On/TJKM6JL5X2AGlAghncqJCt4zihKRKhQ8WDIpz" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Escape room WW2</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.6/fabric.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var canvas = new fabric.Canvas('drawingCanvas', {
                isDrawingMode: true,
                width: 500,
                height: 500
            });   
        });
    </script>
</head>
<body>
    <div class="contenedor">
        <p class="texto-maquina special-elite-regular">
            Encuentras un papel y un lapiz al salir de la celda y justamente escuchas voces al otro lado de la puerta de la salida pideles ayuda, si no lo intentas moriras y si son enemigos también.
        </p><br>
        <canvas id="drawingCanvas" width="500" height="300" style="border:1px solid #ccc;"></canvas>
        <form action="screen6.php" method="post">
            <button id="screen6" name="screen6">Pedir ayuda</button>
        </form>
    </div>
</body>

