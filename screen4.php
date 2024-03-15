<?php
session_start();
if (!isset($_SESSION['screen1']) || $_SESSION['screen1'] !== true || !isset($_SESSION['screen3']) || $_SESSION['screen3'] !== true) {
    header("location: index.php?tramposo=1");
    exit(); 
}
if (!isset($_POST['screen4'])) {
    header("location: index.php?tramposo=1");
    exit(); 
} else{
    $_SESSION['screen4'] = true;

}
?> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/script.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha384-xrR3o5VTRmZI1eVNYjJ7Y4B5On/TJKM6JL5X2AGlAghncqJCt4zihKRKhQ8WDIpz" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Escape room WW2</title>
</head>

<body class="pasillo" class="responsive">
    <div class="contenedor">
        <h3 class="titulopasillo">
            Te encuentras en una bifurcación. ¿Qué camino eliges?</h3><br>
            <p class="maquina">Recueda, usa todo tu istinto de supervivencia, tu elección será clave...</p>
    </div>

        <form action="screen5.php" method="post" class=>
            <button type="submit" name="decision" value="rendido" class="boton-pasillo">&#8592;</button>
            <button type="submit" name="decision" value="correcto" class="boton-pasillo">&#8594;</button>
        </form>
</body>
