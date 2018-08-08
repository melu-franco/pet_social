<?php
    require("loader.php");

    $auth->logout();
    
    header("Location: registro.php");
    exit;

?>