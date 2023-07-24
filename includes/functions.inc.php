<?php
// To Verify and Validate User Inputs --> Error Handling

function emptyInputSignup($name, $email, $userName, $pwd, $pwdRepeat)
{
    $result = false;

    if(empty($name) || empty($email) || empty($userName) 
                    || empty($pwd) || empty($pwdRepeat))
    {
        $result = true;
    }

    return $result;
}

function invalidUid($userName)
{
    $result = false;

    if(!preg_match("/^[a-zA-Z0-9]*$/", $userName))
    {
        $result = true;
    }

    return $result;
}

function invalidEmail($email)
{
    $result = false;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $result = true;
    }

    return $result;
}

function pwdMatch($pwd,$pwdRepeat)
{
    $result = false;

    if($pwd !== $pwdRepeat)
    {
        $result = false;   
    }

    return $result;
}

function uidExists($conn, $userName, $email)
{
    $result = true;
    
    $sql = "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        # code...
        header("location: ../signup.php?error=Statement_Failed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $userName, $email); 
    // two s shows that we have 2 strings, for n number of strings then n s
    
    // remember stmt is binded with sql. 
    // so no need to pass sql anywhere.
    mysqli_stmt_execute($stmt);
    
    $result_from_DB = mysqli_stmt_get_result($stmt);
    
    // using the variable result_from_DB
    // we are checking if user exists in DB
    // if it does then store its data in 
    // variable called row.

    if ($row = mysqli_fetch_assoc($result_from_DB)) {
        return $row;
    }
    else
    {
        $result = false;
    }
    
    mysqli_stmt_close($stmt);
    return $result;
}

function createUser($conn, $name, $email, $userName, $pwd)
{
    $sql = "INSERT INTO users (userName, userEmail, userUid, userPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        # code...
        header("location: ../signup.php?error=Statement_Failed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss",  $name, $email, $userName, $hashedPwd); 
    // Four s shows that we have 4 strings, for n number of strings then n s
    
    // remember stmt is binded with sql. 
    // so no need to pass sql anywhere.
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=None");
    exit();
}


// For Login Functionality

function emptyInputLogin($userName, $pwd)
{
    $result = false;

    if(empty($userName) || empty($pwd))
    {
        $result = true;
    }

    return $result;
}

function loginUser($conn, $userName, $pwd)
{
    $uidExists = uidExists($conn, $userName, $userName);

    if ($uidExists === false) {
        header("location: ../login.php?error=Login_Error");
        exit();
    }

    // fetch hashed password from database,
    // uidExists function returned row array

    $pwd_Hashed = $uidExists["userPwd"];
    $checkPwd = password_verify($pwd, $pwd_Hashed);

    if($checkPwd === false)
    {
        header("location: ../login.php?error=Login_Error");
        exit();
    }
    else if($checkPwd === true)
    {
        session_start();
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["useruid"] = $uidExists["userUid"];
        header("location: ../index.php");
        exit();
    }
}