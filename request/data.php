<?php
    session_start();
    if(isset($_POST)){
        $raw_data = file_get_contents('php://input');
        $data = json_decode($raw_data, true);
        // $long = $data["long"];
        $lat = $data['lat'];
        $long = $data['long'];
        // echo data['lat'];
        // echo json_encode($data);
        $_SESSION["lat"] = $lat;
        $_SESSION["long"] = $long;
        // echo "Location Dettected";
        // $con = mysqli_connect("localhost", "root",  "", "rr" );
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $database = "rr";

        // // Create a connection
        // $conn = mysqli_connect($servername, $username, $password, $database);
        // // Die if connection was not successful
        // if (!$conn){
        //     die("Sorry we failed to connect: ". mysqli_connect_error());
        // }
        // else{
        //     echo "Connection was successful<br>";
        // }

        // // Variables to be inserted into the table
        // $name = "Vikrant";

        // // Sql query to be executed
        // $sql = "INSERT INTO `user` (`name`, `latitude`, `longitude`) VALUES ('$name', '$lat', '$long')";
        // $result = mysqli_query($conn, $sql);

        // // Add a new trip to the Trip table in the database
        // if($result){
        //     echo "The record has been inserted successfully successfully!<br>";
        // }
        // else{
        //     echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        // }
    }

?>
   

    