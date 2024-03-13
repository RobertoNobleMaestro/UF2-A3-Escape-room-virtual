<?php
$pistas_acertijo = array(
    "enigma" => "La clave es algo que utilizaban los alemanes en la epoca para encriptar mensajes",
);
$respuesta_correcta = "enigma";
$mensaje_error = "";
if (isset($_POST['Adivinar'])) {
    $respuesta_correcta = "enigma";
    if ($_POST['respuesta'] == $respuesta_correcta) {
        header("Location: screen2.php");
        exit();
    } else {
        $mensaje_error = "Respuesta incorrecta. ¡Inténtalo de nuevo!";
    }
}
if (isset($_POST['Pista']) && isset($pistas_acertijo[$respuesta_correcta])) {
    $pista_mostrada = $pistas_acertijo[$respuesta_correcta];
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
</head>
<body>
    <div class="contenedor">
        <p class="texto-maquina special-elite-regular">Para escapar de tu celda necesitarás adivinar el siguiente
            acertijo para que se pueda abrir la puerta</p><br>
        <p class="texto-maquina special-elite-regular">En la Segunda Guerra Mundial, un objeto crucial para la
            victoria se escondía en la sombra,<br> pero no era un soldado ni un arma. Los aliados lo buscaban
            desesperadamente, y su ausencia podía cambiar el curso de la guerra. <br> ¿Qué objeto es este?</p><br>
        <?php
        if (!empty($mensaje_error)) {
            echo '<div class="alert alert-danger" role="alert">' . $mensaje_error . '</div>';
        }
        ?>
        <?php if (!empty($pista_mostrada)) : ?>
        <div class="alert alert-info" role="alert">
            Pista:
            <?php echo $pista_mostrada; ?>
        </div>
        <?php endif; ?>
        <form id="formulario_acertijo" action="screen1.php" method="post">
            <input type="text" name="respuesta">
            <br>
            <br>
            <button type="submit" name="Pista">Pista</button>
            <button type="submit" name="Adivinar">Adivinar</button>
        </form>
    </div>
</body>
