var home=document.getElementsByClassName('home')[0];
var login=document.getElementsByClassName('login')[0];
var register=document.getElementsByClassName('register')[0];
var availableSamples=document.getElementsByClassName('availableSamples')[0];
var contactUs=document.getElementsByClassName('contactUs')[0];
var logout=document.getElementById('logout');

home.addEventListener('click', ()=>{
	window.location.href="homePage.php";
});

login.addEventListener('click', ()=>{
	window.location.href="login.php";
});

register.addEventListener('click',sendToRegister);

function sendToRegister()
{
	window.location.href="register.php";
}

availableSamples.addEventListener('click',()=>{
	window.location.href="availableSamples.php";
});

contactUs.addEventListener('click',()=>{
	window.location.href="contactUs.php";
});

home.onmouseover=()=>{
	home.style.backgroundColor="#EE5A24";
	home.style.cursor="pointer";
}
home.onmouseout=()=>{
	home.style.backgroundColor="#f6b93b";
}
//
login.onmouseover=()=>{
	login.style.backgroundColor="#EE5A24";
	login.style.cursor="pointer";
}
login.onmouseout=()=>{
	login.style.backgroundColor="#f6b93b";
}
//
register.onmouseover=()=>{
	register.style.backgroundColor="#EE5A24";
	register.style.cursor="pointer";
}
register.onmouseout=()=>{
	register.style.backgroundColor="#f6b93b";
}
//
availableSamples.onmouseover=()=>{
	availableSamples.style.backgroundColor="#EE5A24";
	availableSamples.style.cursor="pointer";
}
availableSamples.onmouseout=()=>{
	availableSamples.style.backgroundColor="#f6b93b";
}
//
contactUs.onmouseover=()=>{
	contactUs.style.backgroundColor="#EE5A24";
	contactUs.style.cursor="pointer";
}
contactUs.onmouseout=()=>{
	contactUs.style.backgroundColor="#f6b93b";
}
//
logout.onmouseover=()=>{
	logout.style.backgroundColor="#EE5A24";
	logout.style.cursor="pointer";
}
logout.onmouseout=()=>{
	logout.style.backgroundColor="#f6b93b";
}
