<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horoskop</title>
</head>
<body>
<?php
    if(isset($_COOKIE['myCookie'])){
        header("Location: myhoroscope.php");
        die();
    }
?>
    <form action="./checker.php" method="POST">
        <input type="text" name="förnamn" placeholder="Förnamn"><br><br>
        <input type="text" name="efternamn" placeholder="Efternamn"><br><br>
        <input type="number" name="personnr" placeholder="Personnummer" ><br><br>
        <input type="submit">
    </form>
</body>
</html>