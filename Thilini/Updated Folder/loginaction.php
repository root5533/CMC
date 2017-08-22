<?php

session_start();

if(isset($_POST['submit'])){

    include 'connect.php';

    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    /*$email=mysqli_real_escape_string($conn,$_POST['email']);*/


    //error handlers
    // check input are empty

    if(empty($password) || empty($username)){
        header("location:login.php?login=empty");
        exit();

    }else{
        $sql="SELECT * FROM user WHERE username='$username'";
        $result=mysqli_query($conn, $sql);
        $resultcheck=mysqli_num_rows($result);

        if($resultcheck <1){
            header("location:login.php?login=error");
            exit();
        }else{
            if($row=mysqli_fetch_assoc($result)){
                //de-hashing the password
                $hashedpwdcheck=password_verify($password,$row['password']);

                if($hashedpwdcheck==false){
                    header("location:login.php?login=error");
                    exit();

                }elseif($hashedpwdcheck==true){
                    //log in the user here
                    $_SESSION['username']=$row['username'];
                    $_SESSION['password']=$row['password'];
                    /*$_SESSION['email']=$row['email'];*/
                    header("location:index.php?login=success");
                    exit();

                }




            }

        }
    }



}else{
    header("location:login.php");
    exit();
}