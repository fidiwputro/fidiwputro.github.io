/* document.addEventListener("DOMContentLoaded",()=>{
    let form = document.getElementById("formregister");//DOM form
    form.addEventListener("submit", (event)=>{
        
    let dataform = new FormData(form);
    let isi = [...dataform.entries()];

    console.log(isi);

    let penampung =[];

    for (let i=0;i<isi.length ; i++){
        console.log(isi[i][1]);
        
    }

    event.preventDefault();
    
    })

    console.log(form);
}); */

/* document.addEventListener("DOMContentLoaded", ()=>{
    let form = document.getElementById("formregister");//DOM RegisterForm
    form.addEventListener("submit",(event)=>{

        let dataform = new FormData(form)
    })

}) */