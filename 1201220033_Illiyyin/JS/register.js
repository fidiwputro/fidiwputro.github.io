function InputRegistration() {
    let full_name = document.getElementById("full_name").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let email = document.getElementById("email").value;
    let phone_number = document.getElementById("phone_number").value;

    if (full_name && username && password && email && phone_number){
        // alert(`full_name: ${full_name}\nusername: ${username}\npassword: ${password}\nemail: ${email}\nphone_number: ${phone_number}`)
        alert("Form Submited");
        return;
    }else{
        // alert("Please fill in the form correctly!")
        MustFillForm();
        // This line of code prevents the form from being submitted if the username or password fields are empty.
        event.preventDefault();
        return;
    }
}

function MustFillForm() {
    let full_name = document.getElementById("full_name");
    let username = document.getElementById("username");
    let password = document.getElementById("password");
    let email = document.getElementById("email");
    let phone_number = document.getElementById("phone_number");

    let fields = [full_name, username, password, email, phone_number];
    let fieldNames = ["full name", "username", "password", "email", "phone number"];

    let isFormFilled = true;

    for (let i = 0; i < fields.length; i++) {
        if (!fields[i].value) {
            alert(`Please fill in the ${fieldNames[i]} correctly!`);
            fields[i].focus();
            fields[i].style.backgroundColor = "red";
            isFormFilled = false;
        }
    }

    if (isFormFilled) {
        alert("Form Submitted");
    }
}
document.getElementById("submit").addEventListener("click", InputRegistration)