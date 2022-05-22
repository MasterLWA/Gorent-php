<?php
session_start();

if(isset($_SESSION['username'])) {
    $userid = $_SESSION['username'];
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
    <link rel="stylesheet" href="src/css/Home.CSS">
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



echo "Hello $userid";
?>
    </body>
</html>