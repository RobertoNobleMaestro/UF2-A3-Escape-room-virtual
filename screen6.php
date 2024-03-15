<?php
/*
session_start();
$mensaje_error = "Respuesta incorrecta. ¡Inténtalo de nuevo!";

// Verificar si la sesión está establecida
if (!isset($_SESSION['screen1']) || $_SESSION['screen1'] !== true || !isset($_SESSION['carta'])) {
    header("Location: index.php?tramposo=1");
    exit(); 
} else {
    $_SESSION['carta'] = true;
}

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['carta'])) {
    $decision = strtolower($_POST['carta']);
    $esEnemigo = random_int(0, 10);
    if ($esEnemigo <= 3) {
        header("Location: rendido.php");
        exit();
    } else {
        header("Location: screen6.php");
        exit();
    }
} */
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
</head>
<body class="codigo" class="responsive">
    <br>
    <br>
    <div class="television">
    <p class="palabra">555555555555555555555552<br>
        13786423985555555S555555550924<br>
        3555555555555231<br>
        2312377886890453542343123555555<br>
        55555555555 <br>
        444444444444431231231<br>
        236756789898944444444442131231233574849<br>
        67867765642343234444444444131232<br>
        134444454633549877444 <br>
        4442313444444444232134<br>
        4444A4443535444444785744444777777<br>
        77777777L77732131<br>
        56566481401911I46666666666663213<br>
        15666D6664444A</p>
        <div class="tv-antigua">
    <form action="screen_final.php" method="post">
        <input type="text" name="palabra" placeholder="Escribe la palabra aquí" class="tv-input">
        <input type="submit" value="Verificar" class="tv-button">
    </form>
</div>
    <?php
        if (isset($_GET["error"]) && $_GET["error"] === "1") {
            echo '<div class="alert alert-danger" role="alert">' . $mensaje_error . '</div>';
        }
    ?>
</body>
