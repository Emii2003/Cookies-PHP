<?php
    header("Location: index.php");
    $categoria = $_POST['slCategoria'];
    setcookie('categoria', $categoria);
?>