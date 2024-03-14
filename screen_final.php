<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palabra = strtolower($_POST["palabra"]);
    if ($palabra === "salida") {
        header("Location: screen_final.php");
        exit();
    } else {
        header("Location: screen6.php?error=true");
        exit();
    }   
}
?>

