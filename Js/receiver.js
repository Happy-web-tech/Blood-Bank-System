var availableSamplesinReceiver=document.getElementsByClassName('availableSamplesinReceiver')[0];
var RequestBlood=document.getElementsByClassName('RequestBlood')[0];

availableSamplesinReceiver.onclick=()=>{
	window.location.href="availableSamples.php";
}

RequestBlood.onclick=()=>{
	window.location.href="availableSamples.php";
}

//
availableSamplesinReceiver.onmouseover=()=>{
	availableSamplesinReceiver.style.backgroundColor="yellow";
	availableSamplesinReceiver.style.width="22rem";
	availableSamplesinReceiver.style.height="16rem";
}
availableSamplesinReceiver.onmouseout=()=>{
	availableSamplesinReceiver.style.backgroundColor="#EE5A24";
	availableSamplesinReceiver.style.width="20rem";
	availableSamplesinReceiver.style.height="14rem";
}
RequestBlood.onmouseover=()=>{
	RequestBlood.style.backgroundColor="yellow";
	RequestBlood.style.width="22rem";
	RequestBlood.style.height="16rem";
}
RequestBlood.onmouseout=()=>{
	RequestBlood.style.backgroundColor="#EE5A24";
	RequestBlood.style.width="20rem";
	RequestBlood.style.height="14rem";
}
