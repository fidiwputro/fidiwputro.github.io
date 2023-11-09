document.addEventListener('DOMContentLoaded', ()=>{

    let form = document.forms[0];

    form.addEventListener('submit', (event)=>{
        let datanyafrom = new FormData(form);
        console.log(datanyafrom);
        let data = [...datanyafrom.entries()]; // ... adalah spread operator adalh mengubah array menjadi array
        console.log(data);
        for(let isidata of data){
            console.log(isidata);
        }
        let cobagetall= datanyafrom.getAll('provinsi');// mengambil semua values yang keynamenya sama entah itu 3 yang sama
        console.log(cobagetall);
        let cobaValues=[...datanyafrom.values()];
        console.log(cobaValues);



        let dataTampung=[];

        let isiname;
        // for of itu kayak yang di python 
        for( isiname of datanyafrom.keys() ){ // keys ini untuk mengambil key namenya
            const isivalue = datanyafrom.get(isiname); // saya menggunakan gets untuk menambil nilai dari value yang telah di ambil berdasarkan keyname

            if (isivalue.trim() === ''){
                dataTampung.push([isiname]);
            }
            console.log(`Key Name = ${isiname} | Value = ${isivalue}`)
        }
        
        /* Check value */
        if(dataTampung.length != 0){
            let hasil='Data Bagian : \n [ "';

            dataTampung.forEach(function(isi,index){
                hasil+=isi+', ';
            });
            /* 
            for(let i=0;i<dataTampung.length;i++){
                let datakosong = dataTampung[i];
                hasil+=datakosong+', ';
            }
             */

            alert(hasil+'" ] Kosong Harap Di Lengkapi')
        }else{
            alert('TERIMAKASIH TELAH REGISTRASI')
            event.defaultPrevented();
        }
        
        event.preventDefault();
    });
    
} );
