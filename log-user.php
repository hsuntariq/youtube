<?php 
    session_start();
    include './config.php';
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $checkUser = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($connection,$checkUser);

    if(mysqli_num_rows($result) > 0){
        // user present
        foreach($result as $item){
            $_SESSION['ticket'] = $item['name'];
            $_SESSION['user_id'] = $item['id'];
        }
        header("Location: http://localhost:3000");
    }else{
        // not present
        $_SESSION['invalid'] = 'Invalid Credentials';
        header("Location: http://localhost:3000/login.php");
    }


    /*
        if(rows > 0){
            user logs in
        }else{
            invalid credentials
        }
    */


?>