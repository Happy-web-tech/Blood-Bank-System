var usernameElement=document.getElementsByClassName('username')[0];
var passwordElement=document.getElementsByClassName('password')[0];
var confirmPasswordElement=document.getElementsByClassName('confirmPassword')[0];
var answerPassQElement=document.getElementsByClassName('answerPassQ')[0];
var wrong=document.getElementsByClassName('wrong');//0->username 1->password etc.
var registerButton=document.getElementsByClassName('registerButton')[0];

var validUsername=false;
var validPassword=false;
var validConfirmPassword=false;
var validAnswer=false;

//preventing spacebar in inputs
function restrictSpace(e)
{
	if(e.key==' ')
		e.preventDefault();
	console.log("key :"+e.key);
}
//restrictiong spacebar
usernameElement.onkeydown=restrictSpace;
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

//password
passwordElement.onfocus=()=>{
	wrong[1].style.display="none";
}

passwordElement.onblur=()=>{
	//validation and accordingly display inline
	var password=passwordElement.value.trim();
	var res=/^[A-Za-z0-9_]{6,20}$/.test(password);
	wrong[1].style.display = res ? "none" : "inline";
	validPassword=res;
}

//confirm password
confirmPasswordElement.onfocus=()=>{
	wrong[2].style.display="none";
}

confirmPasswordElement.onblur=()=>{
	//validation and accordingly display inline
	var confirmPassword=confirmPasswordElement.value.trim();
	if(confirmPassword==passwordElement.value.trim())
	{
		wrong[2].style.display="none";
		validConfirmPassword=true;
	}
	else
	{
		wrong[2].style.display="inline";
		validConfirmPassword=false;
	}
}

//answer
answerPassQElement.onfocus=()=>{
	wrong[3].style.display="none";
}

answerPassQElement.onblur=()=>{
	//validation and accordingly display inline
	var answer=answerPassQElement.value.trim();
	if(answer.length==0)
	{
		wrong[3].style.display="inline";
		validAnswer=false;	
	}
	else
	{
		wrong[3].style.display="none";
		validAnswer=true;	
	}
	
}

//register button prevent default
registerButton.onclick=e=>{
	if(validUsername && validPassword && validConfirmPassword && validAnswer)
	{
		//all fine go ahead
	}
	else
	{
		e.preventDefault();
		wrong[4].style.display="inline";
		wrong[4].style.textAlign="center";
	}
}