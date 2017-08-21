<html>
<title>Job Entry</title>
<head>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>

<h2>Job Entry Form</h2>

<?php

require_once 'vehicle_func.php';

$outform = true;
$vehicle = null;
$date = null;
$job_type = null;
$job_description = null;
$applicant = null;
$priority = null;

if (isset($_POST['job_entry'])) {
    $vehicle = $_POST['vehicle'];
    $job_type = $_POST['job_type'];
    $job_description = $_POST['job_description'];
    $applicant = $_POST['applicant'];
    $priority = $_POST['priority'];
    $outform = checkJob();
}

if ($outform == true) {
    echo
    "<form action='job_entry.php' method='post'>
    <label>Vehicle : </label>
    <input type='text' list='vehicles_in' name='vehicle' required>
    <datalist id='vehicles_in'>";
    $vehicles_in = getVehicleIn();
    echo "Came Here";
    while ($row = mysqli_fetch_array($vehicles_in)) {
        $vehicle_id = $row['idVehicle'];
        $number_plate = $row['RegistrationNo'];
        echo
        "<option value='$vehicle_id'>$number_plate</option>";
    }
    echo
    "</datalist> <br>
    <label>Job Type : </label>
    <select name='job_type' required>
    <option value='maintenance'>Maintenance</option>
    <option value='production'>Production</option>
    </select> <br>
    <label>Job Description : </label>
    <textarea name='job_description' placeholder='Enter Job Details'>$job_description</textarea> <br>
    <label>Applicant : </label>
    <input type='text' name='applicant'><br>
    <label>Priority : </label>
    <select name='priority' required>
    <option value='high'>High</option>
    <option value='low'>Low</option>
    </select><br>
    <input type='submit' name='job_entry' value='Submit'>
    ";
}
else {
    echo
    "<p>Vehicle Registration Number : $vehicle <br>
    Job Type : $job_type <br>
    Job Description : $job_description <br>
    Applicant Name : $applicant <br>
    Priority Level : $priority <br>
    </p>
    <form action='request_complete.php' method='post'>
    <input type='submit' name='job_entry_ver' value='Confirm'>
    <input type='button' onclick='goBack()' value='Back'>
    </form>
    ";
}
?>

</body>

</html>