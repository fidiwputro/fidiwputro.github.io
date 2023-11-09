document.addEventListener("DOMContentLoaded", ()=> {
    let form = document.getElementById('formreg');
    
    form.addEventListener("submit", (event)=> {
        let dataform = new FormData(form);
        let isinya = dataform.entries();

        for (let i of isinya){
            console.log(i);
        }

        event.preventDefault();
    })


})
