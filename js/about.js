// ------------------- Our story Page ------------------- //
var ourTeam = ["Angel Mondragon (Actual Group Memeber)", "Boomi (Team Pet)"];
var teamBiography = 
	["I grew up playing video games and for me they were always \
	my way of escaping the world when things got rough. Video games \
	created an immersive universe where I could forget about everythig \
	else and just be myself. Thats why I joined Gamers Haven, I want to \
	be able to help provide that experience for others by introducding them to\
	video games.", 
	"I am a cat, but I love video games as well, gaming consoles in particular. \
	They are nice and warm and the prefect place for me to take a nap."];

function insertTeamTable(){
	var section = document.getElementById("teamSection");
	for(let i = 0; i < ourTeam.length; i++){
		var person = section.insertRow(i);
		var pictureCell = person.insertCell(0);
		var bioCell = person.insertCell(1);
		
		var img = document.createElement("img");
		img.src = "media/team/" + i + ".jpg";
		img.className = "zoom";
		
		pictureCell.appendChild(img);
		bioCell.innerHTML = "Name: " + ourTeam[i] + "<br><br>" + teamBiography[i];	
	}
}