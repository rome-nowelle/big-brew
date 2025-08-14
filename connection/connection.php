<?php

function connection()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "big_brew";

    $con = new mysqli($host, $username, $password, $database);

    if($con->connect_error) {
        echo "connect_error";
    } else {
        return $con;
    }
}
