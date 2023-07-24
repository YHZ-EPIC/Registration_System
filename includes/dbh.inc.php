<?php
//  Database Handler

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "anime";

$conn = mysqli_connect($serverName,$dBUserName,$dBPassword,$dBName);

if (!$conn) {
    # code...
    die("\n Server Connection Failed : " . mysqli_connect_error());
}

echo "Connected successfully";