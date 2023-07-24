<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

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
    <div class="w-full max-w-xs" id="parent">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" id="form_login" action = "includes/login.inc.php" method = "post">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    id="username" name="uid" type="text" placeholder="Enter Username or Email">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
                    id="password" name = "pwd" type="password" placeholder="******************">
                <p class="text-red-500 text-xs italic"> Please Choose a Password </p>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                    name = "submit" type="submit">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>

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
                else if ($_GET["error"] == "Login_Error") {
                    # code...
                    echo "<p> Sorry, User Doesn't Exist </p> <p> Tip : Either UserName or Password may be Entered Wrong </p>";
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