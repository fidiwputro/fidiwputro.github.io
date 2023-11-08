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
                form[1].value="user"
                form[2].value="user@gmail.com"
                form[3].value="password"
                event.preventDefault();
            }
            if (form[0] == "user" && form[1] == "user" && form[2] == "user@gmail.com" && form[3] == "password"){
                alert("Berhasil Daftar !")
                event.preventDefault();
            }
        })
    })
})