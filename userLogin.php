<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoRent | Login</title>
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
        <form>
            <input type="email" id="email" name="email" placeholder="Enter e-mail" class="inputs"><br>

            <input type="password" id="pwd" name="pwd" placeholder="Enter Password" class="inputs"><br>

            <input id="inputbutton" type="submit" value="Log in"/>
        </form>

    </div>
    <p style="margin-top: 10px;">Not registered?<a href="userRegistation.php">Register</a></p>
</div>
<!-- Latest compiled JavaScript Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>