<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP Find Nearest Location using Latitude and Longitude Example</title>
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Location List</h2>
                    </div>
                    <?php
                    session_start();
                       require_once "fetch.php";
 
                    
 
                            // $lat = 21.1886;
                            // $long = 72.8281;
                            $lat = $_SESSION["lat"];
                            $long = $_SESSION["long"];
                            $sql = "SELECT * , (3956 * 2 * ASIN(SQRT( POWER(SIN(( $lat - latitude) *  pi()/180 / 2), 2) +COS( $lat * pi()/180) * COS(latitude * pi()/180) * POWER(SIN(( $long - Longitude) * pi()/180 / 2), 2) ))) as distance  
                                from garages  
                                having  distance <= 10 
                                order by distance";
 
                            $result = mysqli_query($conn, $sql);
 
                    ?>
 
 
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-bordered table-striped' border = 2>
                       
                      <tr>
                          <!-- <td>Garage Name</td> -->
                          <th>Garage Name</th>
                          <th>Address</th>
                          <th>Contact No</th>
                          <th>Distance(Kms.)</th>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["garage"]; ?></td>
                        <td><?php echo $row["Address"]; ?></td>
                        <td><?php echo $row["Mobile No"]; ?></td>
                        <td><?php echo $row["distance"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>
 
                </div>
            </div>     
        </div>
 
</body>
</html>