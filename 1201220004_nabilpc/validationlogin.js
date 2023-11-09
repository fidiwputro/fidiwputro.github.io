function notifikasi() {
    let uname = document.getElementById('username');
    let pass = document.getElementById('password');
    if (uname.value.trim() == '' || pass.value.trim() == '') {
        alert('Username dan Password tidak boleh kosong :|');
    } else {
        alert('halo, ' + uname.value);
    }
}
let login = document.getElementById('btnlogin');
login.addEventListener('click', notifikasi);