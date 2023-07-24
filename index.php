<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Anime World</title>

<link rel="preload" href="./images/background.png" as="image">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tektur&display=swap" rel="stylesheet">

<style>

	html, body {
		top: 0;
		margin: 0;
		padding: 0;
		height: 100%;
		width: 100%;
		overflow: auto;
		font-family: 'Tektur', cursive;
	}

	body {
		/* background-color: linen; */
		/* position:fixed; */
		background-image: url('./images/background.png');
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
	}

	h1,h2 {
	color: maroon;
	word-break: break-word;
	}

	h1:hover{
		text-shadow: 2px 2px 5px yellow;
	}

	h2:hover{
		text-shadow: 2px 2px 5px yellow;
		text-decoration: underline;
	}

	p{
		color: pink;
        font-size: 1.5rem;
        border-radius: 2ch;
        border-color: green;
	}

	li{
        font-size: 8;
        font-weight: bolder;
        color: yellow;
        font-family: sans-serif;
    }

	#u_reg_b{
        font-size: 1rem;
        padding: 0.8em;
        border-radius: 9999px;
        font-weight: 700;
        color: #1F2937; 
        background-color: #D1D5DB; 
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); 
        cursor:pointer;
	}

    #u_reg_b:hover {
        background-color: #9CA3AF;
        cursor: pointer;
    }

</style>

</head>

<body class="flex flex-col items-center justify-center align-middle">
	<!-- <div class="flex flex-col items-center justify-center"> -->
		<h1 class="bg-black-300 text-9xl font-bold underline text-white-300 text-center">
			Registration Homepage
		</h1>

		<br>
		
		<!-- <h2 class="bg-black-300 text-3xl font-bold underline p-5 text-white-300 p-5 py-5 px-5 mx-5 text-center"> -->
		<h2 class="text-6xl font-normal leading-normal text-green-800 text-center">
			Select an Option
		</h2>

		<br>

		<div>
			<a href="./login.php">  
			<button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-4 px-4 rounded-full shadow-lg">
				Go to Login Page </button>  
			</a>
		</div>

		<br>

		<div>
			<a href="./signup.php">  
				<button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-4 px-4 rounded-full shadow-lg"> 
				Go to Sign up Page </button>  
			</a>
		</div>
	<!-- </div> -->

	<br>
	<br>

	<?php
		// Write this Code when Logged into the Website --> In My Case my DB Website
		// So Following Information should be Shown on the DB Homepage :)

		if(isset($_SESSION["useruid"]))
		{
			echo "<p> Congratulations, You have Logged in Successfully :) </p>";
			echo "<br> <a id='u_reg' href='./anime_web/anime.php'> <button id='u_reg_b'> Proceed to Website </button> </a>";
		}else{
			echo "<p> Kindly, Login to Your Account :) </p>";
		}
	?>

	<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>