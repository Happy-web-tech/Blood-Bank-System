// when form is submitted with valid data but that user already exists in the database
//user exits error is shown and when onfocus on username that becomes hidden

var usernameEle=document.getElementById('usernameId');
var wrong1=document.getElementsByClassName('wrong1')[0];

usernameEle.onfocus=()=>{
	wrong1.style.display="none";
	wrong[0].style.display="none";//because another js file's nt woking after form submission
}
