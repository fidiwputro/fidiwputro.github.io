let form = document.forms['form-login'];
function notifikasi() {
    let fname =document.getElementById('firstname');
    let lname =document.getElementById('lastname');
    let email =document.getElementById('email');
    let username =document.getElementById('username');
    let password =document.getElementById('password');
    let confirmpassword =document.getElementById('confirmpass');
    if (fname.value.trim() == '') {
        alert('Data tidak boleh ada yang kosong :|');
        fname.style.backgroundColor = 'pink';
    }else if (password.value.trim() == '') {
        alert('Data tidak boleh ada yang kosong :|');
        password.style.backgroundColor = 'pink';
    }else if (lname.value.trim() == '') {
        alert('Data tidak boleh ada yang kosong :|');
        lname.style.backgroundColor = 'pink';
    }else if (email.value.trim() == '') {
        alert('Data tidak boleh ada yang kosong :|');
        email.style.backgroundColor = 'pink';
    }else if (username.value.trim() == '') {
        alert('Data tidak boleh ada yang kosong :|');
        username.style.backgroundColor = 'pink';
    }else if (confirmpassword.value.trim() == '') {
        alert('Data tidak boleh ada yang kosong :|');
        confirmpassword.style.backgroundColor = 'pink';
    }else if (password.value != confirmpassword.value) {
        confirmpassword.style.backgroundColor = 'pink';
        alert('Konfirmasi Password Tidak Sama dengan Password!');
    }else {
        alert('halo, ' + username.value);
    }
}
let login = document.getElementById('btnregister');
login.addEventListener('click', notifikasi);