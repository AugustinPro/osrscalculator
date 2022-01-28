<?php

include "../models/dbh.classes.php";
include "../models/login.classes.php";
include "../models/login-contr.classes.php";

if(isset($_POST["submit"]))
{

    // Getting data from the form
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // Instantiating SignupContr
    $login = new LoginContr($uid, $pwd);
    // Running error handlers and user signup
    $login->loginUser();

    // Send back to the front page
    header("location: ../index.php?page=login-form");
}