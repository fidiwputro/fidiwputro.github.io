let form = document.forms['form-login'];
function notifikasi() {
    let fname =document.getElementById('firstname');
    let lname =document.getElementById('lastname');
    let email =document.getElementById('email');
    let username =document.getElementById('username');
    let password =document.getElementById('password');
    let confirmpassword =document.getElementById('confirmpass');
    if (fname.value == '' || password.value == '' || lname.value == '' || email.value == '' || username.value == '' || confirmpassword.value == '') {
        alert('Data tidak boleh ada yang kosong :|');
    }else if (password.value != confirmpassword.value) {
        alert('Konfirmasi Password Tidak Sama dengan Password!');
    }else {
        alert('halo, ' + username.value);
    }
}
let login = document.getElementById('btnregister');
login.addEventListener('click', notifikasi);