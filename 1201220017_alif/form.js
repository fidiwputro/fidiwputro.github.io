dovument.addEventListener("DOMContentLoaded"), ()=>{
    let form = document.forms[0]; //DOM NYA FORM
    form.addEventListener("submit", (event)=>{
        let dataform = new FormData(form); //object dari FormData
        datanya
        let isinya = datanyaform.entries(); //menangkap inout dan disimpan dalam list
        console.log(isinya);
        event.preventDefault();//mencegah untuk submit
    })

    
}