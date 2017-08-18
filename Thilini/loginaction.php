<?php
    include "connect.php";

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM user WHERE user_name='$username'";

    $row = mysqli_query($conn,$sql);

    $user = mysqli_fetch_array($row);

    echo $password;
    echo $user['Password'];

    if (mysqli_num_rows($row) > 0) {
        if ($password == $user['Password']) {
            header('Location:index.php ');
        }else{
            echo "Wrong Username or Password";
        }
    }else{
        echo "User is not in the Database";
    }

?>