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
                        <li><a class="notActive" href="index.php">Home</a></li>
                        <li><a id="shop" class="active" href="javascript:void(0)">Shop</a></li>
                        <li><a class="notActive" href="about.php">Our Story</a></li>
                        <li style="float:right"><a class="notActive" href="mailto:aamondra@uci.edu?Subject=Gamers%20Haven%20Inquiry" style="background-color:#FD0000">Contact Us</a></li>
                </ul>

                <div class="items">
                        <h2> Products </h2>
                        <table id="itemTable">';
    
    ## Connect to DB ## 
    $pdo = connect();
    
    ## Retrieve product info from DB and display it ##
    $stmt = $pdo->query("SELECT * FROM Products");
    $counter = 0;
    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
        if($counter % 3 == 0){
            echo '</tr>';
            echo '<tr>';
        }
        echo '<td>';
        echo '<a href="productPage.php?productID='.$row[productID].'">';
        echo '<img id='.$row[productID].' class="zoom" src="'.$row[imageLocation].'" alt="'.$row[productName].' Picture" onClick="loadProductPage(this.id)">';
        echo '</a>';
        echo '<p style="padding-top:10px">Price: $'.$row[productPrice].'</p>';
        echo '<p> Mfr.: '.$row[manufacturer].'<p>';
        echo '<p>Type: '.$row[productType].'</p>';
        echo '</td>';
        ++$counter;
    }
    
    echo '</tr>';
    mysql_close($pdo);
    
    echo '          </table>
                </div>
        </body>
        </html>';