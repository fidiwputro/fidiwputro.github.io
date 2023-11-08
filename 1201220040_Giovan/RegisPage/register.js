function regis() {
    let nama = document.forms["daftar"]["nama"].value;
    let email = document.forms["daftar"]["email"].value;
    let password = document.forms["daftar"]["password"].value;
    
    if (nama == "") {
        alert("Isi nama terlebih dahulu!")
    }
    if (email == "") {
        alert("Isi email terlebih dahulu!")
    }
    
    if (password == "") {
        alert("Isi password terlebih dahulu!")
    }
}