<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoRent | Vehicle Owner Login</title>
    <link rel="shortcut icon" href="src/images/go%20rent.png" type="image/x-icon">
    <!--Link CSS-->
    <link rel="stylesheet" href="src/css/login.css">
    <!--LInk boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<div class="container-fluid" style="background-color: black;">
    <img id="logoimgs" src="src/images/go%20rent.png">
</div>

<div class="topnav container-fluid">
    <a href="index.php" style="margin-left:400px">Home</a>
    <a href="../card.php">Check Card</a>
    <a href="contact.php">Contacts</a>
    <a href="SelectUserTypeLog.php" style="margin-left:800px">Log in</a>
        <a href="SelectUserTypeReg.php">Sign Up</a>
</div>


<div class="container" id="boxarouninputs">
    <div class="form Loginform container" style="padding-top: 50px;text-align: center; ">
        <form method="POST">
            <input type="email" id="email" name="email" placeholder="Enter email" class="inputs"><br>

            <input type="password" id="pwd" name="pwd" placeholder="Enter Password" class="inputs"><br>

            <input id="inputbutton" type="submit" value="Log in"/>
        </form>

    </div>


    

    <p style="margin-top: 10px;">Not registered?<a href="VOwnerReg.php">Register</a></p>
</div>
<!-- Latest compiled JavaScript Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php
      require 'src/php/config.php';

      $username = $_POST["email"];
      $password = $_POST["pwd"];

        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from VehicleOwners where email = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        
    
        if($count == 1){  
             header("Location: vehicleOwner.php");
        }  
        else{  
           
             echo "Login failed. Invalid username or password :(";
        }
 
        $_SESSION['username'] = $username;
   $conn -> close();
?>



</html>