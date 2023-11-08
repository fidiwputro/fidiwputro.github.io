function Login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username && password){
        // alert(`username: ${username}\npassword: ${password}`)
        alert("Form Submited");
        return;   
    }else{
        // alert("Please fill in the form correctly!")
        MustFillFormLogin();
        // This line of code prevents the form from being submitted if the username or password fields are empty.
        event.preventDefault();
        return;
    }
}

function MustFillFormLogin() {
    let username = document.getElementById("username");
    let password = document.getElementById("password");

    let field = [username, password];
    let fieldNames = ["username", "password"];

    let isFormFilled = true;

    for (let i = 0; i < field.length; i++) {
        if (!field[i].value) {
            alert(`Please fill in the ${fieldNames[i]} correctly!`);
            field[i].focus();
            field[i].style.backgroundColor = "red";
            isFormFilled = false;
        }
    }

    if (isFormFilled) {
        alert("Form Submitted");
    }
}
document.getElementById("submit").addEventListener("click", Login)