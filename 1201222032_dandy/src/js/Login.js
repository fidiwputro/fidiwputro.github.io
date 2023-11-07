document.addEventListener("DOMContentLoaded", () => {
    let form = document.forms[0];
    form.addEventListener("submit", (event) => {
        let dataform = new FormData(form);
        dataform.forEach((value,key) => {
            if (value == "") {
                form[key].style.border="1px solid red"
                form[key].style.backgroundColor="red"
                console.log(dataform);
                alert(`${key} harus diisi`)
                setTimeout(() => {
                    form[key].style.border="1px solid white"
                    form[key].style.backgroundColor="white"
                }, 1000)
                form[0].value="user"
                form[1].value="password"
                event.preventDefault();
            }else if (form[0] == "user" && form[1] == "password"){
                alert("Berhasil Login !")
            }
        })
    })
})