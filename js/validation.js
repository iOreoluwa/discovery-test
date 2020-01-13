// Function to check if form is empty

function validateForm() {
	var x = document.forms["iForm"]["minister"].value;
	var y = document.forms["iForm"]["message"].value;
	var z = document.forms["iForm"]["media"].value;
	var a = document.forms["iForm"]["type"].value;

	if(x == "" ) {
		alert("Write Out the Minsiter's Name");

		return false;
	} else if(y == "") {
		alert("Write the Message Title");

		return false;
	} else if(a == "") {
		alert("Fill out media type");

		return false;
	}
	else if(z == "") {
		alert("Choose Media File");

		return false;
	} else {
		alert("All input was filled out");

		return true;
	}
}

