const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');
const error_email = document.getElementById('error_email');
const error_password = document.getElementById('error_password');

form.addEventListener('submit', (e) => {
    if (email.value === '' || email.value == null) {
        e.preventDefault();
        error_email.innerHTML = "*Email cannot be empty";
        email.classList.add("error");
    } else {
        error_email.innerHTML = "";
    }

    if (password.value === '' || password.value == null) {
        e.preventDefault();
        error_password.innerHTML = "*Password cannot be empty";
        password.classList.add("error");
    } else {
        error_password.innerHTML = "";
    }

});