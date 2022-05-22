<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoRent | Contact</title>
    <link rel="shortcut icon" href="src/images/go rent.png" type="image/x-icon">
    <!--Link CSS-->
    <link rel="stylesheet" href="src/css/contact.css">
    <!--LInk boostrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      
</head>
<body>


   
    <div class="container-fluid" style="background-color: black;">
       <center> <img id="logoimgs" src="src/images/go rent.png"></center>
    </div>

    <div class="topnav container-fluid">
        <a class="active" href="index.php" style="margin-left:400px">Home</a>
        <a href="card.php">Check Card</a>
        <a href="contact.php">Contacts</a>
        <a href="Login.php" style="margin-left:800px">Log in</a>
        <a href="Registation.php">Sign Up</a>
    </div>
  

    <div class="topbody cotainer-fluid">
      <div id="ContactUsTxt">
        Contacts
      </div>
    </div>
    


<div class="container">
  <!--Section heading-->
  <h2 class="h1-responsive font-weight-bold text-md-left my-1" style="padding-left: 20px; font-size:x-large;">Contact Us</h2>
  <!--Section description-->


  <div class="row">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form"  method="POST">

              <!--Grid row-->
              <div class="row" style="margin-top: 20px;">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                    
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control" placeholder="e-mail">
                          
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row" style="margin-top: 20px;">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                          <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                         
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row" style="margin-top: 20px;">

                  <!--Grid column-->
                  <div class="col-md-12" >

                      <div class="md-form">
                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Message"></textarea>
                      </div>

                  </div>
              </div>
              <!--Grid row-->
              <div class="text-center text-md-left" style="margin-top: 20px;" >
              <input id="inputbutton" name="reg" type="submit" value="Send"/>
          </div>

          </form>

          
          <div class="status"></div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              <li><i class="fas fa-map-marker-alt fa-2x" style="padding-top: 10px;"></i>
                <h3><Address>Address</h3>
                  <p>12, Malabe<br>Sri Lanka</p>
              </li>

              <li><i class="fas fa-phone mt-4 fa-2x" style="padding-top: 10px;"></i>
                <h3>TelePhone</h3>
                <a href="tel:(+94) 76 911 4371" style=" text-decoration: none;">(+94) 76 911 4371</a>
              </li>

              <li><i class="fas fa-envelope mt-4 fa-2x" style="padding-top: 10px;"></i>
                <h3>e-mail</h3>
                <a href="mailto:hello@lwatechnologies.com" style=" text-decoration: none;">hello@gorent.lk</a>
              </li>
          </ul>
      </div>
      <!--Grid column-->

  </div>

</div>

<?php
        require "src/php/config.php";

        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"]; 

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
  
        $sql = "INSERT INTO messages (Name, email,subject,message)
        VALUES ('$name', '$email', '$subject','$message')";

if ($conn->query($sql) === TRUE) {
    echo "Submited Successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
        
  

  $conn->close();
?>
<!--Section: Contact v.2-->

      <!-- Latest compiled JavaScript Boostrap-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 




