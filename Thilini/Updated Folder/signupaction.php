<?php

/*include ("connect.php");*/


if(isset($_POST['signup'])){

    include_once 'connect.php';

    $username=mysqli_real_escape_string($conn, $_POST['uname']);
    $password=mysqli_real_escape_string($conn, $_POST['pwd']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);

    //Error handlers
    //check for empty fields

    if(empty($username) || empty($password) || empty($email)){
        header("location:signup.php");
        exit();
    }else{
        //check if input characters valid
        if(!preg_match("/^[a-zA-Z]*$/",$username)){
            header("location:signup.php");
            exit();

        }else{
            //check email valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("location:signup.php");
                exit();

            }else{
                $sql="SELECT * FROM user WHERE username='$uname'";
                $result=mysqli_query($conn, $sql);
                $resultcheck=mysqli_num_rows($result);

                if($resultcheck > 0){
                    header("location:signup.php.php");
                    exit();

                }else{
                    //hashing the password
                    $hashedpwd=password_hash($password, PASSWORD_DEFAULT);
                    //insert the user into database
                    $sql="INSERT INTO user (username, password, email) VALUES ('$username', '$hashedpwd', '$email');";
                    mysqli_query($conn, $sql);
                    header("location:signup.php");
                    exit();

                }

            }

        }

    }




}else{
    header("location:login.php");
    exit();
}

?>


