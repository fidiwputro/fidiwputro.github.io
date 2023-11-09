// Ini Validasi
let email = document.getElementById('email');
let password = document.getElementById('password');
let tombol = document.getElementById('btn-masuk');

function log () {
    if (email.value == '' && password.value == '') {
        alert('Silahkan isi terlebih dahulu yang kosong!')
    }

    else if (email.value == '') {
        alert('Email masih kosong!')
    }

    else if (password.value == '') {
        alert('Password masih kosong!')
    }

    else {
        alert('Login Berhasil!')
    }
}

// Untuk memunculkan di console
document.addEventListener("DOMContentLoaded", ()=> {
    let formLog = document.getElementById('login');

    formLog.addEventListener("submit", (event)=> {
        let dataform = new FormData(formLog);
        let data = dataform.entries();

        for (let y of data){
            console.log(y);
        }
        // Untuk menahan berada di page tersebut
        event.preventDefault();
    })
})