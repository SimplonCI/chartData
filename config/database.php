<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'chartchallenge';


    // connexion a la base de donnee
    $db = mysqli_connect($servername,$username,$password,$dbname);

    // verifier si la connexion a reussi
    if(!$db){
        die("Database connection failed ".mysqli_connect_error());
    }

?>