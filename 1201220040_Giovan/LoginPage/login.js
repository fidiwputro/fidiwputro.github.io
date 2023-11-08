function log() {
    let email = document.forms["login"]["email"].value;
    let password = document.forms["login"]["password"].value;
    
    if (email == "") {
        alert("Isi email terlebih dahulu!")
    }
    
    if (password == "") {
        alert("Isi password terlebih dahulu!")
    }
}