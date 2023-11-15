// Validasi Login
document.addEventListener("DOMContentLoaded",()=>{
    
    let forms = document.getElementById("formlogin");
    let form = document.forms[0];
    
    form.addEventListener("submit",(event)=>{
        event.preventDefault();
        
        //MENAMPILKAN FORMDATA MULAI DARI KEY DAN VALUENYA SEPERTI nama->ricky
        let dataForm = new FormData(form);
        console.log(dataForm);
        
        //MERUBAH DATA DARI DATAFORM DIATAS MENJADI ARRAY ATAU DIPECAH 1 1
        let isinya = [...dataForm.entries()];
        console.log(isinya);
        
        // MENGAMBIL VALUE DARI INPUT YANG MEMILIKI NAMA = NAME menjadi array
        let isigetALL = dataForm.getAll("nama");
        console.log(isigetALL);
        
        // MENGAMBIL VALUE DARI INPUT YANG MEMILIKI NAMA = NAME
        let isiget = dataForm.get(isinya);
        console.log(isiget);
        
        // MENAMPILKAN KEY DARI INPUTAN DARI dataForm
        let keysIterator = dataForm.keys();
        for(let key of keysIterator){
            console.log(key);
        }

        let cek = 0;
        dataForm.forEach((value,key)=>{
            if(value===""){
                console.log(key+" tidak boleh kosong");
                cek++;
                console.log(cek);
                form[key].style.backgroundColor = "pink";
            }
        })
        if(cek != 0){
            alert("USERNAME ATAU PASSWORD MASIH KOSONG");
        }

        let user = document.getElementById("username");
        let pass = document.getElementById("password");

        // if(user.value != "" && pass.value !=""){
        //     let tes2 = "./index.html";
        //     tes2;
        // }else{
        //     event.preventDefault();
        // }
    });

    let formRegis = document.forms["formRegis"];
    let btnRegis = document.getElementById("btnDaftar");
    
    btnRegis.addEventListener("click",(event)=>{
        event.preventDefault();
        
        //MENAMPILKAN FORMDATA MULAI DARI KEY DAN VALUENYA SEPERTI nama->ricky
        let dataForm = new FormData(formRegis);
        console.log(dataForm);
        
        //MERUBAH DATA DARI DATAFORM DIATAS MENJADI ARRAY ATAU DIPECAH 1 1
        let isinya = [...dataForm.entries()];
        console.log(isinya);
        
        // MENGAMBIL VALUE DARI INPUT YANG MEMILIKI NAMA = NAME menjadi array
        let isigetALL = dataForm.getAll("nama");
        console.log(isigetALL);
        
        // MENGAMBIL VALUE DARI INPUT YANG MEMILIKI NAMA = NAME
        let isiget = dataForm.get(isinya);
        console.log(isiget);
        
        // MENAMPILKAN KEY DARI INPUTAN DARI dataForm
        let keysIterator = dataForm.keys();
        for(let key of keysIterator){
            console.log(key);
        }

        let cek = 0;
        dataForm.forEach((value,key)=>{
            if(value==""){
                console.log(key+" tidak boleh kosong");
                cek++;
                console.log(cek);
                form[key].style.backgroundColor = "pink";
            }
        })
        if(cek != 0){
            alert("DATA HARUS TERISI SEMUA");
        }
       
    }); 
});
