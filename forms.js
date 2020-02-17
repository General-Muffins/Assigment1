//this is for checking the feild for the form
function validateForm() {
	var x = document.forms["myForm"]["name"].value;
	var y = document.forms["myForm"]["email"].value;
	var z = document.forms["myForm"]["subject"].value;
	var a = document.forms["myForm"]["message"].value;
	
	if (x == ""|| y == ""|| z == ""|| a == "") {
		alert("Form Must Be Completed To Continue!!");
		return false;
	}

}
