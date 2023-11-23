document.addEventListener("DOMContentLoaded", (event) => { 
    // document.getElementById("username").style.backgroundColor = "red";
    let form = document.forms[0]; //DOM
    form.addEventListener("submit",(evt)=>{
        evt.preventDefault();
        let datanya = new FormData(form); // Object FormData
        console.log([...datanya.entries()]);
        datanya.forEach((val,key)=>{
            if(val == ""){
                form[key].style.backgroundColor = "red";
            }else{
                form[key].style.backgroundColor = "white";
            }
        })
    })
});
