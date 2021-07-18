var requestButton=document.getElementsByClassName('requestButton');

for(var i=0;i<requestButton.length;i++)
{
	requestButton[i].onclick=()=>{
	window.location.href="loginReceiver.php";
}	
}
