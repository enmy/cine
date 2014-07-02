<?php
    session_start();

    #si la sesion no esta iniciada
    if(isset($_SESSION["autentificado"]) && !$_SESSION["autentificado"])
    {
        header("Location: salir.php");
    }
?>