var hospitalLogin=document.getElementsByClassName('hospitalLogin')[0];
var receiverLogin=document.getElementsByClassName('receiverLogin')[0];

hospitalLogin.onclick=()=>{
	window.location.href="loginHospital.php";
}

receiverLogin.onclick=()=>{
	window.location.href="loginReceiver.php";
}

hospitalLogin.onmouseover=()=>{
	hospitalLogin.style.backgroundColor="#3B3B98";
	hospitalLogin.style.color="white";
	hospitalLogin.style.width="25rem";
	hospitalLogin.style.height="7rem";
	hospitalLogin.style.fontSize="4rem";
}
hospitalLogin.onmouseout=()=>{
	hospitalLogin.style.backgroundColor="#EE5A24";
	hospitalLogin.style.width="20rem";
	hospitalLogin.style.height="5rem";
	hospitalLogin.style.color="black";
	hospitalLogin.style.fontSize="2rem";
}

receiverLogin.onmouseover=()=>{
	receiverLogin.style.backgroundColor="#3B3B98";
	receiverLogin.style.color="white";
	receiverLogin.style.width="25rem";
	receiverLogin.style.height="7rem";
	receiverLogin.style.fontSize="4rem";
}
receiverLogin.onmouseout=()=>{
	receiverLogin.style.backgroundColor="#EE5A24";
	receiverLogin.style.width="20rem";
	receiverLogin.style.height="5rem";
	receiverLogin.style.color="black";
	receiverLogin.style.fontSize="2rem";
}