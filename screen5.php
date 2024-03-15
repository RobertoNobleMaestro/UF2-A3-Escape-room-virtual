<?php
/*
session_start();
if (!isset($_POST['decision'])){
    header("location: index.php?tramposo=1");
    exit(); 
} 
if (isset($_POST['decision'])) {
    $decision = $_POST['decision'];
    if ($decision === 'rendido') {
        header("Location: rendido.php");
        exit();
    }
} else {
    header("Location: screen5.php");
    exit();
}*/
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
    <script class="canva">
        document.addEventListener("DOMContentLoaded", function () {
            var canvas = new fabric.Canvas('drawingCanvas', {
                isDrawingMode: true,
                width: 400,
                height: 400
            });   
        });
    </script>
</head>
<body class="dibujo" class="responsive">
    <div class="content">
    <div class="papiro"> 
        <div class="maquina">   
            <br>   
        <h3 class="titulo2">Has elegido bien camarada<br></h3>
        <br>
        <br>
        <p>Por suerte has acabado en el amacén de la prisión<br>
        y escuchas desde dentro voces familiares<br>
        tus camaradas estan cerca...<br>
        Pide ayuda pero, !cuidado¡ todo esta  <br>
        lleno de guardias.<br>
        Esperemos no caiga en manos equivocadas...<br></p>
        </div>
        <canvas id="drawingCanvas" width="300" height="300" style="border:1px solid #ccc;"></canvas>
        <form action="screen6.php" method="post">
            <button id="screen6" name="carta" class="ayuda">&#10072;&#10072;&#10072;&#10072;&#10016;&#10072;&#10072;&#10072;&#10072;</button>
        </form>
    </div>
    </div>
</body>

