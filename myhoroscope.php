<?php
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST["förnamn"]) && isset($_POST["efternamn"]) && isset($_POST["personnr"])){
        $user = array();
        $user['firstname'] = $_POST['förnamn'];
        $user['lastname'] = $_POST['efternamn'];
        $user['dateNR'] = $_POST['personnr'];

        setcookie("myCookie", serialize($user), time() + (86400 * 7), "/");
    }
}

class Person {
    public $name;
    public $efternamn;
    public $personnummer;
    public $horoskop;

    function __construct($name, $efternamn, $personnummer)
    {   
        $this->name = $name;
        $this->efternamn = $efternamn;
        $this->personnummer = $personnummer;
        $this->horoskop = $this->getHoroscope($personnummer);
    }
    function getHoroscope($personNr){
        $month = substr($personNr, 0, 2);
        $day = substr($personNr, 2, 2);

        if($month == 3 && 21 <= $day || $month == 4 && 19 >= $day){
            return "Väduren";
        }
        if($month == 4 && 20 <= $day || $month == 5 && 20 >= $day){
            return "Oxe";
        }
        if($month == 5 && 21 <= $day || $month == 6 && 21 >= $day){
            return "Tvillingarna";
        }
        if($month == 6 && 22 <= $day || $month == 7 && 22 >= $day){
            return "Kräftan";
        }
        if($month == 7 && 23 <= $day || $month == 8 && 22 >= $day){
            return "Lejonet";
        }
        if($month == 8 && 23 <= $day || $month == 9 && 22 >= $day){
            return "Jungfrun";
        }
        if($month == 9 && 23 <= $day || $month == 10 && 22 >= $day){
            return "Vågen";
        }
        if($month == 10 && 23 <= $day || $month == 11 && 21 >= $day){
            return "Skorpionen";
        }
        if($month == 11 && 22 <= $day || $month == 12 && 21 >= $day){
            return "Skytten";
        }
        if($month == 12 && 22 <= $day || $month == 1 && 19 >= $day){
            return "Stenbocken";
        }
        if($month == 1 && 20 <= $day || $month == 2 && 18 >= $day){
            return "Vattumannen";
        }
        if($month == 2 && 19 <= $day || $month == 3 && 20 >= $day){
            return "Fiskarna";
        }
    }
}

if(isset($_COOKIE["myCookie"])){
    $user = unserialize($_COOKIE["myCookie"]);
    $name = $user["firstname"];
    $efternamn = $user['lastname'];
    $personnummer = $user['dateNR'];
    $person = new Person($name, $efternamn, $personnummer);
    echo "Hej " . $person->name . " ditt stjärntecken är: " . $person->horoskop;
} 


    
?>