<?php
    if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST["förnamn"]) && isset($_POST["efternamn"]) && isset($_POST["personnr"])){
            $user = array();
            $user['firstname'] = $_POST['förnamn'];
            $user['lastname'] = $_POST['efternamn'];
            $user['dateNR'] = $_POST['personnr'];
    
            setcookie("myCookie", serialize($user), time() + (86400 * 7), "/");

            header("Location: myhoroscope.php");
            die();
        }
    }
?>