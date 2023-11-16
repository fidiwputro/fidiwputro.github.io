function notifikasi() {
    let uname = document.getElementById('username');
    let pass = document.getElementById('password');
    if (uname.value.trim() == '') {
        alert('Username tidak boleh kosong :|');
        uname.style.backgroundColor = 'pink';
    }else if (pass.value.trim() == ''){
        alert('Password tidak boleh kosong :|');
        pass.style.backgroundColor = 'pink';
    }else {
        alert('halo, ' + uname.value);
    }
}
let login = document.getElementById('btnlogin');
login.addEventListener('click', notifikasi);