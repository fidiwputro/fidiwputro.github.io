document.addEventListener("DOMContentLoaded",(event)=>{
    let form = document.forms[0];// DOM
    form.addEventListener("submit",(evt)=>{
        evt.preventDefault();//mencegah submit
        let datanya = new FormData(form);// Object FormData
        // datanya.forEach((val,key)=>{
        //     if(val=='' || val==0){
        //         alert(key+' tidak boleh kosong');
        //         form[key].style.backgroundColor="pink";
        //     }
        // });
        console.log([...datanya.entries()]);
        // datanya.append('kota','Gresik');
        // console.log([...datanya.entries()]);
        // datanya.delete('txtnama');
        // console.log([...datanya.entries()]);
        
        console.log([...datanya.values()]);
    })
    
});
// console.log("tes");
