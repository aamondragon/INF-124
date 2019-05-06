<?php

$ourTeam = array("Angel Mondragon", "Armando Torres", "Boomi (Team Mascot)");
$teamBio = array(   'I grew up playing video games and for me they were always my way of escaping the world when things got rough. Video games
                    created an immersive universe where I could forget about everythig else and just be myself. Thats why I joined Gamers Haven, 
                    I want to be able to help provide that experience for others by introducding them to video games.',
                    "Yo what's up! Im' here for the free video games, and for Boomi.", 
                    'I am a cat, but I love video games as well, gaming consoles in particular. They are nice and warm and the prefect place for
                    me to take a nap.');

echo '<!DOCTYPE html>
    <html>
    <head>
            <title> Gamers Haven - About Us </title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/styles.css">
            <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    </head>
    <body>
            <div class="bg"></div>

            <div class="aboutUs">
                    <ul>
                            <li><a class="notActive" href="index.php">Home</a></li>
                            <li><a class="notActive" href="shop.php">Shop</a></li>
                            <li><a id="about" class="active" href="javascript:void(0)">Our Story</a></li>
                            <li style="float:right"><a class="notActive" href="mailto:aamondra@uci.edu?Subject=Gamers%20Haven%20Inquiry" style="background-color:#FD0000">Contact Us</a></li>
                    </ul>
            </div>

            <div>
                    <h2> Our Mission</h2>

                    <p class="aboutUsContent">
                            Our Mission at <i>Gamers Haven</i> is to spread the love and passion for gaming, of every kind, from casual to competitive
                            to as many people as possible all around the globe for generations to come. 
                    </p>

                    <h2 style="padding-top:5vw"> Our Products</h2>

                    <p class="aboutUsContent">
                            <i>Gamers Haven</i> aims to provide the most popular and latest generation consoles for gamers, such as PS4, Xbox One, and 
                            Nintendo Switch. In addition to the latest generation consoles, we also provide a much more affordable method of purchasing 
                            gaming consoles from previous generations, such as the popular <i>GameCube</i> and <i>Nintendo Entertainment System</i>. 
                            <i>Gamers Haven</i> also provides gamers with the opportunity to purchase limited edition consoles for a longer duration 
                            of time, even after production ends. <br> We will also be expanding product line in the future.
                    </p>

                    <h2 style="padding-top:5vw"> Our Team</h2>

                    <p class="teamTable">
                            <table id="teamSection">
    ';

for($n = 0; $n < count($ourTeam); $n++){
    echo '<tr>';
        echo '<td>';
            echo '<img class="zoom" src="media/team/'.$n.'.jpg" alt="Profile Picture">';
        echo '</td>';
        echo '<td>';
            echo 'Name: '.$ourTeam[$n];
            echo '<br><br>';
            echo $teamBio[$n];
        echo '</td>';
    echo '</tr>';
}

echo '                      </table>
                        </p>
                </div>
        </body>
        </html>';
