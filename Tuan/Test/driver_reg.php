<?php

require 'driver_func.php';

echo
"<h2>Driver Registration</h2>";

$outform = true;
$name = null;
$nic = null;
$license = null;
$address = null;
$contact = null;

if (isset($_POST['add_driver'])) {
    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $license = $_POST['license'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $outform = addDriver($_POST);
}

if ($outform == true) {
    echo
    "<form action='driver_reg.php' method='post'>
    <label>Driver Name : </label> <input type='text' name='name' value='$name'> <br>
    <label>NIC : </label> <input type='text' name='nic' value='$nic'> <br>
    <label>License Number : </label> <input type='text' name='license' value='$license'> <br>
    <label>Address : </label> <input type='text' name='address' value='$address'> <br>
    <label>Contact : </label> <input type='number' name='contact' value='$contact'> <br>
    <input type='submit' name='add_driver' value='Submit'>
    </form>";
}