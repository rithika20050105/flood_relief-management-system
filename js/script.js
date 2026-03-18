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
//added  tharindi-AS20240467
//count character
function countCharacters(){

let text=document.getElementById("description").value;

document.getElementById("charCount").innerText=text.length+" characters";

}

//popup msg

window.onload=function(){

const params=new URLSearchParams(window.location.search);
const msg=params.get("msg");

if(msg=="registered"){               /*alert registered msg*/
showPopup("✔ Registration successful. Please login");
}
if(msg=="created"){                  /*alert created msg*/
showPopup(" Request created successfully");
}
if(msg=="deleted"){                  /*alert deleted msg*/
showPopup(" Request deleted successfully");
}
if(msg == "loginfail"){              /*alert loginfail msg*/
showPopup("Login failed. Invalid email or password");
}
if(msg == "updated"){                /*alert updated msg*/
showPopup("✔ Request updated successfully");
}
if(msg == "error"){                  /*alert error msg*/
showPopup("❌ Something went wrong");
}
if(msg){
window.history.replaceState({},document.title,window.location.pathname);
}

}


function showPopup(message){           /*popupmsg  timing */

let box=document.createElement("div");
box.className="popup";
box.innerText=message;

document.body.appendChild(box);

setTimeout(function(){
box.remove();
},3000);

}



function validateForm(){                /*alert required name msg*/
    let name=document.getElementById("name").value.trim();
     if(name===""){ 
    showMessage("Name is required","error"); 
     return false;
     }
         return true;
     }