//TheFreeElectron 2015, http://www.instructables.com/member/TheFreeElectron/
//JavaScript, uses pictures as buttons, sends and receives values to/from the Rpi
//These are all the buttons
let check1 = document.getElementById("check1");
let check2 = document.getElementById("check2");
let check3 = document.getElementById("check3");

//Create an array for easy access later
let Check = [ check1, check2, check3];

//This function is asking for gpio.php, receiving datas and updating the index.php pictures
function change_pin ( pic ) {
let data = 0;
//send the pic number to gpio.php for changes
//this is the http request
	let request = new XMLHttpRequest();
	request.open( "GET" , "gpio.php?pic=" + pic, true);
	request.send(null);
	//receiving informations
	request.onreadystatechange = function () {
		if (request.readyState == 4 && request.status == 200) {
			data = request.responseText;
			//update the index pic
			if ( !(data.localeCompare("0")) ){
				Buttons[pic].src = "data/img/red/red_"+pic+".jpg";
			}
			else if ( !(data.localeCompare("1")) ) {
				Buttons[pic].src = "data/img/green/green_"+pic+".jpg";
			}
			else if ( !(data.localeCompare("fail"))) {
				alert ("Something went wrong!" );
				return ("fail");			
			}
			else {
				alert ("Something went wrong!" );
				return ("fail"); 
			}
		}
		//test if fail
		else if (request.readyState == 4 && request.status == 500) {
			alert ("server error");
			return ("fail");
		}
		//else 
		else if (request.readyState == 4 && request.status != 200 && request.status != 500 ) { 
			alert ("Something went wrong!");
			return ("fail"); }
	}	
	
return 0;
}