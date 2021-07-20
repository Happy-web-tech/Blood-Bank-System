var username=document.getElementsByClassName('username')[0];
var password=document.getElementsByClassName('password')[0];
var confirmPassword=document.getElementsByClassName('confirmPassword')[0];
var answerPassQ=document.getElementsByClassName('answerPassQ')[0];
var wrong=document.getElementsByClassName('wrong');
var residterButton=document.getElementsByClassName('residterButton')[0];
var inputForm=document.getElementsByClassName('inputForm');//0->username
//1->password 2->confirm password 3->select 4->answer of forgot question

function validUsername(username)
{
	console.log(username);
}

function validPassword(password)
{

}

//preventing spacebar in inputs
function restrictSpace(e)
{
	if(e.key==' ')
		e.preventDefault();
	console.log("key :"+e.key);
}
//restrictiong spacebar
username.onkeydown=restrictSpace;
password.onkeydown=restrictSpace;
confirmPassword.onkeydown=restrictSpace;
answerPassQ.onkeydown=restrictSpace;

username.onfocus=()=>{
	wrong[0].style.display="none";
}

username.onblur=()=>{
	//validation and accordingly display inline
	if(validUsername(username.value.trim()))
	{

	}
	else
	{
		wrong[0].style.display="inline";
	}
	
}

//register button prevent default