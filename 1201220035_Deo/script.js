const form = document.getElementById('form')
const name = document.getElementById('name');
const email = document.getElementById('email');
const name_error = document.getElementById('name_error');
const email_error = document.getElementById('email_error')

form.addEventListener('submit', (e) => {
    var email_check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (name.value === '' || name.value == null) {
        e.preventDefault();
        name_error.innerHTML = "*Name cannot be empty";
    } else {
        name_error.innerHTML = "";
    }

    if (!email.value.match(email_check)) {
        e.preventDefault();
        email_error.innerHTML = "*Invalid Email Format";
    }
    if (email.value === '' || email.value == null) {
        e.preventDefault();
        email_error.innerHTML = "*Email cannot be empty";
    } else {
        email_error.innerHTML = "";
    }

    if (name_error.innerHTML === "" && email_error.innerHTML === "") {
        alert("Form submitted successfully!")
        clearText();
    }
});

function clearText() {
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
}