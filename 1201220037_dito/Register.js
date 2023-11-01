function inputRegister() {
    let name = document.getElementById('name').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let confirm = document.getElementById('confirm').value;
    let Gmail = document.getElementById('Gmail').value;
    let phone = document.getElementById('phone').value;
    // alert(`name:${name},username:${username}`);
    if (name == '' || username == '' || password == '' || confirm == '' || Gmail == '' || phone == '') {
        alert("Tolong lengkapi semua data");
        return;
    }
    alert(`${name},${username},${password},${confirm},${Gmail},${phone}`);
}
// buttonRegis.addEventListener('click', inputRegister);

function Register() {
    let name = document.getElementById('name').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let confirm = document.getElementById('confirm').value;
    let Gmail = document.getElementById('Gmail').value;
    let phone = document.getElementById('phone').value;

    if (name == '') {
        alert("nama anda kososng");
        let nameElement = document.getElementById('name');

        nameElement.style.border = "1px solid red";
        // nameElement.style.backgroundColor = "red";
    } else if (username == '') {
        alert("username anda kososng");
        let nameElement = document.getElementById('username');

        nameElement.style.border = "1px solid red";
    } else if (phone == '') {
        alert("phone password anda kososng");
        let nameElement = document.getElementById('phone');

        nameElement.style.border = "1px solid red";
    } else if (password == '') {
        alert("password anda kososng");
        let nameElement = document.getElementById('password');

        nameElement.style.border = "1px solid red";
    } else if (confirm == '') {
        alert("confirm password anda kososng");
        let nameElement = document.getElementById('confirm');

        nameElement.style.border = "1px solid red";
    } else if (Gmail == '') {
        alert("Gmail password anda kososng");
        let nameElement = document.getElementById('Gmail');

        nameElement.style.border = "1px solid red";
    } else {
        inputRegister();
        nameElement.style.border = "1px solid black";
    }
}
buttonRegis.addEventListener('click', Register);