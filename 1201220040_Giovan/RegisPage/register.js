// Ini Validasi
let nama = document.getElementById('nama');
let email = document.getElementById('email');
let password = document.getElementById('password');
let tombol = document.getElementById('btn-daftar');

function regis () {
    if (nama.value == '' && email.value == '' && password.value == '') {
        alert('Silahkan isi terlebih dahulu yang kosong!')
    }

    else if (nama.value == '') {
        alert('Nama masih kosong!')
    }

    else if (email.value == '') {
        alert('Email masih kosong!')
    }

    else if (password.value == '') {
        alert('Password masih kosong!')
    }

    else {
        alert('Registrasi Telah Berhasil!')
    }
}

// Memunculkan input ke console
document.addEventListener("DOMContentLoaded", ()=> {
    let formRegis = document.getElementById('daftar');

    formRegis.addEventListener("submit", (event)=> {
        let dataform = new FormData(formRegis);
        let data = dataform.entries();

        for (let y of data){
            console.log(y);
        }
        // Untuk menahan pada page itu
        event.preventDefault();
    })
})