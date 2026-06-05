function validateForm(){

let email =
document.getElementById("email").value;

let password =
document.getElementById("password").value;

if(email==""){
alert("Email is required");
return false;
}

if(password==""){
alert("Password is required");
return false;
}

alert("Login Successful");

return true;
}