<?php
    require_once "dbconnect.php";
    $pdo = connect();
    $uniqueID = uniqid();
    
    $query = 'SELECT * FROM `Products` WHERE Products.productID = "'.$_GET['id'].'"';
    
    $stmt = $pdo->query($query);
    
    ## Combine the Tags
    $tags = array();
    $counter = 0;
    $chosenItem = $stmt->fetch(PDO::FETCH_ASSOC);
            
    if ( isset($_GET['id']) && isset($_GET['quanity'])
         && isset($_GET['fName']) && isset($_GET['lName'])
            && isset($_GET['phone'])
            && isset($_GET['email'])
            && isset($_GET['streetAddr'])
            && isset($_GET['city'])
            && isset($_GET['state'])
            && isset($_GET['zipCode'])
            && isset($_GET['cardHolderName'])
            && isset($_GET['cardNumber'])
            && isset($_GET['expMonth'])
            && isset($_GET['expYear'])
            && isset($_GET['cvv'])
            && isset($_GET['shipping'])) {
        $sql = "INSERT INTO PurchaseOrder (po, productID, qty, name, phone, email, address, cardName,
                ccNumber, expMonth, expYear, cvv, shipping)
                   VALUES (:po, :productID, :qty, :name, :phone, :email, :address, :cardName,
                :ccNumber, :expMonth, :expYear, :cvv, :shipping)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':po' => $uniqueID,
            ':productID' => $_GET['id'],
            ':qty' => $_GET['quanity'],
            ':name' => $_GET['fName']." ".$_GET['lName'],
            ':phone' => $_GET['phone'],
            ':email' => $_GET['email'],
            ':address' => $_GET['streetAddr'].", ".$_GET['city'].", ".$_GET['state'] .", ".$_GET['zipCode'],
            ':cardName' => $_GET['cardHolderName'],
            ':ccNumber' => $_GET['cardNumber'],
            ':expMonth' => $_GET['expMonth'],
            ':expYear' => $_GET['expYear'],
            ':cvv' => $_GET['cvv'],
            ':shipping' => $_GET['shipping']));
    }

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
                <div>
                    <h1 class="items" >Order Confirmed!</h1>
                    <h2>Confirmation Details</h2>';
                    echo '<br><img class="chosenItem" id='.$chosenItem[productID].' class="zoom" src="'.$chosenItem[imageLocation].'" alt="'.$chosenItem[productName].' Picture">';
                    echo '<p class="aboutUsContent"> Purchase Order#: '.$uniqueID.'</p>';
                    echo '<p class="aboutUsContent"> Product ID#: '.$_GET['id'].'</p>';
                    echo '<p class="aboutUsContent"> Quantity: '.$_GET['quanity'].'</p>';
                    echo '<p class="aboutUsContent"> Name: '.$_GET['fName']." ".$_GET['lName'].'</p>';
                    echo '<p class="aboutUsContent"> Phone Number#: '.$_GET['phone'].'</p>';
                    echo '<p class="aboutUsContent"> E-mail Address: '.$_GET['email'].'</p>';
                    echo '<p class="aboutUsContent"> Address: '.$_GET['streetAddr'].", ".$_GET['city'].", ".$_GET['state'] .", ".$_GET['zipCode'].'</p>';
                    echo '<p class="aboutUsContent"> Card Holder Name: '.$_GET['cardHolderName'].'</p>';
                    echo '<p class="aboutUsContent"> Card Number: '.$_GET['cardNumber'].'</p>';
                    echo '<p class="aboutUsContent"> Expiration Month: '.$_GET['expMonth'].'</p>';
                    echo '<p class="aboutUsContent"> Expiration Year: '.$_GET['expYear'].'</p>';
                    echo '<p class="aboutUsContent"> CVV: '.$_GET['cvv'].'</p>';
                    echo '<p class="aboutUsContent"> Shipping Method: '.$_GET['shipping'].'</p>';
                echo '</div>';
                echo '<br><a href="./shop.php"><button type="button" class="button" .style.display="block">Back to Shopping</button></a>';
        echo '</body>';
    
    mysql_close($pdo);
?>

