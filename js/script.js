//phone number validation-chithmi-AS20240501
function phoneValidate(){
let phone=document.getElementById("contact_number").value.trim();
let error=document.getElementById("phoneError");

let pattern=/^[0-9]{10}$/;

error.innerHTML="";

if(phone===""){
error.innerHTML="Phone number is required";
return false;
}

if(!pattern.test(phone)){
error.innerHTML="Invalid phone number (must contain 10 digits)";
return false;
}

return true;
}