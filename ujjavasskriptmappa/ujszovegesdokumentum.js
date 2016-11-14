/*var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "Formget" && password == "formget#123"){
alert ("Login successfully");
window.location = "success.html"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
*/

function passwordconfChanged()
{
var pasconfspan =document.getElementById("pasconfspan");
var pwd =document.getElementById("password");
var pwdcf = document.getElementById("passwordconf");
if(pwdcf.value.length!=0&&pwdcf.value!=pwd.value)
	{
	pasconfspan.innerHTML= "The passwords do not match";
	}
if(pwdcf.value.length==0)
{
	pasconfspan.innerHTML="Confim your password";
}
if(pwdcf.value==pwd.value){pasconfspan.innerHTML="The Passwords are matching";}
}

function emailChanged()
{
	var eml = document.getElementById("e-mail");
	var emlspan= document.getElementById("e-mailspan");
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(re.test(eml.value))
	{
		emlspan.innerHTML= "The E-mail adress is valid";
	}else {emlspan.innerHTML= "The E-mail adress is not valid";}
}

function emailconfChanged()
{
var emailconfspan =document.getElementById("pasconfspan");
var pwd =document.getElementById("password");
var pwdcf = document.getElementById("passwordconf");
if(pwdcf.value.length!=0&&pwdcf.value!=pwd.value)
	{
	pasconfspan.innerHTML= "The passwords do not match";
	}
if(pwdcf.value.length==0)
{
	pasconfspan.innerHTML="Confim your password";
}
if(pwdcf.value==pwd.value){pasconfspan.innerHTML="The Passwords are matching";}
}

function passwordChanged() {
var strength = document.getElementById("strength");
var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$", "g");
var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
var enoughRegex = new RegExp("(?=.{6,}).*", "g");
var pwd = document.getElementById("password");

	if (pwd.value.length==0) {
	strength.innerHTML = "Type Password";
	console.log("jó");
	} 
	
	else if (false == enoughRegex.test(pwd.value)) {
	strength.innerHTML = "More Characters";
	} 
	
	else if (strongRegex.test(pwd.value)) {
	strength.innerHTML = '<span style="color:green">Strong!</span>';
	} 
	
	else if (mediumRegex.test(pwd.value)) {
	strength.innerHTML = '<span style="color:orange">Medium!</span>';
	} 
	
	else {
	strength.innerHTML = '<span style="color:red">Weak!</span>';
	}
}