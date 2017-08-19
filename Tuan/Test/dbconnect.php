<?php

$dbc = null;
function openDB() {
    $domain = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'headfirst';

    $dbc = mysqli_connect($domain,$username,$password,$db)
    or die(mysqli_connect_error());
    return $dbc;
}


function closeDB($dbc){
    mysqli_close($dbc);
}

