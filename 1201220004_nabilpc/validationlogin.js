let form = document.forms['form-login'];
function notifikasi() {
    let uname = document.getElementById('username');
    let pass = document.getElementById('password');
    if (uname.value == '' || pass.value == '') {
        alert('Username dan Password tidak boleh kosong :|');
    } else {
        alert('halo, ' + uname.value);
    }
}
let login = document.getElementById('btnlogin');
login.addEventListener('click', notifikasi);