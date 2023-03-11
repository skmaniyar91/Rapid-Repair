<?php
    $con = mysqli_connect("localhost", "root",  "", "rr" );
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rr";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br>";
    }
?>