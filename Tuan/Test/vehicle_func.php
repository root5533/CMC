<?php

require 'dbconnect.php';


function addVehicle($array) {

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
        echo " Vehicle registration Successful!";
        return false;
    }
    else {
        return true;
    }

}

function getVehicles() {
    $query = "select idVehicle,RegistrationNo from vehicle";
    $dbc = openDB();
    $result = mysqli_query($dbc,$query)
        or die(mysqli_error($dbc));
    closeDB($dbc);
    return $result;
}

function addVehicleEntry($array) {
    $dbc = openDB();
    $vehicle_id = $array['vehicle'];
    if (strlen(trim($vehicle_id)) == 0) {
        echo "<p class='error'>*Please enter valid vehicle registration </p>";
        return true;
    }
    else {
        $query = "insert into vehicleentryrecord(idVehicle,entry_time)
              values('$vehicle_id',NOW())";
        $result = mysqli_query($dbc,$query)
        or die(mysqli_error($dbc));
        closeDB($dbc);
        echo "Vehicle Entry Record Added!!";
        return false;
    }

}