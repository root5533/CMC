<?php
    include "connect.php";

    $current_rows = $_GET['current_rows'];

    for ($i=1;$i<$current_rows;$i++) {
        $type           = $_POST['row1' + "$i"];
        $description    = $_POST['row2' + "$i"];
        $amount         = $_POST['row3' + "$i"];


        $insert = mysqli_query($conn, "INSERT INTO stock(type, description, amount)
											VALUES('$type', '$description', '$amount')");

        if ($insert) {
            echo 'Success';
        } else {
            echo 'Failed';
        }
    }


?>