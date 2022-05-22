<?php
session_start();

if(isset($_SESSION['username'])) {
    $ownerID = $_SESSION['username'];
    }
?>
   
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Vehicle Registration</title>
        <link rel="stylesheet" href="src/css/vehicleRegistration.css" />
        <script src="./js/vehicleRegistration.js" defer></script>
    </head>
    <body>
        <header></header>
        <div id="vehicle-reg-form">
            <div id="vehicle-reg-form-container">
                <div id="title">Registration Form</div>
                 <form method="post" >
                    <div class="vehicle-details">
                        <div id="vehicle-image-box">
                            <div id="vehicle-image">
                                <label
                                    for="vehicle-image-input"
                                    id="default-vehicle-image-label"
                                >
                                    <img
                                        src="./img/car.jpg"
                                        id="default-vehicle-image"
                                    />
                                </label>
                                <input
                                    type="file"
                                    id="vehicle-image-input"
                                    accept="image"
                                    onchange="loadFile(event)"
                                />
                            </div>
                            <label
                                id="vehicle-image-label"
                                for="vehicle-image-input"
                                >Add an Image of Your Vehicle</label
                            >
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-brand"
                                >Vehicle Brand:
                            </label>
                            <input
                                type="text"
                                id="vehicle-brand"
                                name="vehicle-brand"
                                placeholder="Enter your Vehicle Brand"
                                required
                            />
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-type"
                                >Vehicle Type :
                            </label>
                            <select
                                id="vehicle-type"
                                name="vehicle-type"
                                class="select"
                            >
                                <option
                                    value=""
                                    disabled
                                    class="placeholder"
                                    selected
                                >
                                    -- Select your Vehicle Type --
                                </option>
                                <option value="Car">Car</option>
                                <option value="Van">Van</option>
                                <option value="Bus">Bus</option>
                                <option value="Bike">Bike</option>
                                <option value="Three-Wheel">Other</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-year"
                                >Year:
                            </label>
                            <input
                                type="number"
                                id="vehicle-year"
                                name="vehicle-year"
                                placeholder="Enter Year"
                                required
                            />
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-seats"
                                >Seats:
                            </label>
                            <input
                                type="number"
                                id="vehicle-seats"
                                name="vehicle-seats"
                                placeholder="Number of Seats"
                                required
                            />
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-color"
                                >Color:
                            </label>
                            <input
                                type="text"
                                id="vehicle-color"
                                name="vehicle-color"
                                placeholder="Vehicle Color"
                                required
                            />
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-number"
                                >Vehicle Number:
                            </label>
                            <input
                                type="text"
                                id="vehicle-number"
                                name="vehicle-number"
                                placeholder="Vehicle Number"
                                required
                            />
                        </div>
                    
                       
              
                        <div class="input-box">
                            <label class="labels" for="vehicle-gear-type"
                                >Gear Type:
                            </label>
                            <input
                                type="text"
                                id="vehicle-gear-type"
                                name="vehicle-gear-type"
                                placeholder="Auto/Manual"
                                required
                            />
                        </div>
                        <div class="input-box">
                            <label class="labels" for="vehicle-model"
                                >Model:
                            </label>
                            <input
                                type="text"
                                id="vehicle-model"
                                name="vehicle-model"
                                placeholder="Enter your Vehicle Model"
                                required
                            />
                        </div>
                    </div>
                    <div id="vehicle-reg-button">
                        <input type="submit" id="vehicle-reg-submit" name="submit" value="Register"> 
                    </div>
                </form>
            </div>
                <center> <form method="POST" action="Vehicleowner.php" style="padding-top: 20px;">
            <input id="btn" value="Back to Profile" type="submit"/>
             </form></center>
     

        </div>
        <footer>
        
        </footer>
    </body>



<?php
session_start();
if(isset($_SESSION['userName'])) {
$ownerID = $_SESSION['userName'];
}

require 'src/php/config.php';

//variables
$vname = $_POST["vehicle-brand"];
$type = $_POST["vehicle-type"];
$year = $_POST["vehicle-year"];
$seats = $_POST["vehicle-seats"];
$color = $_POST["vehicle-color"];
$rNumber = $_POST["vehicle-number"];
$gear = $_POST["vehicle-gear-type"];
$model = $_POST["vehicle-model"];


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO vehicles (Brand, Type, Year, Seats, Color, regNumber, Gear, Model, ownerID)
VALUES ('$vname', '$type', '$year','$seats','$color', '$rNumber ', '$gear','$model','$ownerID')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</html>