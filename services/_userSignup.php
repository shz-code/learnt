<?php

include_once("./_dbConnection.php");

if(isset($_POST['newUser']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO users(user_username, user_email, user_pass) VALUES ('$username','$email','$pass')";

    // if($conn->query($sql))
    // {
    //     echo json_encode("Done");
    // } else
    //     echo json_encode("Failed");
}