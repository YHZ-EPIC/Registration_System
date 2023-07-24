<!--- Create a website from html using all the taught topics in class .On your favorite Book or Movie character.
Website should be awesome which includes all html tags taught in class.Make your website 
beautiful as much as you can using HTML.like include images,videos ,forms ,links and many more things e.t.c .
You are open to take ideas from internet also.--->

<!-- Video,Audio,Form, Header, Body , Footer , Div , cite , Button-->

<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final HTML Project</title>

    <style>
        .back{
            position:absolute;
            background-color:black;

            height: 100%;
            width: 100%;

            top:0px;
            right:0px;
            bottom:0px;
            left:0px;
    }
    </style>
</head>

<div class="back">
    <header>
        <style>
            .mydivH{
                width: 100%;
                height:145px;
               
                color: orange;
                border : 2px solid black;
                text-align:center;
                background-color: darkblue;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
        </style>
    
        <img src="https://media.giphy.com/avatars/dragonballsuper/u68kbJLIrjMT.gif" ALIGN="right" alt="Dragonball" width="250" height="150">
        
        <div class="mydivH"> 
            <h1 style="margin: 2ch;"> 
            <i>
                <b>
                    My Favourite Character : Goku ( DragonBall Z )
                </b>
            </i>
            </h1>
        </div>
    </header>
    
    <br><br>
    
    <body>
        <style>
                .hunter{
                    text-align: center;
                    font-family:Verdana, Geneva, sans-serif;

                #u_reg{
                    color: pink;
                    font-size: 1.5rem;
                    border-radius: 2ch;
                    border-color: green;
                    
                    }

                    #u_reg_b{
                        /* color:brown;
                        border-radius: 2ch;
                        border-color: green; */
                        
                        /* padding-top: 1rem;
                        padding-bottom: 1rem; 
                        padding-left: 1rem;
                        padding-right: 1rem;  */

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
                }
        </style>

        <div class="hunter">
            <?php
                if(isset($_SESSION["useruid"]))
                {
                    echo "<p id='u_reg'> Greetings, " . $_SESSION["useruid"] . " <br> Welcome to the Anime World :) </p>";
                    echo "<a id='u_reg' href='../includes/logout.inc.php'> <button id='u_reg_b'> Log Out </button> </a>";
                }else{
                    echo "<p id='u_reg'> You are not Logged in <br> Continue to Explore :) </p>";
                }
            ?>
<!-- 
            <br>
            <br>

            <a id='u_reg' href="../index.php">
                <button id="u_reg_b">    
                    Return to HomePage </button>
            </a> -->
        </div>
        
        <style>
            .mydiv1{
                height:auto;
                background-color: black;
                color: yellow;
                word-wrap: normal;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
        </style>
        

        <div class="mydiv1">

           <section>
               <h1 style="margin-left: 3ch;"> --- Introduction --- </h1>
               <p style="margin-left: 5ch;  color: orange">
                Son Goku, Kakarot, is the Main Protagonist of the Dragon Ball metaseries. &nbsp
                Kakarot was originally sent via capsule to Earth to enslave and conquer the planet. <br>
                But when he arrived, he sustained a fatal head injury.&nbsp
                The people of Earth took Goku and nursed him back to health.<br>
                As a result of the injury, Goku forgot all about his original mission and his past. &nbsp;
                And due to their kindness, grew up on Earth as its guardian.  <br>
                <br>
                <cite >
                    "Despite all my heinous provocations on Namek, even after murdering two of his friends, driving him to become a Super Saiyan, still he couldn't find it in him to put me down. <br> 
                    So unusual, a Saiyan with such a strong moral center. So pure, he makes me want to vomit!"
                </cite>
                <p style="text-align: center;  color: greenyellow"><i> - Frieza's Description of Goku's Nature. </i></p>
            </p>

            <br>

               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlD2BwVOZ86iYfKYwZ7uIAutyi-ETo-r7AT4YZqsbxDWUstXP0z4cHuXp8y7706TRmrv0&usqp=CAU" alt="Dragonball" width="250" height="150">
               <img src="https://www.looper.com/img/gallery/why-gokus-marriage-has-dragon-ball-fans-scratching-their-heads/l-intro-1615983960.jpg" alt="Dragonball" width="250" height="150">
               <img src="https://qph.fs.quoracdn.net/main-qimg-0ad02afa06efa2edf0959512c05bf60a" alt="Dragonball" width="250" height="150">
           </section>

           <section>
               <h1 style="margin-left: 3ch;""> --- Super Powers --- </h1>
               <img src="https://i.gifer.com/BQ0Y.gif" alt="Dragonball">
               <br>
               <p style="margin-left: 3ch;  color: orange">
                He can Tranform into many different level of Powerful Forms. <br> 
                Forms are Listed in Order of their Power Level,
                </p>
                
                <ol>
                    <li style="font-size: large;";">Super Saiyan</li>
                    <br>
                    <img src="https://m-cdn.phonearena.com/images/article/129526-wide-two_1200/Google-Assistants-new-Easter-Egg-recreates-the-first-time-DBZs-Goku-became-a-Super-Saiyan.jpg" alt="Dragonball" width="500" height="250">
                    <br>
                    <li style="font-size: large;";>Super Saiyan 2</li>
                    <br>
                    <img src="https://videogamemods.com/fighterz/wp-content/uploads/sites/5/cmdm/167446/1540054644_20181020123701_1-1600x900.jpg" alt="Dragonball" width="500" height="250">
                    <br>
                    <li style="font-size: large;";>Super Saiyan 3</li>
                    <br>
                    <img src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2020/02/Super-Saiyan-3-Featured.jpg" alt="Dragonball" width="500" height="250">
                    <br>
                    <li style="font-size: large;";>Super Saiyan Red</li>
                    <br>
                    <img src="https://evedonusfilm.com/wp-content/uploads/2021/05/Super-Saiyan-God.jpg" alt="Dragonball" width="500" height="250">
                    <br>
                    <li style="font-size: large;";>Super Saiyan Blue</li>
                    <br>
                    <img src="https://besthqwallpapers.com/Uploads/14-5-2018/52641/thumb2-super-saiyan-blue-fighter-dbs-super-saiyan-god-4k.jpg" alt="Dragonball" width="500" height="250">
                    <br>
                    <li style="font-size: large;";>Ultra Instinct</li>
                    <br>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZxK9cZe9OXzFffBunXilBm_3wRjlhzUZ8RdKbt19oMrNOFRV23AyMv0y2SYiJW32STLA&usqp=CAU" alt="Dragonball" width="500" height="250">
                    <br>
                </ol>
            </section>
            
            <section>
                <h3 style="margin-left: 3ch;"><b> --- Friends/Family of Goku --- </b></h3>

                <p style="margin-left: 3ch; color: orange;">
                    <i>
                        Goku has a father named Bardock. Goku's Teacher is Master Roshi. <br>
                        The One who adopted him on Earth was Grandpa Gohan. Goku became Martial Artist.
                        He married with Chi-Chi and have 2 Sons named Gohan and Goten. <br>
                        Goku also has very close friends, They are Famous as "Z-Warriors".
                        Namely Picollo,Yamcha,Krillin and many more.
                    </i>
                    
                    <br>
                    <li style="font-size: large; margin-left: 3ch";>Z - Warriors</li>
                    <br>
                    <img src="http://www.artnet.com/WebServices/images/ll00109lldJumJFgp2qCfDrCWvaHBOcCz2F/akira-toriyama-picollo.jpg" alt="Dragonball" width="500" height="250">
                    <img src="https://qph.fs.quoracdn.net/main-qimg-82d5275e3fb23ea7b8245b2c0649f8db" alt="Dragonball" width="500" height="250">
                    <img src="https://www.opticflux.com/wp-content/uploads/2021/09/Krillin-Died-Again-799x449-1.jpg" alt="Dragonball" width="500" height="250">

                    <br>
                    <br>
                    <li style="font-size: large; margin-left: 3ch";>Goku's Father</li>
                    <br>
                    <img src="https://sportshub.cbsistatic.com/i/2021/09/17/8e86e8d6-c63c-4c25-9c7c-0942441400d4/dragon-ball-bardock.png" alt="Dragonball" width="500" height="250">
                    <img src="https://mangathrill.com/wp-content/uploads/2021/01/pjimage-5-3.jpg" alt="Dragonball" width="500" height="250">
                    <br>

                    <br>
                    <li style="font-size: large; margin-left: 3ch";>Goku's Grandpa</li>
                    <br>
                    <img src="https://i.ytimg.com/vi/0PvB9XYXOHw/maxresdefault.jpg" alt="Dragonball" width="500" height="250">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRna72i-aOfYmuA7zLJ1orcxLNXvywU5ID5LQ&usqp=CAU" alt="Dragonball" width="500" height="250">
                    <br>

                    <br>
                    <li style="font-size: large; margin-left: 3ch";>Goku's Teacher</li>
                    <img src="https://media.eventhubs.com/images/2020/08/22-heres-possible-reason-why-master-roshi-cant-fly-and-why-he-wont-.jpg" alt="Dragonball" width="500" height="250">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT40UHVMy8nriN5HcokyFGDJb84HDtWkwfHPA&usqp=CAU" alt="Dragonball" width="500" height="250">
                    <br>
                
                    <br>
                    <li style="font-size: large; margin-left: 3ch";>Goku's Wife and Children</li>
                    <br>
                    <img src="https://vignette.wikia.nocookie.net/p__/images/0/0c/Chi-Chi_with_Goku_and_Gohan.jpg/revision/latest?cb=20180527071758&path-prefix=protagonist" alt="Dragonball" width="500" height="250">
                    <img src="https://i.ytimg.com/vi/LfBQaET3L3I/maxresdefault.jpg" alt="Dragonball" width="500" height="250">
                    <img src="https://scriptanime.files.wordpress.com/2015/05/goku-meets-goten.jpg" alt="Dragonball" width="500" height="250">
                    <br>

                    <br>
                    <li style="font-size: large; margin-left: 3ch";>Goku's Rival and Best Friend</li>
                    <br>
                    <img src="https://asapland.com/wp-content/uploads/2021/04/super-dragon-ball-heroes-cosa-successo-vegeta-perche-non-goku-v3-509954.webp.webp" alt="Dragonball" width="500" height="250">
                    <img src="https://i.ytimg.com/vi/r8oNBQmXKhA/maxresdefault.jpg" alt="Dragonball" width="500" height="250">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdPAD5mjksiuB3ZfRHIOSu-XXOLovj9oKmLPgylxiBv_GIAfEh_VquxAwXBA6NMptYB_M&usqp=CAU" alt="Dragonball" width="500" height="250">
                    <br>
                </p>

            </section>

            <section>
                <h3 style="margin-left: 3ch;"><b> --- ITS MOST FAMOUS Theme Song ---</b></h3>
                <audio controls style="margin-left: 5ch;">
                    <source src="assets/audio.mp3" type="audio/mpeg">
                  Your browser does not support the audio element.
                  </audio>
            </section>

            <section>
                <h3 style="margin-left: 3ch;"><b> --- Some Nostalgic Opening Themes ---</b></h3>

                <ul style="list-style-type:disc;">
                <li style="margin-left: 3ch;"> Original Dragonball </li> <br>
                
                <video controls>
                    <source src="assets/V1.mp4" type="video/mp4">
                    Your browser does not support the video element.
                </video>
                <br>

                <li style="margin-left: 3ch;"> Dragonball Z </li> <br>
                
                <video controls>
                    <source src="assets/V2.mp4" type="video/mp4">
                    Your browser does not support the video element.
                </video>
                <br>

                <li style="margin-left: 3ch;"> Dragonball Super </li> <br>
                
                <video controls>
                    <source src="assets/V3.mp4" type="video/mp4">
                    Your browser does not support the video element.
                </video>
                <br>

                </ul>

            </section>

            <section>
                <!-- NORMAL LINK :  <a href="https://www.thesitewizard.com/">thesitewizard.com</a> -->
               <!-- NEW TAB LINK : <a href="https://www.thesitewizard.com/" target="_blank">thesitewizard.com</a> -->
               
               <h1 style="margin-left: 3ch;">
                   Wonna Test Your Knowledge ?
               </h1>
    
               <a href="assets/form.html" style="margin-left: 15ch;" target="_blank"> <button style="font-size: large;"> <b> Click Here </b> </button> </a>
               <br>
               <br>
           </section>
        </div>

            <h1 style="text-align:center; background-color: white; color: black;">
                THANKS FOR VISITING 😊😊
            </h1>

    </body>
</div>

</html>