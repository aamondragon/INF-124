<style>
    <?php include 'css/styles.css'; ?>
</style>

<?php
    require_once "dbconnect.php";

    echo '<!DOCTYPE html>
        <html>
        <head>
                <title> Gamers Haven - Shop </title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="css/styles.css">
                <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
        </head>
        <body">	
                <ul>
                        <li><a class="notActive" href="index.html">Home</a></li>
                        <li><a id="shop" class="active" href="javascript:void(0)">Shop</a></li>
                        <li><a class="notActive" href="about.html">Our Story</a></li>
                        <li style="float:right"><a class="notActive" href="mailto:aamondra@uci.edu?Subject=Gamers%20Haven%20Inquiry" style="background-color:#FD0000">Contact Us</a></li>
                </ul>

                <div class="items">
                        <h2> Products </h2>
                        <table id="itemTable">';
    
    ## Connect to DB ## 
    $pdo = connect();
    
    echo '          </table>
                </div>
        </body>
        </html>';
?>