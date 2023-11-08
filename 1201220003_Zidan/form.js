// console.log("TEST")
document.addEventListener("DOMContentLoaded", (Event) => {
  let form = document.forms[0];
  form.addEventListener("submit", (evt) => {
    evt.preventDefault();
    let datanya = new FormData(form);
    // console.log([...datanya.entries()]);
    datanya.forEach((isi,nama)=>{
        // console.log(isi + " " + nama)
        if(isi == '' || isi == 0){  
            form[nama].style.backgroundColor="#ff6969"
            form[nama].style.fontWeight="BOLD"
            form[nama].style.transition="0.5s ease-in-out"
            
            setTimeout(() => {
                form[nama].style.backgroundColor="white"
                form[nama].style.fontWeight="normal"
              }, 750);
        }
        // else{
        //     alert(nama+' : ' +isi);
        // }
    })
  });
  //   let data = new FormData(form);
});
