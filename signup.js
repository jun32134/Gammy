function togglepassword(){
    var password = document.getElementById("password");
    var repassword = document.getElementById("repassword");
    if(password.type === "password"){
        password.type = "text";
        repassword.type = "text";
    }
    else{
        password.type = "password";
        repassword.type = "password";
    }
}