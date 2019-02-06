<?php
    if(isset($_COOKIE['myCookie'])){
        setcookie("myCookie", "", 1, "/");
        header("Location: index.php");
        die();
    }
?>