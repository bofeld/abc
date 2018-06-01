<?php

    $con = new mysqli('localhost', 'root', '', 'Shop');
    if(!$con){
        die("Verbindungsfehler: ".mysqli_connect_error());
    }



?>