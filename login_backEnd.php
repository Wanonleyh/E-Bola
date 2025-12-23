<?php
session_start();
    include("config.php");

    if (isset($_POST['submit'])) {
        $user_name = $_POST['user_name'];
        $find_user_sql = mysqli_query($conn,"SELECT * FROM login WHERE user_name = '$user_name'");
        $find_user = mysqli_fetch_array($find_user_sql);
        $user_name = $find_user['user_name'];

        if($user_name == $user_name){
            $user_password= $find_user['user_password'];
            $user_password = $_POST ['user_password'];

            if($user_password == $user_password){
                $_SESSION['isLoggedin'] = 2;
                header("location:./index.php");
                
            }
            else {
                $_SESSION['error'] = "Password Pengguna Tidak Sepadan";
                header("location:login.php");
                
            }
        }
        else {
                $_SESSION['error'] = "Nama Pengguna Tidak Dapat Dijumpai";
                header("location:login.php");
                

            }
    }else {
        header("location:index.php");
    }
?>