<?php

echo
"<h2> Vehicle Registration </h2>";

require 'vehicle_func.php';

$outform = true;
$driver_id = null;
$vehicle_no = null;
$brand = null;
$type = null;

if (isset($_POST['add_vehicle'])) {
    $driver_id = $_POST['idDriver'];
    $vehicle_no = $_POST['RegistrationNo'];
    $brand = $_POST['Brand'];
    $type = $_POST['Type'];
    $outform = addVehicle($_POST);
}

if ($outform == true) {

    echo
    "<label>Vehicle Brand : </label> <input type='text' name='brand' value='$brand' required> <br>
    <label>Vehicle Type : </label>
    <select name='type' required>
    <option value='car' selected>Car</option>
    <option value='truck'>Truck</option>
    <option value='bike'>Bike</option>
    <option value='ambulance'>Ambulance</option>
    <option value='tipper'>Tipper</option>
    </select> <br>
    <label>Driver ID</label>
    <input type='text' name='driver_id' value='$driver_id' required> <br>
    <label>Vehicle Registration No. </label> 
    <input type='text' name='vehicle_no' value='$vehicle_no' required>    
    ";
}