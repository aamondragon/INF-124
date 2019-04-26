var items = 10;
var imageLocation = "media/products/";
var productIdentifier = ["GCPGC", "GCIGC", "PSWGC", "PSCGC", "PSGGC", "XBRGC", "XBWGC", "NSBGGC", "NSYBGC", "NSBYGC"]
var productNames = ["GameCube", "GameCube", "PS4", "PS4", "PS4", "Xbox One", "Xbox One", "Nintendo Switch", "Nintendo Switch", "Nintendo Switch"];
var productColors = ["Platinum", "Indigo", "White", "Camouflage", "Gold", "Red", "White", "Black/Gray", "Yellow/Brown", "Brown/Yellow"];
var productType = ["Gaming Console"];
var productPrices = [59.99, 74.99, 399.99, 449.99, 499.99, 289.99, 209.99, 499.99, 409.99, 409.99];
var productDescription = ["Get the all-new sleek and stylish Nintendo GameCube Limited Edition Platinum. Nintendo's next-generation console is back and better \
							than ever. This collector's edition console is home to a massive variety of games and a super-powerful 485MHz processor to bring you \
							the ultimate speed, graphics and animation in the gaming world. This console has everything that the original has; only now it's cooler,\
							trendier and classier.",
							 "The GameCube is unlike any video game system you've ever seen before! It's power and gaming capabilities will shock you! 40MB of onboard\
							 memory means bigger game worlds, bigger enemies, and bigger battles can be stored Store your games on memory cards and load them instantly\
							 Analog AV output Includes analog controller",
							 "From the makers of the acclaimed hit game Destiny, comes the much-anticipated sequel. An action shooter that takes you on an epic journey\
							 across the solar system. Humanity's last safe city has fallen to an overwhelming invasion force, led by Ghaul, the imposing commander of the\
							 brutal Red Legion. He has stripped the city's Guardians of their power, and forced the survivors to flee. You will venture to mysterious,\
							 unexplored worlds of our solar system to discover an arsenal of weapons and devastating new combat abilities. To defeat the Red Legion and\
							 confront Ghaul, you must reunite humanity's scattered heroes, stand together, and fight back to reclaim our home.",
							 "Call of Duty: WWII on PlayStation 4 tells an all-new story of common men doing extraordinary things. Drop into the most action-packed battles\
							 as you land in Normandy and fight your way across Europe through to Aukam. Feel the gritty authenticity and surreal terror of trench warfare\
							 on the most popular console of the year.1 Featuring a limited edition Green Camouflage 1TB PlayStation4 and matching DUALSHOCK4 wireless\
							 controller, the Best Place to Play Call of Duty is on PlayStation 4. Call of Duty on PlayStation 4 - Play Map Packs 30 Days Early, Only on\
							 PlayStation 2. The title has been rated mature 17 plus blood and gore, intense violence and strong language.",
							 "The limited edition gold PlayStation 4 system. Complete with a 1TB hard drive and a gold Dualshock 4 wireless controller. Play incredible\
							 games, team up or compete with friends with PlayStation Plus, watch live TV and movies, listen to your favorite music and more. The\
							 possibilities are endless. Greatness Awaits.",
							 "The Xbox One S 2TB Console - Gears of War 4 Limited Edition Bundle features a custom console and controller, and a full game download of\
							 Gears of War 4: Ultimate Edition for Xbox One and Windows 10, with early access, exclusive in-game items, a Season Pass, and much more.",
							 "Xbox One S has over 1,300 games: blockbusters, popular franchises, and Xbox One exclusives. Play with friends, use apps, and enjoy \
							 built-in 4K Ultra HD Blu-ray and 4K video streaming. NOTE: Does not include Xbox stand",
							 "A hardware bundle for Super Smash Bros. Ultimate is here! The bundle contains a specially designed dock featuring fighters from the original \
							 Super Smash Bros.  game, a download code for Super Smash Bros. Ultimate, and Super Smash Bros. themed Joy-Con controllers. Introducing Nintendo \
							 Switch, the new home video game system from Nintendo. In addition to providing single and multiplayer thrills at home, the Nintendo Switch system \
							 can be taken on the go so players can enjoy a full home console experience anytime, anywhere. The mobility of a handheld is now added to the power \
							 of a home gaming system, with unprecedented new play styles brought to life by the two new Joy-Con controllers. PLAY ANYWHERE",
							 "Take your Pokemon journey to the Kanto region with this special hardware bundle! It packs in the Nintendo Switch system, a Pikachu and Eevee themed\
							 dock and matching Joy-Con controllers, the Poke Ball Plus accessory, and a download code the Pokemon: Let's Go, Pikachu! game. With your energetic\
							 partner, Pikachu, become a top Pokemon Trainer by battling other trainers! Use a gentle throwing motion to catch Pokemon in the wild with either one \
							 Joy-Con controller or Poke Ball Plus, which will light up, vibrate, and make sounds to bring your adventure to life.",
							 "Take your Pokemon journey to the Kanto region with this special hardware bundle! It packs in the Nintendo Switch system, a Pikachu and Eevee themed\
							 dock and matching Joy-Con controllers, the Poke Ball Plus accessory, and a download code the Pokemon: Let's Go, Eevee! game. With your steadfast\
							 partner, Eevee, become a top Pokemon Trainer by battling other trainers! Use a gentle throwing motion to catch Pokemon in the wild with either one\
							 Joy-Con controller or Poke Ball Plus, which will light up, vibrate, and make sounds to bring your adventure to life."];
				 
var productTags = ["grey, gray, platinum, gamecube, console, classic, nintendo", "blue, gamecube, console, classic, nintendo",
				   "white, ps4, playstation, sony, destiny, console", "camo, green, ps4, slim, playstation, sony, cod, console",
				   "gold, ps4, playstation, sony, slim, console", "red, xbox, one, microsoft, console",
				   "white, xbox, one, microsoft, console", "black, nintendo switch, nintendo, super, smash, bros",
				   "yellow, nintendo switch, nintendo, pokemon, pikachu", "yellow, nintendo switch, nintendo, pokemon, eevee"];

function insertProducts(){
	var section = document.getElementById("itemTable");
	var currRow = -1;
	for(let i = 0; i < items; i++){
		if(i % 3 === 0){
			currRow++;
			var r = section.insertRow(currRow);
		}
		var currCell = i % 3;
		var productCell = r.insertCell(currCell);
		var img = document.createElement("img");
		img.src = "media/products/" + i + "/0.jpg";
		img.onclick = displayProduct;
		img.className = "zoom";
		img.setAttribute("id", i);
		
		var newLine = document.createElement("br");
		var newLine2 = document.createElement("br");
		var newLine3 = document.createElement("br");
	
		var price = document.createTextNode("Price: $" + productPrices[i]);
		var color = document.createTextNode("Color: " + productColors[i]);
		var type = document.createTextNode("Type: " + productType[0]);
		
		productCell.appendChild(img);
		productCell.appendChild(newLine);
		productCell.appendChild(price);
		productCell.appendChild(newLine2);
		productCell.appendChild(color);
		productCell.appendChild(newLine3);
		productCell.appendChild(type);
	}
}

function displayProduct(e){
	window.location.href = 'product.html?product='+e.target.id;
}
 