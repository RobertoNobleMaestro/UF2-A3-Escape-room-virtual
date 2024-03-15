    <?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/portadas.css"> 
    <script src="./js/script.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-xrR3o5VTRmZI1eVNYjJ7Y4B5On/TJKM6JL5X2AGlAghncqJCt4zihKRKhQ8WDIpz" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Escape room WW2</title>
</head>
<body class="indice">
    <img id="movimiento" src="img/pixelart.jpg" alt="Imagen en movimiento">
    <div class="contenedor">
        <h1 class="texto-maquina special-elite-regular">ESCAPE ROOM WW2</h1>
        <p class="texto-maquina special-elite-regular">Has sido un fiel guerrero en esta guerra<br>
        pero desafortunadamente has caido a manos de los enemigos. <br>
        Ahora eres un prisionero de guerra...</p><br>
        <form action="screen1.php" method="post">
            <button id="botonWW2" class="boton-ww2" name="screen1">Escapar</button>
        </form>
        <br>
        <form action="rendido.php" method="post">  
            <button id="botonWW2" class="boton-ww2" name="screen2">Rendirse</button>          
        </form>
    </div>
</body class="responsive">
<?php
    if(isset($_GET['tramposo'])){
        session_destroy();
    }
?>
<script>
    // Después de la animación, elimina el borde derecho
    const bordeDerecho = document.querySelector('.borde-derecho');
    bordeDerecho.addEventListener('animationend', () => {
        bordeDerecho.style.borderRight = 'none';
    });
document.getElementById('botonWW2').addEventListener('click', function() {
    // Cambia 'otra_pagina.html' por la ruta de la página a la que deseas redirigir
    window.location.href = 'screen1.php';
});

</script>
</body>