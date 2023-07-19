//Login Script

//Confirm script is accessed by index page.
console.log("Login Script Recognised")

//Create JS array to house credentials, as per brief item 4 (Use an object or array in Javascript).
var credentials = [];

//Login function - declare variables to contain user credentials (username and password).
function loginCheck(){
	var uname = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
	
	//Check hardcoded user credentials (included in brief).
	if (uname == "user" && pass == "pass"){
		//If credentials match, hide login button and display "Login Successful" message.
		console.log("Swapping visibility");
		document.getElementById("loginPopupButton").remove();
		document.getElementById("loginSuccess").style.visibility = "visible";
		//Insert credentials into JS array and display array in the console.
		console.log("Saving credentials");
		credentials[0] = uname;
		credentials[1] = pass;
		console.log(credentials);
	} else {
		//If credentials do not match hardcoded values, alert the user to incorrect credentials, prompt to try again and reset the form.
		alert("Invalid credentials, please try again.");
		document.getElementById("loginForm").reset();
	}
}