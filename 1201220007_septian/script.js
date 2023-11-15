
// document.addEventListener("DOMContentLoaded", ()=>{
//     let form = document.forms[0];
//     const btn = document.querySelector('#login');

    
//     form.addEventListener("submit", (event)=>{
//         let dataform = new FormData(form);
//         dataform.append("asu","nyarendy");
//         // let isiForm = [...dataform.entries()];
//         // let isiForm = dataform.entries();        MENDEKLARASIKAN OBJEK DATAFORM PADA VARIABEL ISIFORM (DALAM BENTUK ARRAY) 
//         // for (let i of isiForm){                  MEMBUAT PERULANGAN I UNTUK MEMBACA SEMUA VALUE ISIFORM
//             //     console.log(i);
//             // }
        
//         // console.log(isiForm);
//         // dataform.set("asu","nyaandry");          SET BERFUNGSI UNTUK MENAMBAHKAN KEY DAN VALUE BARU ATAU MERUBAH VALUE DARI KEY YANG SUDAH ADA 
//         let isiForm2 = [...dataform.entries()];
//         console.log(isiForm2);

        
//         console.log([...dataform.values()]);
//         event.preventDefault();
//     })

// })

const dataRegis = {
    nama : "",
    nomor : "",
    akun : "",
    password : ""
}

const dataLogin = {
    akun : dataRegis.akun,
    password : dataRegis.password
}

document.addEventListener("DOMContentLoaded", ()=>{
    const formLogin = document.querySelector('#formLogin');
    console.log(Object.values(dataLogin));

// VALIDASI FORM LOGIN
    formLogin.addEventListener("submit", (event) => {
        var aksi = false;
        event.preventDefault();
        
        const dataForm = new FormData(formLogin);
        dataForm.forEach((value,key) => {
            if(value == ""){
                formLogin[key].style.backgroundColor = "orange";
                aksi = true;
            }else{
                formLogin[key].style.backgroundColor = "white";
        
            }
            })
            
            if (aksi == true){
                alert("pastikan data telah terisi");
            }else{
                if(dataForm.get('account') == "nanda@gmail.com" && dataForm.get('password') == "nandaganteng"){
                alert('Login Berhasil');
                window.location.href = "dashboard.html";
                }else{
                    alert("maaf akun tidak tersedia");
                }
            }
        })
    })
// VALIDASI FORM REGISTRASI
document.addEventListener("DOMContentLoaded", ()=>{
const formRegister = document.querySelector('#formRegister');
console.log(Object.values(dataRegis));
        formRegister.addEventListener("submit", (event) => {
            var aksi = 0;
            event.preventDefault();
            const dataForm = new FormData(formRegister);
            dataForm.forEach((value,key) => {
                if(value == ""){
                    formRegister[key].style.backgroundColor = "orange";
                    aksi = 1;
                    console.log(formRegister[key])
                }else{
                    formRegister[key].style.backgroundColor = "white";
                }
                })

                

                const password = dataForm.get('password');
                if(password.length < 8 && password.length > 0 ){
                    aksi = 2 ;
                }
                
                if (aksi == 1){
                    alert("pastikan data telah terisi");
                }else if(aksi == 2){
                    alert('Password minimal 8 karakter');
                    formRegister['password'].style.backgroundColor = "orange";
                }else{
                    alert('Registrasi Berhasil');
                    // dataRegis.nama = dataForm.get('nama');
                    // dataRegis.nomor = dataForm.get('telepon');
                    // dataRegis.akun = dataForm.get('account');
                    // dataRegis.password = dataForm.get('password');
                    console.log(Object.values(dataRegis));
                    // window.location.href = "index.html";
                }
            })
            dataRegis.nama = dataForm.get('nama');
                    dataRegis.nomor = dataForm.get('telepon');
                    dataRegis.akun = dataForm.get('account');
                    dataRegis.password = dataForm.get('password');
    })
