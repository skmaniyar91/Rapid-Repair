<?php   
    session_start();
    
    $con = mysqli_connect("localhost", "root",  "", "rr" );
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rr";


    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br>";
    }
    $name =  $_POST['name'];
    $mobile =  $_POST['mobile'];
    $email =  $_POST['email'];
    $lat = $_SESSION["lat"];
    $long = $_SESSION["long"];
    // require 'fetch_request.php';
    // if(isset($_POST)){
        // $raw_data = file_get_contents('php://input');
        // $data = json_decode($raw_data, true);
        // // $long = $data["long"];
        // $lat = $data['lat'];
        // $long = $data['long'];
        // // echo data['lat'];
        // echo json_encode($data);
    // Variables to be inserted into the table
    // Sql query to be executed
    $sql = "INSERT INTO `request`(`name`, `contact`, `email`, `latitude`, `longitude`) VALUES ('$name', '$mobile', '$email', '$lat', '$long')";
    $result = mysqli_query($conn, $sql);

    // Add a new trip to the Trip table in the database
    if($result){
        echo "done";
        header("Location: nearest.php");
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
// }
?>