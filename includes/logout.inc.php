<?php

session_start();
session_unset();
session_destroy();


// Send back to the front page
header("location: ../index.php?page=home");