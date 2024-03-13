<?php
session_start();

if (isset($_GET['decision'])) {
    $decision = strtolower($_GET['decision']);
    $esEnemigo = random_int(0, 1);

    if ($esEnemigo) {
        header("Location: rendido.php");
        exit();
    } else {
        header("Location: rendido.php");
        exit();
    }
}
?>
