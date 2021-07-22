var usernameElement= document.getElementsByClassName('username')[0];
var firstNameElement=document.getElementsByClassName('firstName')[0];
var lastNameElement=document.getElementsByClassName('lastName')[0];
var genderElement=document.getElementsByClassName('gender')[0];
var dobElement=document.getElementsByClassName('dob')[0];
var bloodTypeElement=document.getElementsByClassName('bloodType')[0];
var emailElement=document.getElementsByClassName('email')[0];
var mobNoElement=document.getElementsByClassName('mobNo')[0];
var wrong=document.getElementsByClassName('wrong');//0->username 1->
var registerButton=document.getElementsByClassName('registerButton')[0];
var passwordElement=document.getElementsByClassName('password')[0];
var confirmPasswordElement=document.getElementsByClassName('confirmPassword')[0];
var answerPassQElement=document.getElementsByClassName('answerPassQ')[0];
//

var validUsername=false;
var validFirstName=false;
var validLastName=false;
var validPassword=false;
var validConfirmPassword=false;
var validAnswer=false;
var validDob=false;
var validEmail=false;
var validMobNo=false;

//preventing spacebar in inputs
function restrictSpace(e)
{
	if(e.key==' ')
		e.preventDefault();
	// console.log("key :"+e.key);
}

//restricting spacebar
usernameElement.onkeydown=restrictSpace;
firstNameElement.onkeydown=restrictSpace;
lastNameElement.onkeydown=restrictSpace;
emailElement.onkeydown=restrictSpace;
mobNoElement.onkeydown=restrictSpace;
passwordElement.onkeydown=restrictSpace;
confirmPasswordElement.onkeydown=restrictSpace;
answerPassQElement.onkeydown=restrictSpace;

//username
usernameElement.onfocus=()=>{
	wrong[0].style.display="none";
	console.log("username: "+wrong[0].innerText);
}

usernameElement.onblur=()=>{
	//validation and accordingly display inline
	var username=usernameElement.value.trim();
	var res=/^[A-Za-z0-9_]{6,20}$/.test(username);
	wrong[0].style.display = res ? "none" : "inline";
	validUsername=res;//true or false
}

//first name
firstNameElement.onfocus=()=>{
	wrong[1].style.display="none";
}

firstNameElement.onblur=()=>{
	//validation and accordingly display inline
	var firstName=firstNameElement.value.trim();
	var res=/^[A-Za-z]{1,30}$/.test(firstName);//name can have a-z A-Z only
	wrong[1].style.display = res ? "none" : "inline";
	validFirstName=res;//true or false
}

//last name
lastNameElement.onfocus=()=>{
	wrong[2].style.display="none";
}

lastNameElement.onblur=()=>{
	//validation and accordingly display inline
	var lastName=lastNameElement.value.trim();
	var res=/^[A-Za-z]{1,30}$/.test(lastName);//name can have a-z A-Z only
	wrong[2].style.display = res ? "none" : "inline";
	validLastName=res;//true or false
}

//dob
dobElement.onfocus=()=>{
	wrong[3].style.display="none";	
	// console.log("focus")
}

dobElement.onblur=()=>{
	//validation and accordingly display inline

	// console.log("dob:"+dobElement.value.length);
	if(dobElement.value.length==0)
	{
		// console.log("successful "+dobElement.value);
		wrong[3].style.display="inline";	
		validDob=false;
		
	}
	else
	{
		wrong[3].style.display="none";	
		validDob=true;
	}
	
}

//email
// emailElement.onfocus=()=>{
// 	wrong[4].style.display="none";
// }

// emailElement.onblur=()=>{
// 	//validation and accordingly display inline
// 	var email=emailElement.value.trim();
// 	var res=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email);
// 	wrong[4].style.display = res ? "none" : "inline";
// 	validPassword=res;
// }

//mobile number
mobNoElement.onfocus=()=>{
	wrong[5].style.display="none";
}

mobNoElement.onblur=()=>{
	//validation and accordingly display inline
	var mobNo=mobNoElement.value.trim();
	var res=/^[0-9]{10}$/.test(mobNo);
	console.log("..mobNo: "+res);
	wrong[5].style.display = res ? "none" : "inline";
	validMobNo=res;

}

//password
passwordElement.onfocus=()=>{
	wrong[6].style.display="none";
}

passwordElement.onblur=()=>{
	//validation and accordingly display inline
	var password=passwordElement.value.trim();
	var res=/^[A-Za-z0-9_]{6,20}$/.test(password);
	wrong[6].style.display = res ? "none" : "inline";
	validPassword=res;
}

//confirm password
confirmPasswordElement.onfocus=()=>{
	wrong[7].style.display="none";
}

confirmPasswordElement.onblur=()=>{
	//validation and accordingly display inline
	var confirmPassword=confirmPasswordElement.value.trim();
	if(confirmPassword==passwordElement.value.trim())
	{
		wrong[7].style.display="none";
		validConfirmPassword=true;
	}
	else
	{
		wrong[7].style.display="inline";
		validConfirmPassword=false;
	}
}

//answer
answerPassQElement.onfocus=()=>{
	wrong[8].style.display="none";
}

answerPassQElement.onblur=()=>{
	//validation and accordingly display inline
	var answer=answerPassQElement.value.trim();
	if(answer.length==0)
	{
		wrong[8].style.display="inline";
		validAnswer=false;	
	}
	else
	{
		wrong[8].style.display="none";
		validAnswer=true;	
	}
	
}

//register button prevent default
registerButton.onclick=e=>{

	console.log("username: "+validUsername +" password: "+validPassword +" confirmPass: "+validConfirmPassword +" answer: "+validAnswer +" firstName: "+validFirstName +" lastName: "+validLastName +" dob: "+validDob +" mob: "+validMobNo+" email: "+emailElement);

	if(validUsername && validPassword && validConfirmPassword && validAnswer && validFirstName && validLastName && validDob && validMobNo)
	{
		//all fine go ahead
	}
	else
	{
		e.preventDefault();
		wrong[9].style.display="inline";
		wrong[9].style.textAlign="center";
	}
}