function Login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username && password){
        alert(`username: ${username}\npassword: ${password}`)
        return;   
    }else{
        alert("Please fill in the form correctly!")
        // This line of code prevents the form from being submitted if the username or password fields are empty.
        event.preventDefault();
        return;
    }
}
document.getElementById("submit").addEventListener("click", Login)