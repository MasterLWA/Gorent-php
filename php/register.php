<?php
    // --Add dbh file--
    require_once "./db.php";

    // --Add validation file--
    require_once "./validation.php";

      // If user clicks the register button
      if(isset($_POST["submit"]))
      {
        //Get form input data
        $vehicle-brand = $_POST["vehicle-brand"];
        $vehicle-type  = $_POST["vehicle-type"];
        $vehicle-year  = $_POST["vehicle-year"];
        $vehicle-seats   = $_POST["vehicle-seats"];
        $vehicle-color  = $_POST["vehicle-color"];
        $vehicle-number  = $_POST["vehicle-number"];
        $vehicle-contact-number = $_POST["vehicle-contact-number"];
        $vehicle-address = $_POST["vehicle-address"];
        $vehicle-email = $_POST["vehicle-email"];
        $vehicle-gear-type = $_POST["vehicle-gear-type"];
        $vehicle-model = $_POST["vehicle-model"];

        //input validation 
        if(inputsEmptyRegister( $vehicle-brand,$vehicle-type,$vehicle-year ,$vehicle-seats,$vehicle-color ,$vehicle-number ,
        $vehicle-contact-number ,$vehicle-address ,$vehicle-email ,$vehicle-gear-type ,$vehicle-model)){

          header("location: ../vehicleRegistration.php?err=empty_inputs");
           // exit();
        }
        else if(brandInvalid($vehicle-brand)){
          header("location: ../vehicleRegistraion.php?err=invalid_vehicle-brand");

      }
        
        else if(typeInvalid($vehicle-type)){
        header("location: ../vehicleRegistraion.php?err=invalid_vehicle-type");

      }  

       else if(yearInvalid($vehicle-year)){
        header("location: ../vehicleRegistraion.php?err=invalid_vehicle-year");

      }
       
       else if(seatsInvalid($vehicle-seats)){
      header("location: ../vehicleRegistraion.php?err=invalid_vehicle-seats");

      }

      else if(colorInvalid($vehicle-color)){
        header("location: ../vehicleRegistraion.php?err=invalid_vehicle-color");

      }

      else if(numberInvalid($vehicle-number)){
        header("location: ../vehicleRegistraion.php?err=invalid_vehicle-number");

      }

      else if(contactnumberInvalid($vehicle-contact-number)){
        header("location: ../vehicleRegistraion.php?err=invalid_vehicle-contact-number");

      }

      else if(addressInvalid($vehicle-address)){
        header("location: ../vehicleRegistraion.php?err=invalid_address");

      }

      else if(emailInvalid($vehicle-email)){
        header("location: ../vehicleRegistraion.php?err=invalid_email");

      } 
    else{
      // If all inputs are error free
      //registerNewUser($conn, $vehicle-brand, $vehicle-type ,$vehicle-year ,$vehicle-seats ,$vehicle-color ,$vehicle-number  
      //$vehicle-contact-number ,$vehicle-address ,$vehicle-email  ,$vehicle-gear-type ,$vehicle-model);
       echo("Success");
      }

      else{
        header("location: ../vehicleRegistraion.php");
        exit();
    }
      

    }
?>
       

    
