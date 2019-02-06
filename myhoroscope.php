<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthDate = $_POST['birthDate'];

    class Person {
        public $name;
        public $lastName;
        public $date;
        function __construct($name, $lastName, $date)
        {
            $this->name = $name;
            $this->lastName = $lastName;
            $this->date = $date;

        }
    }


    
?>