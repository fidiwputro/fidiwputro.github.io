let regname = document.getElementById('nama');
let regmail = document.getElementById('email');
let regps   = document.getElementById('pswd');
let regsub  = document.getElementById('regsubmit');
function validreg () {
if (regname.value == '' || regmail.value == '' || regps.value == ''){
    alert('selesaikan apa yang kau mulai');
    }

    else {
        alert("Register berhasil dengan Username ["+ regname.value + "] dan Email [" +regmail.value + "]");
    }
}
regsub.addEventListener('click', validreg);


document.addEventListener('DOMContentLoaded', ()=>{
    let form = document.getElementById('RegistForm');

    form.addEventListener("submit", (event)=>{
        let dataForm = new FormData(form);
        let isinya = dataForm.entries();

        for (let i of isinya){
            console.log(i);
        }

        event.preventDefault();
    })
})