<?php

    include 'connect.php';

    $sql="SELECT type FROM stock";

    $result=mysqli_query($conn, $sql);

    $row=mysqli_fetch_array($result);

    while($row){



    }

?>