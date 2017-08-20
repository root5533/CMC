<html>
<title>Vehicle Entry</title>
<head></head>

<body>

<h2>Vehicle Entry Record</h2>

<?php
require_once 'vehicle_func.php';
$outform = true;
$vehicle = null;
$time = null;

if (isset($_POST['vehicle_entry'])) {
    $vehicle = $_POST['vehicle'];
    $outform = addVehicleEntry($_POST);
}

if ($outform == true) {
    echo
    "<form action='" . $_SERVER['PHP_SELF'] .
    "' method='post'>
    <label>Vehicle : </label><input type='text' name='vehicle' list='vehicles'>
    <datalist id='vehicles'>";

    $vehicles = getVehicles();
    while ($row = mysqli_fetch_array($vehicles)){
        $vehicle_id = $row['idVehicle'];
        $number_plate = $row['RegistrationNo'];
        echo
        "<option value='$vehicle_id'>$number_plate</option>";
    }

    echo
    "</datalist> <br>
    <input type='submit' name='vehicle_entry' value='Submit'>";
}
?>

</body>

</html>