<?php

require 'dbconnect.php';

function addVehicle($array) {
    $driver_id = $array['idDriver'];
    $vehicle_no = $array['RegistrationNo'];
    $brand = $array['Brand'];
    $type = $array['Type'];

    $complete = true;

    if (strlen(trim($vehicle_no)) == 0) {
        echo "<p class='error'>*Please insert valid vehicle registration number</p> <br>";
        $complete = false;
    }
    if (strlen(trim($brand)) == 0) {
        echo "<p class='error'>*Please insert valid vehicle brand</p> <br>";
        $complete = false;
    }
    if (empty($driver_id)) {
        echo "<p class='error'>*Please select driver ID</p><br>";
        $complete = false;
    }
    if (empty($type)) {
        echo "<p class='error'>*Please select vehicle type</p><br>";
        $complete = false;
    }

    if ($complete == true) {

        $query = "insert into vehicle('idDriver','RegistrationNo','Brand','Type')
                  values('$driver_id','$vehicle_no','$brand','$type')";
        $dbc = openDB();
        $result = mysqli_query($dbc,$query)
            or die(mysqli_error($dbc));
        closeDB($dbc);
    }
}