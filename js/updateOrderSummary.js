var shippingPrices = {"Overnight": 9.59, "Regular": 2.59};

function getInitialPrice(quantity, price){
    document.getElementById ("priceBeforeTax").innerHTML = "Price (before tax): $" + (quantity * price).toFixed(2);
}

function getTaxRate(zip){
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function (){
        if (xhr.readyState === 4 && xhr.status === 200){
            var result = xhr.responseText;
            var resultInt = parseFloat(result);
            document.getElementById("taxRate").innerHTML = "Tax Rate: " + (resultInt * 100).toFixed(1) + "%";
        }
    };
    
    xhr.open ("GET", "php/getTaxRate.php?zip="+zip, true);
    xhr.send ();
}