<?php
session_start();
if (isset($_POST['respuesta']) && $_POST['respuesta'] === "4") {
    $_SESSION['screen3'] = true;
}
if (!isset($_SESSION['screen1']) || $_SESSION['screen1'] !== true || !isset($_SESSION['screen3']) || $_SESSION['screen3'] !== true) {
    header("location: index.php?tramposo=1");
    exit(); 
}
?>
<head>
    <title>Image Puzzle</title>
    <link href="/css/puzzles.css" rel="stylesheet" />
    <script src="puzzle.js"></script>
</head>

<body class="fondo" class="responsive">
    <div id="collage">
        <h2 class="candado">Candado</h2>
        <hr/>
        <div id="playPanel" style="padding:5px;display:none;">
            <h3 id="imgTitle"></h3>
            <hr/>
            <div style="display:inline-block; margin:auto; width:95%; vertical-align:top;">
                <ul id="sortable" class="sortable"></ul>
                <div id="actualImageBox">
                    <div id="stepBox">
                        <div>Movimientos:</div>
                        <div id="stepCount" class="stepCount">0</div>
                    </div>
                    <div id="timeBox">
                        Tiempo: <span id="timerPanel"></span> secs
                    </div>
                    <img id="actualImage"/>
                    <p id="levelPanel">
                        <input type="radio" name="level" id="easy" checked="checked" value="3" onchange="imagePuzzle.startGame(images, this.value);"
                        /> <label for="easy">Facil</label>
                        <input type="radio" name="level" id="medium" value="4" onchange="imagePuzzle.startGame(images, this.value);" />                        
                        <label for="medium">Medio</label>
                        <input type="radio" name="level" id="hard" value="5" onchange="imagePuzzle.startGame(images, this.value);" />                        
                        <label for="hard">Dificil</label>
                    </p>
                </div>
            </div>
        </div>
        <div id="gameOver" style="display:none;">
            <div style="background-color: #fc9e9e; padding: 5px 10px 20px 10px; text-align: center; ">
                <h2 style="text-align:center">La puerta se ha abierto</h2> 
                <br /> Movimientos: <span id="stepCount" class="stepCount">0</span> steps.
                <br /> Tiempo pasado: <span class="timeCount">0</span> segundos<br/>
                <div>
                <form action="screen4.php" method="post">
                    <button type="submit" name="screen4">Cruzar puerta</button>
                </form>
                </div>

            </div>
        </div>

        <script>
            var images = [
                { src:'img/puzzle/candado.jpg', title:''},
            ];

            window.onload = function () {
                var gridSize = document.querySelector('#levelPanel input[type="radio"]:checked').getAttribute('value');
                imagePuzzle.startGame(images, gridSize);
            };
            function restart() {
                var gridSize = document.querySelector('#levelPanel input[type="radio"]:checked').getAttribute('value');
                imagePuzzle.startGame(images, gridSize);
            }

        </script>
    </div>
</body>
