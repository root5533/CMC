<?php

require 'dbconnect.php';
echo "0000 <br>";

function addVehicle($array) {
    echo "11111 <br>";
    $driver_id = $_POST['driver_id'];
    $vehicle_no = $_POST['vehicle_no'];
    $brand = $_POST['brand'];
    $type = $_POST['type'];

    $complete = true;

    if (strlen(trim($vehicle_no)) == 0) {
        echo "<p class='error'>*Please insert valid vehicle registration number</p>";
        $complete = false;
    }
    if (strlen(trim($brand)) == 0) {
        echo "<p class='error'>*Please insert valid vehicle brand</p>";
        $complete = false;
    }
    if (empty($driver_id)) {
        echo "<p class='error'>*Please select driver ID</p>";
        $complete = false;
    }
    if (empty($type)) {
        echo "<p class='error'>*Please select vehicle type</p>";
        $complete = false;
    }

    if ($complete == true) {

        $query = "insert into vehicle(idDriver,RegistrationNo,Brand,Type)
                  values('$driver_id','$vehicle_no','$brand','$type')";
        $dbc = openDB();
        $result = mysqli_query($dbc,$query)
            or die(mysqli_error($dbc));
        closeDB($dbc);
        echo "Registration Successful!";
        return false;
    }
    else {
        return true;
    }

}