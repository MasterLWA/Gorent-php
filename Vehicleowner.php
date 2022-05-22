<?php
session_start();

if(isset($_SESSION['username'])) {
    $ownerID = $_SESSION['username'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoRent</title>
    <link rel="shortcut icon" href="src/images/go rent.png" type="image/x-icon">
    
    <!--Link CSS-->
    <link rel="stylesheet" href="src/css/Vehicleowner.css">
    <!--LInk boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boostrap icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body class="d-flex flex-column min-vh-100">

    <div class="container-fluid" style="background-color: black;">
       <center> <img id="logoimgs" src="src/images/go rent.png"></center>
    </div>

    <div class="topnav container-fluid">
        <a href="index.php" style="margin-left:400px">Home</a>
        <a href="card.php">Check Card</a>
        <a href="contact.php">Contacts</a>
    </div>

    

<?php
echo "Hello $ownerID";
?>


<?php
        require "src/php/config.php";
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql2 = "SELECT * FROM vehicles WHERE ownerID = '$ownerID'";

        $result = $conn->query($sql2);
        if($result = mysqli_query($conn, $sql2)){
          if(mysqli_num_rows($result) > 0){
              echo "<table>";
                   echo "<tr>";
                      echo "<center><th>Vehicles</th></center>";
                  echo "</tr>";
                  echo "<tr>";
                      echo "<th>Brand</th>";
                      echo "<th>Model</th>";
                      echo "<th>Year</th>";
                      echo "<th>Type</th>";
                      echo "<th>Seats</th>";
                      echo "<th>Gear</th>";
                      echo "<th>Registation Number</th>";
                  echo "</tr>";
              while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                      echo "<td>" . $row['Brand'] . "</td>";
                      echo "<td>" . $row['Model'] . "</td>";
                      echo "<td>" . $row['Year'] . "</td>";
                      echo "<td>" . $row['Type'] . "</td>";
                      echo "<td>" . $row['Seats'] . "</td>";
                      echo "<td>" . $row['Gear'] . "</td>";
                      echo "<td>" . $row['regNumber'] . "</td>";
                  echo "</tr>";
              }
              echo "</table>";
              // Free result set
              mysqli_free_result($result);
          }}
           else 
          {
            echo "0 results";
          }
?>

     <div id="registerVehicle">
     <center style="color: lavender; padding-top: 20px;">Register Vehicle</center>
     <center> <form method="POST" action="vehicleRegister.php" style="padding-top: 20px;">
     <input id="btn" value="Register Vehicle" type="submit"/>
     </form>
     </center>
     </div>
      

    </body>
</html>