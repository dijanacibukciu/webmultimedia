var nameRegex = /^[A-Z][a-z]*/;
var surnameRegex = /^[A-Z][a-z]*/;
var ageRegex = /^[1-9][0-9]?$|^100$/;
var emailRegex = /^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}/;
var passwordRegex = /^[A-Z][a-z]+\d{3}$/;

var registerButton = document.getElementById("register");
var nameMsg = document.getElementById("nameMessage");
var surnameMsg = document.getElementById("surnameMessage");
var ageMsg = document.getElementById("ageMessage");
var emailMsg = document.getElementById("emailMessage");
var passwordMsg = document.getElementById("passwordMessage");


registerButton.addEventListener("click",function(event){
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var age = document.getElementById("age").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;


   if(name == "" || name == null){
       nameMsg.innerText = "Enter a name";
       event.preventDefault();
   }
   else{
       if(nameRegex.test(name)){
           nameMsg.innerText = "";
       }else{
        nameMsg.innerText = "Name needs to: \n Start with uppercase \n Contain only text";
        event.preventDefault();
       }
   }
   if(surname == "" || surname == null){
       surnameMsg.innerText = "Enter a surname"
       event.preventDefault();
       }
       else{
           if(surnameRegex.test(surname)){
               surnameMsg.innerText = "";
           }else{
               surnameMsg.innerText = "Surname needs to: \n Start with uppercase \n Contain only text"
               event.preventDefault();
           }
       }
       if(age == ""){
        ageMsg.innerText = "Enter your age"
        event.preventDefault();
        }
        else{
            if(ageRegex.test(age)){
                ageMsg.innerText = "";
            }else{
                ageMsg.innerText = "Age cannot be a negative number"
                
                event.preventDefault();
            }
        }
        if(email == ""){
            emailMsg.innerText = "Enter an email" 
            event.preventDefault();
            }
            else{
                if(emailRegex.test(email)){
                    emailMsg.innerText = "";
                }else{
                    emailMsg.innerText = "Enter a valid email"
                   
                    event.preventDefault();
                }
            }
        if(password == ""){
            passwordMsg.innerText = "Enter password"
            event.preventDefault();
        }
            else{
                if(passwordRegex.test(password)){
                    passwordMsg.innerText = "";
                }else{
                    passwordMsg.innerText = "Password must: \n Start with uppercase \n End with 3 numbers"
                    
                    event.preventDefault();
                }
            }
})