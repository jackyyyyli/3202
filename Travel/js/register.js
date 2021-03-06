function checkValidRegister() {
	if(document.forms["registerinfo"]["fname"].value == "") {
		document.getElementById("errfname").innerHTML = "Please enter your first name!";
		document.forms["registerinfo"]["fname"].focus();
		return false;
	} else {
		if(document.forms["registerinfo"]["fname"].value.length > 20) {
			document.getElementById("errfname").innerHTML = "Your first name might be a bit long!";
			document.forms["registerinfo"]["fname"].focus();
			return false;
		} else {
			document.getElementById("errfname").innerHTML = "";
		}
	}
	if(document.forms["registerinfo"]["lname"].value == "") {
		document.getElementById("errlname").innerHTML = "Please enter your last name!";
		document.forms["registerinfo"]["lname"].focus();
		return false;
	} else {
		if(document.forms["registerinfo"]["lname"].value.length > 20) {
			document.getElementById("errlname").innerHTML = "Your last name might be a bit long!";
			document.forms["registerinfo"]["lname"].focus();
			return false;
		} else {
			document.getElementById("errlname").innerHTML = "";
		}
	}
	if(document.forms["registerinfo"]["username"].value == "") {
		document.getElementById("errusername").innerHTML = "Please enter your username!";
		document.forms["registerinfo"]["username"].focus();
		return false;
	} else {
		if(document.forms["registerinfo"]["username"].value.length < 3 ||document.forms["registerinfo"]["username"].value.length > 20) {
			document.getElementById("errusername").innerHTML = "Your username should be between 3 and 20 characters!";
			document.forms["registerinfo"]["username"].focus();
			return false;
		} else {
			document.getElementById("errusername").innerHTML = "";
		}
	}
	if(!checkPassword(document.forms["registerinfo"]["password"].value, document.forms["registerinfo"]["confirmpassword"].value)) {	
		return false;
	}

	if(!checkEmail(document.forms["registerinfo"]["email"].value)) {
		document.getElementById("erremail").innerHTML =  "email is invalid!";
		return false;
	}
	return true;
}

function checkPassword(password1, password2) {
	if(password1 == '') {
		document.getElementById("errpassword").innerHTML = "password cannot be empty!";
		document.forms["registerinfo"]["password"].focus();
		return false;
	} else {
		document.getElementById("errpassword").innerHTML =  "";
	}
	if(password1.length < 5 || password1.length > 18) {
		document.getElementById("errpassword").innerHTML = "the length of password can only between 5 and 18!";
		document.forms["registerinfo"]["password"].focus();
		return false;
	} else {
		document.getElementById("errpassword").innerHTML =  "";
	}
	if(password2 == '') {
		document.getElementById("errconfirmpassword").innerHTML = "comfirmpassword cannot be empty!";
		document.forms["registerinfo"]["confirmpassword"].focus();
		return false;
	} else {
		document.getElementById("errconfirmpassword").innerHTML =  "";
	}

	if(password1 != password2) {
		document.getElementById("errconfirmpassword").innerHTML = "password and the comfirm password are not the same!";
		document.forms["registerinfo"]["confirmpassword"].focus();
		return false;
	} else {
		document.getElementById("errconfirmpassword").innerHTML =  "";
	}
	return true;
}

function checkEmail(email) {
	var regular = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(regular.test(email)) {
		document.getElementById("erremail").innerHTML =  "";
		return true;
	}
	
	return false;
}

function checkExistName(string) {
	if(string.length > 3 && string.length < 20) {
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	var xml = this.responseXML;
            	var response = xml.getElementsByTagName("response");
                document.getElementById("errusername").innerHTML = response[0].getAttribute("text");
            }
        };
        xmlhttp.open("GET", "existuser.php?query=" + string, true);
        xmlhttp.send();
	}
}

function checkValidEdition() {
	if(document.forms["profile"]["fname"].value !="" && document.forms["profile"]["fname"].value.length > 20) {
		document.getElementById("errfnamemsg").innerHTML = "First Name cannot be over 20 characters";
        document.forms["profile"]["fname"].focus();
        return false;
	}
	if(document.forms["profile"]["lname"].value !="" && document.forms["profile"]["lname"].value.length > 20) {
		document.getElementById("errlnamemsg").innerHTML = "Last Name cannot be over 20 characters";
        document.forms["profile"]["lname"].focus();
        return false;
	}

    if(document.forms["profile"]["email"].value != "" && !checkEmail(document.forms["profile"]["email"].value)) {
    	document.getElementById("erremailmsg").innerHTML = "email is invalid";
    	document.forms["profile"]["email"].focus();
        return false;
    }

    if(document.forms["profile"]["password"].value != "" && document.forms["profile"]["ckpassword"].value != "") {
    	if(document.forms["profile"]["password"].value != document.forms["profile"]["ckpassword"].value) {
    		document.getElementById("errckpwmsg").innerHTML = "the passwords are not match";
    		document.forms["profile"]["ckpassword"].focus();
    		return false;
    	}
    }
    return true;
}