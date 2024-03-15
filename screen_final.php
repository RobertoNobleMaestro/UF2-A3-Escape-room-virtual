<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $palabra = strtolower($_POST["palabra"]);
    if ($palabra === "salida") {
        header("Location: screen_final.php");
    } else {
        header("Location: index.php?vuelve_a_comenzar=1");
        exit();
    }   
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-lQlZrOiLq9mLPHvtA5go1j7hAdSsyKTb7ACBQbtd1xMkMTeCzJw5Mc24mCj6OkQOdZyJFfSjS8U8ZHCa37m22A==" crossorigin="anonymous" />

    <title>Escape room WW2</title>
</head>

<body class="final" class="responsive">
    <div class="contenedor">
    <h1 class="textofinal">Ya eres libre camarada, disfruta de tu libertad...tu familia y tus amigos te esperan</h1>
    <form action="index.php" method="post">
        <button type="submit" value="Verificar" class="volver">⟳</button>
    </form>
</div>
<div class="creditos">
    <h2>,-*' ^ '~*-.,_,.-*~ ~*-.,_,.-*~' ^ '*-,</h2>
    <br>
    <p>Desarrollado por: José Rodríguez</p>
    <br>
    <P>Desarrollado por: Roberto Noble</p>
    <br>
    <p>Año: 2024</p>
    <br>
    <p>1 mes de trabajo</p>
    <br>
    <h2>,-*' ^ '~*-.,_,.-*~ ~*-.,_,.-*~' ^ '*-,</h2>

</div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        document.querySelector('.creditos').classList.add('mostrar');
    }, 1000); // Retraso de 1 segundo antes de mostrar los créditos
});
</script>



</body>