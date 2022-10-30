<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="muzyka.css">
    <title>Sklep muzyczny</title>
</head>
<body>
    <header>
        <h1>SKLEP MUZYCZNY</h1>
    </header>
    <div id="left">
        <h2>NASZA OFERTA</h2>
        <ol>
            <li>Instrumenty muzyczne</li>
            <li>Sprzęt audio</li>
            <li>Płyty CD</li>
        </ol>
    </div>
    <div id="right">
        <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $imie=$_POST["imie"];
            $nazwisko = $_POST["nazwisko"];
            $adres = $_POST["adres"];
            $telefon=$_POST["telefon"];
            $login = $_POST["login"];
            $haslo = $_POST["haslo"]; 
            $server="localhost";
            $username="root";
            $password="";
            $database="Sklep";
            echo "Konto".$imie.$nazwisko."zostało zarejestrowane w sklepie muzycznym";
            $conn=mysqli_connect($server,$username,$password,$database);
            $query_1="INSERT into Użytkownicy values ('$imie','$nazwisko','$adres','$telefon')";
            $result_1=mysqli_query($conn,$query_1);
            $query_2="INSERT into Konta values ('$login','$haslo')";
            $result_2=mysqli_query($conn,$query_2);
            mysqli_close($conn);
        }
        ?>
    </div>
</body>
</html>