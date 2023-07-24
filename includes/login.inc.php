<?php
//  Login Handler

if (isset($_POST['submit'])) {
    # code...
    $userName = $_POST['uid'];
    $pwd = $_POST['pwd'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($userName, $pwd) !== false)
    {
        header("location: ../login.php?error=Empty_Input");
        exit();
    }

    loginUser($conn, $userName, $pwd);
}
else
{
    header("location: ../login.php");
    exit();
}