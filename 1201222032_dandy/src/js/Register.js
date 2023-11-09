document.addEventListener("DOMContentLoaded", () => {
    let form = document.forms[0];
    form.addEventListener("submit", (event) => {
        let dataform = new FormData(form);
        dataform.forEach((value,key) => {
            if (value == "") {
                form[key].style.border="1px solid red"
                form[key].placeholder= `${key} harus diisi`
                console.log(dataform);
                setTimeout(() => {
                    form[key].style.border="1px solid white"
                    form[key].style.backgroundColor="white"
                    form[0].placeholder="Masukkan Username"
                    form[1].placeholder="Masukkan Password"
                }, 1000)
                event.preventDefault();
            }
        })
    })
})