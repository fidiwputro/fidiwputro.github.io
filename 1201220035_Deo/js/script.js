const form = document.getElementById('form')
const name = document.getElementById('name');
const email = document.getElementById('email');
const error_name = document.getElementById('error_name');
const error_email = document.getElementById('error_email')

form.addEventListener('submit', (e) => {

    if (name.value === '' || name.value == null) {
        e.preventDefault();
        error_name.innerHTML = "*Name cannot be empty";
        name.classList.add("error");
    } else {
        error_name.innerHTML = "";
    }

    if (email.value === '' || email.value == null) {
        e.preventDefault();
        error_email.innerHTML = "*Email cannot be empty";
        email.classList.add("error")
    } else {
        error_email.innerHTML = "";
    }

    if (error_name.innerHTML === "" && error_email.innerHTML === "") {
        alert("Form submitted successfully!")
        clearText();
    }
});

function clearText() {
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
}