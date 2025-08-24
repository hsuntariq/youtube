<?php 
    session_start();
    include './config.php';
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $insert = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')" or die();
    mysqli_query($connection,$insert);

    // assign ticket
    
    
    $_SESSION['ticket'] = $name;

    header("Location: http://localhost:3000")

?>