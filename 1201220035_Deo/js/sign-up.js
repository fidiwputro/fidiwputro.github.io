const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirm_pass = document.getElementById('confirm_pass');
const error_username = document.getElementById('error_username');
const error_email = document.getElementById('error_email');
const error_password = document.getElementById('error_password');
const error_confirm_pass = document.getElementById('error_confirm_pass');

form.addEventListener('submit', (e) => {
    var email_check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (username.value === '' || username.value === null) {
        e.preventDefault();
        error_username.innerHTML = "*Username cannot be empty";
        username.classList.add("error");
    } else {
        error_username.innerHTML = "";
    }

    if (email.value === '' || email.value === null) {
        e.preventDefault();
        error_email.innerHTML = "*Email cannot be empty";
        email.classList.add("error");
    } else if (!email.value.match(email_check)) {
        e.preventDefault();
        error_email.innerHTML = "*Invalid Email Format";
        email.classList.add("error");
    } else {
        error_email.innerHTML = "";
    }

    if (password.value === '' || password.value === null) {
        e.preventDefault();
        error_password.innerHTML = "*Password cannot be empty";
        password.classList.add("error");
    } else if (password.value.length < 8) {
        e.preventDefault();
        error_password.innerHTML = "*Password should be at least 8 characters";
        password.classList.add("error");
    } else {
        error_password.innerHTML = "";
    }

    if (confirm_pass.value === '' || confirm_pass.value === null) {
        e.preventDefault();
        error_confirm_pass.innerHTML = "*Please confirm your password";
        confirm_pass.classList.add("error");
    } else if (confirm_pass.value !== password.value) {
        e.preventDefault();
        error_confirm_pass.innerHTML = "*Passwords do not match";
        confirm_pass.classList.add("error");
    } else {
        error_confirm_pass.innerHTML = "";
    }

    if (
        error_username.innerHTML === "" &&
        error_email.innerHTML === "" &&
        error_password.innerHTML === "" &&
        error_confirm_pass.innerHTML === ""
    ) {
        alert("Congratulations! Your registration has been successful.");
    }
});
