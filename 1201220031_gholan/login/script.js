const email = document.getElementById('email');
const password = document.getElementById('password');
const form = document.getElementById('form');
const error_email = document.getElementById('error_email');
const error_password = document.getElementById('error_password');


form.addEventListener('submit', (e) => {
    if (email.value === '' || email.value == null) {
        e.preventDefault();
        error_email.innerHTML = "isi email Anda";
    } else {
        error_email.innerHTML = "";
    }
    if (password.value === '' || password.value == null) {
        e.preventDefault();
        error_password.innerHTML = "isi password Anda";
    } else {
        error_password.innerHTML = "";
    }
    if (error_email.innerHTML === "" && error_password.innerHTML === "") {
        alert("Berhasil Login");
        window.location.href = "index.html";
    }
});