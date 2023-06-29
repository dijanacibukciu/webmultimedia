var usernameRegex = /^[A-Za-z]\w{7,14}$/;
var passwordRegex = /^[A-Z][a-z]+\d{3}$/;

var registerButton = document.getElementById("register");
var usernameMsg = document.getElementById("usernameMessage");
var passwordMsg = document.getElementById("passwordMessage");

registerButton.addEventListener("click",function(event){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;


        if(username == "" || username == null){
            usernameMsg.innerText= "Please enter your username!"
            usernameMsg.style.color= 'red'
            event.preventDefault();  
        }
        // else {
        //     if(usernameRegex.test(username)){
        //     usernameMsg.innerText = "";
        //     }
        // }
        // else{
        //     if(usernameRegex.test(username)){
        //     }else{
        //         usernameMsg.innerText = "Username must be 8 to 15 characters"
        //         usernameMsg.style.color= 'red'
        //         event.preventDefault();
        //     }
        // }
        if(password == "" || password == null){
            passwordMsg.innerText = "Please enter your password!"
            passwordMsg.style.color= 'red'
            event.preventDefault();
        }
        // else {
        //     if(passwordRegex.test(password)){
        //         passwordMsg.innerText = "";
            
        //     }
        // }
    
        // else{
        //     if(passwordRegex.test(password)){
        //     }else{
        //         passwordMsg.innerText = "Password must start with an uppercase and end with 3 numbers!"
        //         passwordMsg.style.color= 'red'
        //         event.preventDefault();
        //     }
        // }

        else{
            usernameMsg.innerText = "";
            passwordMsg.innerText = "";
        }
        //     // usernameMsg.innerText= "Username"
        //     // usernameMsg.style.color= 'grey'
        //     // passwordMsg.innerText = "Password"
        //     // passwordMsg.style.color= 'grey'
        //     // alert('You have been logged in!')
            
        // }
})