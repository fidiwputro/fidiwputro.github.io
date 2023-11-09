// Validasi Login
document.addEventListener("DOMContentLoaded",()=>{
    
    let forms = document.getElementById("form");
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
            alert("acumalaka");
        }
       
    });



    let formNatasha = document.getElementById("formNatasha");
    let formnyaNatasha = document.formNatasha[0];
    
    formnyaNatasha.addEventListener("tes",(event)=>{
        event.preventDefault();
        
        //MENAMPILKAN FORMDATA MULAI DARI KEY DAN VALUENYA SEPERTI nama->ricky
        let datanyaNatasha = new FormData(formnyaNatasha);
        console.log(datanyaNatasha);
        
        //MERUBAH DATA DARI datanyaNatasha DIATAS MENJADI ARRAY ATAU DIPECAH 1 1
        let isinya = [...datanyaNatasha.entries()];
        console.log(isinya);
        
        // MENGAMBIL VALUE DARI INPUT YANG MEMILIKI NAMA = NAME menjadi array
        let isigetALL = datanyaNatasha.getAll("atkNatasha");
        console.log(isigetALL);
        
        // MENGAMBIL VALUE DARI INPUT YANG MEMILIKI NAMA = NAME
        let isiget = datanyaNatasha.get(isinya);
        console.log(isiget);
        
        // MENAMPILKAN KEY DARI INPUTAN DARI datanyaNatasha
        let keysIterator = datanyaNatasha.keys();
        for(let key of keysIterator){
            console.log(key);
        }

        let tes = 0;
        datanyaNatasha.forEach((value,key)=>{
            if(value==""){
                console.log(key+" tidak boleh kosong");
                tes++;
                console.log(tes);
                form[key].style.backgroundColor = "pink";
            }
        })
        if(tes != 0){
            alert("COK");
        }
        
        function logjalan(isinya){
            console.log(isinya);
            for(let i of isinya){
            console.log(i);
            }
        }
        
    });

});
