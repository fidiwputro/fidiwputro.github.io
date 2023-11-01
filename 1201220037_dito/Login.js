function inputLogin() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    // alert(`name:${name},username:${username}`);
    if (username == '' || password == '') {
        alert("Tolong lengkapi semua data");
        return;
    }
    alert(`${username},${password}`);
}
// buttonLogin.addEventListener('click', inputLogin);

function Login() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    if (username == '') {
        alert("username anda kososng");
        let nameElement = document.getElementById('username');

        nameElement.style.border = "1px solid red";
    } else if (password == '') {
        alert("password anda kososng");
        let nameElement = document.getElementById('password');

        nameElement.style.border = "1px solid red";
    } else {
        inputLogin();
        nameElement.style.border = "1px solid black";
    }
}
buttonLogin.addEventListener('click', Login);
