document.addEventListener('DOMContentLoaded', ()=>{
    let form = document.forms[0];
    form.addEventListener('submit', (event)=>{
        let datanyaform = new FormData(form);
        let isinya = datanyaform.entries();
        for (let i of isinya) {
            console.log(i);
        }
        event.preventDefault();
    })
})