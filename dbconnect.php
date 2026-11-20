<?php
    $db = "artikel";
    $user = "root";
    $pass = "";
    $server = "localhost";

    $connection = new mysqli($server, $user, $pass, $db);

    if($connection->connect_error){
        die($connection->connect_error);
    }