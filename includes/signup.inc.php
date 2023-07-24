<?php
//  Signup Handler

if(isset($_POST['submit'])) {
    echo "\n Signup Submit POST Works";

    $name = $_POST['name']; // its Full Name in HTML Form
    $email = $_POST['email'];
    $userName = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // These Functions will be defined by Me in functions.inc.php file

    if(emptyInputSignup($name, $email, $userName, $pwd, $pwdRepeat) !== false)
    {
        header("location: ../signup.php?error=Empty_Input");
        exit();
    }
    if(invalidUid($userName) !== false)
    {
        header("location: ../signup.php?error=Invalid_UserName_ID");
        exit();
    }
    if(invalidEmail($email) !== false)
    {
        header("location: ../signup.php?error=InvalidEmail");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false)
    {
        header("location: ../signup.php?error=Invalid_Password_Doesn't_Match");
        exit();
    }
    if(uidExists($conn, $userName, $email) !== false)
    {
        header("location: ../signup.php?error=UserName_Already_Taken");
        exit();
    }

    createUser($conn, $name, $email, $userName, $pwd);
}
else {
    header("location: ../signup.php");
    exit();
}