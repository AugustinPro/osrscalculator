<?php

include "../models/dbh.classes.php";
include "../models/signup.classes.php";
include "../models/signup-contr.classes.php";

if(isset($_POST["submit"]))
{

    // Getting data from the form
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];
    // $uid = 'uid';
    // $pwd = 'password';
    // $pwdRepeat = 'password';
    // $email = 'email@gmail.com';

    // Instantiating SignupContr
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
    // Running error handlers and user signup
    $signup->signupUser();

    // Send back to the front page
    header("location: ../index.php?page=home");
}