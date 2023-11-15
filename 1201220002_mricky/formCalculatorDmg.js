document.addEventListener("DOMContentLoaded",()=>{

    let form = document.forms[0];
    let btn = document.getElementById("btnHitungDmgNatasha");
    
    btn.addEventListener("click",(event)=>{
        
        //MENAMPILKAN FORMDATA MULAI DARI KEY DAN VALUENYA SEPERTI nama->ricky
        let datanyaNatasha = new FormData(form);
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
            alert("INPUTAN HARUS TERISI SEMUA");
        }
  
    });

    let formnyaSkillNatasha = document.forms[1];
    let btnHeal = document.getElementById("btnHitungHealNatasha");
    
    btnHeal.addEventListener("click",(event)=>{
        
        
        //MENAMPILKAN FORMDATA MULAI DARI KEY DAN VALUENYA SEPERTI nama->ricky
        let datanyaNatasha = new FormData(formnyaSkillNatasha);
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
                formnyaSkillNatasha[key].style.backgroundColor = "pink";
            }
        })

        if(tes != 0){
            alert("INPUTAN HARUS TERISI SEMUA");
        }

        
    });

    let formnyaNaLynx = document.forms[2];
    let btnNaLynx = document.getElementById("btnNaLynx");
    
    
    btnNaLynx.addEventListener("click",(event)=>{
        
        
        //MENAMPILKAN FORMDATA MULAI DARI KEY DAN VALUENYA SEPERTI nama->ricky
        let datanyaNatasha = new FormData(formnyaNaLynx);
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
                formnyaNaLynx[key].style.backgroundColor = "pink";
            }
        })

        if(tes != 0){
            alert("INPUTAN HARUS TERISI SEMUA");
        }

        
    });


    let formnyaSkillLynx = document.forms[3];
    let btnHealLynx = document.getElementById("btnHealLynx");
    
    btnHealLynx.addEventListener("click",(event)=>{
        
        
        //MENAMPILKAN FORMDATA MULAI DARI KEY DAN VALUENYA SEPERTI nama->ricky
        let datanyaNatasha = new FormData(formnyaSkillLynx);
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

        let cek = 0;
        datanyaNatasha.forEach((value,key)=>{
            if(value === 0 || value === ""){
                console.log(key+" tidak boleh kosong");
                cek++;
                console.log(cek);
            }
        })
        if(cek != 0){
            alert("inputan harus angka");
        }

        let tes = 0;
        datanyaNatasha.forEach((value,key)=>{
            if(value=== ""){
                console.log(key+" tidak boleh kosong");
                tes++;
                console.log(tes);
                formnyaSkillLynx[key].style.backgroundColor = "pink";
            }
        })

        if(tes != 0){
            alert("INPUTAN HARUS TERISI SEMUA");
        }

        
    });
})