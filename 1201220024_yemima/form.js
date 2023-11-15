document.addEventListener("DOMContentLoaded",()=>{
    let form = document.forms[0];//DOM nya form
    form.addEventListener("submit",(event)=>{
        let dataform = new FormData(form);//object dari form data
        let isi = [...dataform.entries()];//menangkap input dan simpan dalam list
        // for(let i of isi){//tampil isi
        //     console.log(i);
        // }
        console.log(isi);
        dataform.append
        event.preventDefault();//cegah submit
    })
})
