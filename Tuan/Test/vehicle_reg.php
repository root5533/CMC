<?php

echo
"<h2> Vehicle Registration </h2>";

require 'vehicle_func.php';
require 'driver_func.php';

$outform = true;
$driver_id = null;
$vehicle_no = null;
$brand = null;
$type = null;

if (isset($_POST['add_vehicle'])) {

    $driver_id = $_POST['driver_id'];
    $vehicle_no = $_POST['vehicle_no'];
    $brand = $_POST['brand'];
    $type = $_POST['type'];
    $outform = addVehicle($_POST);
}

if ($outform == true) {

    echo
    "<form action='vehicle_reg.php' method='post'>
    <label>Vehicle Brand : </label> <input type='text' name='brand' value='$brand' required> <br>
    <label>Vehicle Type : </label>
    <select name='type' required>
    <option value='car' selected>Car</option>
    <option value='truck'>Truck</option>
    <option value='bike'>Bike</option>
    <option value='ambulance'>Ambulance</option>
    <option value='tipper'>Tipper</option>
    </select> <br>
    <label>Driver ID : </label>";

    echo "<input list='driver' name='driver_id' required>
    <datalist id='driver'>
        ";

    $drivers = getDrivers();
    while ($row = mysqli_fetch_array($drivers)) {
        $value = $row['idDriver'];
        $name = $row['Name'];
        echo
        "<option value='$value'>$name</option>";
    }

//    while ($row = mysqli_fetch_array($drivers)) {
//        $name = $row['Name'];
//        $id = $row['idDriver'];
//        echo "$name, $id <br>";
//    }

    echo
    "</datalist> <br>
    <label>Vehicle Registration No. </label> 
    <input type='text' name='vehicle_no' value='$vehicle_no' required> <br>
    <input type='submit' name='add_vehicle' value='Register Vehicle'>
    </form> 
    ";
}