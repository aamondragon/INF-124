var url_string = window.location.href;
var url = new URL(url_string);
var productID = url.searchParams.get("product");
var regularShipping = 2.59;
var overnightShipping = 9.59;

function displayProduct(){
	var productTable = document.getElementById("product");
	var productRow = productTable.insertRow(0);
	var imageCell = productRow.insertCell(0);
	var description = productRow.insertCell(1);
	
	var img = document.createElement("img");
	img.src = "media/products/" + productID + "/0.jpg";
	img.className = "zoom";
	
	var lineBreak = document.createElement("br");
	var lineBreak2 = document.createElement("br");
	var lineBreak3 = document.createElement("br");
	var lineBreak4 = document.createElement("br");
	var lineBreak5 = document.createElement("br");
	var lineBreak6 = document.createElement("br");
	var lineBreak7 = document.createElement("br");
	var lineBreak8 = document.createElement("br");
	var lineBreak9 = document.createElement("br");
	var lineBreak10 = document.createElement("br");
	var lineBreak11 = document.createElement("br");
	var lineBreak12 = document.createElement("br");
	
	var ID = document.createTextNode("Product ID: " + productIdentifier[productID]);
	var name = document.createTextNode("Product Name: " + productNames[productID]);
	var price = document.createTextNode("Price: $" + productPrices[productID]);
	var color = document.createTextNode("Color: " + productColors[productID]);
	var type = document.createTextNode("Product Type: " + productType[0]);
	var descr = document.createTextNode("Description: " + productDescription[productID]);
	var tags = document.createTextNode("Tags: " + productTags[productID]);
	
	imageCell.appendChild(img);
	description.appendChild(ID);
	description.appendChild(lineBreak11);
	description.appendChild(lineBreak12);
	description.appendChild(name);
	description.appendChild(lineBreak);
	description.appendChild(lineBreak2);
	description.appendChild(price);
	description.appendChild(lineBreak3);
	description.appendChild(lineBreak4);
	description.appendChild(color);
	description.appendChild(lineBreak5);
	description.appendChild(lineBreak6);
	description.appendChild(type);
	description.appendChild(lineBreak7);
	description.appendChild(lineBreak8);
	description.appendChild(descr);
	description.appendChild(lineBreak9);
	description.appendChild(lineBreak10);
	description.appendChild(tags);
}

function sendEmailConfirmation(){
	var purchaseForm = document.getElementById("purchaseForm").elements;
	var id = productIdentifier[productID];
	var quantity = purchaseForm[1].value;
	var reason = "Gamers Haven - Purchase Confirmation"
	var firstName = purchaseForm[2].value;
	var lastName = purchaseForm[3].value;
	var phoneNumber = purchaseForm[4].value;
	var email = purchaseForm[5].value;
	var street = purchaseForm[6].value;
	var city = purchaseForm[7].value;
	var state = purchaseForm[8].value;
	var zip = purchaseForm[9].value;
	var cardName = purchaseForm[10].value;
	var cardNumber = purchaseForm[11].value;
	var expMonth = purchaseForm[12].value;
	var expYear = purchaseForm[13].value;
	var cvv = purchaseForm[14].value;
	var shipping = purchaseForm[15].value;
	
	
	if(shipping == "Overnight"){
		var shippingPrice = overnightShipping;
	} else{
		var shippingPrice = regularShipping;
	}
	
	var totalPrice = ((productPrices[productID] * quantity) + shippingPrice).toFixed(2);
	
	var body = "-------- Purchase Confirmation --------%0d%0aProduct Name: " + productNames[productID] +
				"%0d%0aProduct Identifier: " + id + 
				"%0d%0aQuantity Ordered: " + quantity + 
				"%0d%0aPurchased By: " + firstName + " " + lastName +
				"%0d%0aShippping To: " + street + ", " + city + ", " + state + ", " + zip +
				"%0d%0aPhone Number: " + phoneNumber + 
				"%0d%0aShipping Method: " + shipping +
				"%0d%0aTotal Price: $" + totalPrice;
				
				
	var action = "mailto:" + email + "?subject=" +reason + "&body=" + body;

	window.open(action);
}
