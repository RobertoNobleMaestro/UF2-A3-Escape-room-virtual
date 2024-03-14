<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['screen6'])) {
    $decision = strtolower($_POST['screen6']);
    $esEnemigo = random_int(0, 10);
    if ($esEnemigo <= 3) {
        header("Location: rendido.php");
        exit();
    } else {
        header("Location: screen6.php");
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
    <title>Escape room WW2</title>
</head>
<body>
    <br>
    <br>
    <p>55555555555555555555555213786423985555555S555555550924355555555555523123123778868904535423431235555555555555555544444444444443123123123675678989894444444444213123123355676786776564234323444444444413123213444445463354987744444423134444444442321344444A444353544444478574444477777777777777L7773213156566481401911I44444A</p>
    <form action="verificar_palabra.php" method="post">
        <input type="text" name="palabra" placeholder="Escribe la palabra aquí">
        <input type="submit" value="Verificar">
    </form>
    <?php
        if (isset($_GET["error"]) && $_GET["error"] === "true") {
            echo "Esta mal";
        }
    ?>
</body>
