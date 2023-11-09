let form = document.forms['form-login'];
function notifikasi() {
    let fname =document.getElementById('firstname');
    let lname =document.getElementById('lastname');
    let email =document.getElementById('email');
    let username =document.getElementById('username');
    let password =document.getElementById('password');
    let confirmpassword =document.getElementById('confirmpass');
    if (fname.value.trim() == '' || password.value.trim() == '' || lname.value.trim() == '' || email.value.trim() == '' || username.value.trim() == '' || confirmpassword.value.trim() == '') {
        alert('Data tidak boleh ada yang kosong :|');
    }else if (password.value != confirmpassword.value) {
        alert('Konfirmasi Password Tidak Sama dengan Password!');
    }else {
        alert('halo, ' + username.value);
    }
}
let login = document.getElementById('btnregister');
login.addEventListener('click', notifikasi);