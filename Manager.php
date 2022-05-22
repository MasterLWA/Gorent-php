<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="src/images/go rent.png" type="image/x-icon">
    <!--Link CSS-->
    <link rel="stylesheet" href="src/css/manager.css">
    <title>DashBoard</title>
</head>
<body>
    <center><h1>Welcome</h1></center>

   
    <?php
        require "src/php/config.php";
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM messages LIMIT 5";

        $result = $conn->query($sql);

        if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
              echo "<table>";
              echo "<center><th>Messages</th></center>";
                  echo "<tr>";
                      echo "<th>Name</th>";
                      echo "<th>email</th>";
                      echo "<th>Subject</th>";
                      echo "<th>Message</th>";
                  echo "</tr>";
              while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                      echo "<td>" . $row['Name'] . "</td>";
                      echo "<td>" . $row['email'] . "</td>";
                      echo "<td>" . $row['subject'] . "</td>";
                      echo "<td>" . $row['message'] . "</td>";
                  echo "</tr>";
              }
              echo "</table>";
              // Free result set
              mysqli_free_result($result);
          }} else 
          {
            echo "0 results";
          }
    ?>
 <br>
 <br>
    <?php
        require "src/php/config.php";
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Name,email,pNumber,BirthDay,Adress FROM Users LIMIT 10";

        $result = $conn->query($sql);
        if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
              echo "<table>";
                   echo "<tr>";
                      echo "<center><th>Users</th></center>";
                  echo "</tr>";
                  echo "<tr>";
                      echo "<th>Name</th>";
                      echo "<th>email</th>";
                      echo "<th>Number</th>";
                      echo "<th>BirthDay</th>";
                      echo "<th>Address</th>";
                  echo "</tr>";
              while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                      echo "<td>" . $row['Name'] . "</td>";
                      echo "<td>" . $row['email'] . "</td>";
                      echo "<td>" . $row['pNumber'] . "</td>";
                      echo "<td>" . $row['BirthDay'] . "</td>";
                      echo "<td>" . $row['Adress'] . "</td>";
                  echo "</tr>";
              }
              echo "</table>";
              // Free result set
              mysqli_free_result($result);
          }} else 
          {
            echo "0 results";
          }
    ?>
  
 <br>
 <br>

 <?php
        require "src/php/config.php";
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM vehicles";

        $result = $conn->query($sql);
        if($result = mysqli_query($conn, $sql)){
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
          }} else 
          {
            echo "0 results";
          }
    ?>
<form action="POST" id="Form">
    <h2>Update Car Details<h2>
     <input name="RegNumber" placeholder="Registation Number">
     <input name="Brand" placeholder="Brand">
     <input name="Model" placeholder="Model">
     <input name="year" placeholder="Year">
     <input name="Type" placeholder="Type">
     <input name="Seats" placeholder="Seats">
     <input name="Gear" placeholder="Gear">

     <input  type="submit">
</form>

<?php
     require "src/php/config.php";
     $rNum = $_POST["RegNumber"]; 
     $brand = $_POST["Brand"]; 
     $model = $_POST["Model"]; 
     $year = $_POST["year"]; 
     $type = $_POST["Type"]; 
     $seats = $_POST["Seats"]; 
     $gear = $_POST["Gear"]; 

     $sql = "UPDATE vehicles SET Brand='$brand' ";
?>
</body>
</html>