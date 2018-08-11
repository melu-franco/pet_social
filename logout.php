<?php
    require("loader.php");

    $auth->logout();
    
    header("Location: login.php");
    exit;

?>