<!DOCTYPE html>	
<html>
<head>
        <title> Gamers Haven - Shop </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
</head>
<body>	
        <ul>
                <li><a class="notActive" href="index.php">Home</a></li>
                <li><a id="shop" class="active" href="shop.php">Shop</a></li>
                <li><a class="notActive" href="about.php">Our Story</a></li>
                <li style="float:right"><a class="notActive" href="mailto:aamondra@uci.edu?Subject=Gamers%20Haven%20Inquiry" style="background-color:#FD0000">Contact Us</a></li>
        </ul>

        <div id="item" class="items">
            <table id="product">
                    <caption>Product Description</caption>
    
    <?php
    require_once "dbconnect.php";
    $parameter = $_GET["productID"];
    ## Connect to DB ## 
    $pdo = connect();
    
    ## Retrieve product info from DB and save it as a string ##
    $query = 'SELECT * FROM `Products` JOIN `Tags` on Products.productID = Tags.productID WHERE Products.productID = "'.$parameter.'"';
    
    $stmt = $pdo->query($query);
    
    ## Combine the Tags
    $tags = array();
    $counter = 0;
    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
        if($counter < 1){
            echo '<tr>';
                echo '<td>';
                    echo '<img class="zoom" src="'.$row[imageLocation].'" alt="Product Picture">';
                echo '</td>';
                echo '<td>';
                    echo 'Product ID: '.$row[productID];
                    echo '<br><br>';
                    echo 'Product Name: '.$row[productName];
                    echo '<br><br>';
                    echo 'Price: $'.$row[productPrice];
                    echo '<br><br>';
                    echo 'Product Type: '.$row[productType];
                    echo '<br><br>';
                    echo 'Description: '.$row[description];
                    echo '<br><br>';
            $counter++;
        }
        array_push($tags, $row[tag]);
    }
    
                    echo 'Tags: '.join(", ", $tags);
                echo '</td>';
            echo '</tr>';
    mysql_close($pdo);
    ?>
                        
    </table>
    <button type="button" class="button" onClick="document.getElementById('purchaseScreen').style.display='block'" >Buy Product</button>
    </div>
    <div id="purchaseScreen" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-bottom" style="max-width:800px">
            <div class="w3-center">
                <br>
                <span onclick="document.getElementById('purchaseScreen').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close">&times;</span>

                <p class="formText"> Checkout </p>
            </div>

            <form id="purchaseForm" class="w3-container" action="confirmation.html" onsubmit="return sendEmailConfirmation()">
                <div class="w3-section">
                        <p class="formText"> Product Infomation </p>
                        <input class="w3-input w3-border w3-margin-bottom productID" type="text" placeholder="Product ID" name="id" style="display: inline-block; width: 25%" required>
                        <input class="w3-input w3-border w3-margin-bottom" type="number" min="1" placeholder="Quantity" name="quanity" style="display: inline-block; width: 25%" required>
                        <br>
                        <p class="formText"> Personal Infomation </p>
                        <input class="w3-input w3-border w3-margin-bottom names" type="text" placeholder="First Name" name="fName" pattern="[A-Za-z]{2,}" required>
                        <input class="w3-input w3-border w3-margin-bottom names" type="text" placeholder="Last Name" name="lName" pattern="[A-Za-z]{2,}" required>
                        <input class="w3-input w3-border w3-margin-bottom" type="tel" placeholder="Phone Number (e,i: XXX-XXX-XXX)" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                        <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Email Address" name="email" required>
                        <br>
                        <p class="formText"> Shipping Address </p>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Street Address" name="streetAddr" pattern="[A-Za-z0-9\s]{2,}" required>
                        <input class="w3-input w3-border w3-margin-bottom names" type="text" placeholder="City" name="city" pattern="[A-Za-z]{2,}" required>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="State (e,i: CA)" pattern="[A-Z]{2}" name="state" required>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Postal Code (e,i: 93030)" name="zipCode" pattern="[0-9]{5}" required>
                        <br>
                        <p class="formText"> Payment Information </p>
                        <input class="w3-input w3-border w3-margin-bottom names" type="text" name="cardHolderName" placeholder="Name on Card" pattern="[A-Za-z\s]{2,}" required>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Credit Card Number (e,i: XXXX-XXXX-XXXX-XXXX)" name="cardNumber" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
                        <input list="months" class="w3-input w3-border w3-margin-bottom names" name="expMonth" placeholder="Exp Month" required>
                        <datalist id="months">
                                <option value="January">
                                <option value="February">
                                <option value="April">
                                <option value="May">
                                <option value="June">
                                <option value="July">
                                <option value="August">
                                <option value="September">
                                <option value="October">
                                <option value="November">
                                <option value="December">
                        </datalist>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="expYear" placeholder="Exp Year (e,i: 2019)" pattern="[0-9]{4}" required>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="cvv" placeholder="CVV" pattern="[0-9]{3}" required>
                        <br>
                        <p class="formText"> Shipping Type </p>	
                        <input id="shippingType" type="radio" name="shipping" value="Overnight" required>
                        <label class="formText">Overnight - $9.59</label> <br>					
                        <input id="shippingType" type="radio" name="shipping" value="Regular" checked required>
                        <label class="formText">9-12 Bussiness Days - $2.59</label> <br>
                    <button class="w3-button w3-wide w3-block w3-green w3-section w3-padding" type="submit" style="width: 50%; margin: 0 25%; font-size:1.10vw">CONFIRM PURCHASE</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>