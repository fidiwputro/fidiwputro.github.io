// console.log("test");
document.addEventListener("DOMContentLoaded", (event)=>{
    let form = document.forms[0]; // DOM
    form.addEventListener("submit", (evt)=>{
        evt.preventDefault();
        let data = new FormData(form); // object Form Data
        console.log(...data.entries());
    })
});