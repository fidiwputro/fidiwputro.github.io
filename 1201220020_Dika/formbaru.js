document.addEventListener("DOMContentLoaded", (event)=>{
    let form = document.forms[0]
    form.addEventListener("submit", (evt)=>{
        evt.preventDefault();
        let datanya = new FormData(form);
        // console.log([...datanya.entries()]);
        datanya.forEach((val, key)=>{
            if (val=='' || val==0){
                // alert(key+' lah kok kosong');
                form[key].style.backgroundColor="red    ";
            }
        })
    })
});
// console.log("soto itu enak");
