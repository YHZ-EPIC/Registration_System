<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="preload" href="./images/signup.jpg" as="image">

    <style>
        html,body{
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
        body{
            /* background: grey; */
            vertical-align: middle;
            background-image: url('./images/signup.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        p{
            font-size: 13;
            font-weight: bolder;
            color: yellow;
            font-family: sans-serif;
        }
    </style>
</head>

<body class="flex flex-col items-center justify-center">
    <section>
        <form class="w-full max-w-sm" action = "includes/signup.inc.php" method = "post">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Full Name
                </label>
                </div>
                <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                    id="inline-full-name" name="name" type="text" placeholder="Enter Your Name">
                </div>
            </div>

                <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Email
                </label>
                </div>
                <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                    id="inline-full-name" name="email" type="text" placeholder="Enter an Email">
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Username
                </label>
                </div>
                <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                    id="inline-full-name" name="uid" type="text" placeholder="Enter a Username">
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                    Password
                </label>
                </div>
                <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                    id="inline-password" name="pwd" type="password" placeholder="******************">
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                    Confirm Password
                </label>
                </div>
                <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                    id="inline-password" name="pwdrepeat" type="password" placeholder="******************">
                </div>
            </div>

            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" 
                    name="submit" type="submit">
                    Sign Up
                </button>
                </div>
            </div>
        </form>
    </section>
    
    <br>
        
        <?php
            // _POST : Checking for Data we can't see inside the URL, 
            // _GET : Checking for Data that we can see inside the URL.
            if(isset($_GET["error"]))
            {
                if ($_GET["error"] == "Empty_Input") {
                    # code...
                    echo "<p> Kindly Fill all the Fields </p>";
                }
                else if ($_GET["error"] == "Invalid_UserName_ID") {
                    # code...
                    echo "<p> Kindly Enter Valid UserName </p>";
                }
                else if ($_GET["error"] == "InvalidEmail") {
                    # code...
                    echo "<p> Kindly Enter Valid Email </p>";
                }
                else if ($_GET["error"] == "Invalid_Password_Doesn't_Match") {
                    # code...
                    echo "<p> Password Doesn't Match </p>";
                }
                else if ($_GET["error"] == "UserName_Already_Taken") {
                    # code...
                    echo "<p> Sorry, UserName Already Exists </p>";
                }
                else if ($_GET["error"] == "Statement_Failed") {
                    # code...
                    echo "<p> Sorry, Something Went Wrong ! </p>";
                }
                else if ($_GET["error"] == "None") {
                    # code...
                    echo "<p> Congratulations, You have Signed Up Successfully :) </p>";
                }
            }
        ?>
    
    <br>

    <div>
        <a href="./index.php">  
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-4 px-4 rounded-full shadow-lg">    
                Return to HomePage </button>
        </a>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>