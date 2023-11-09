document.addEventListener("DOMContentLoaded", () => {
    let form = document.forms[0];
    form.addEventListener("submit", (event) => {
        let dataform = new FormData(form);
        let usernameInput = form[0].value
        let passwordInput = form[1].value

        dataform.forEach((value,key) => {
            if (value == "") {
                form[key].style.border="1px solid red"
                form[key].placeholder=`${key} harus diisi`
                // form[1].placeholder="Password harus diisi"
                console.log(dataform);
                setTimeout(() => {
                    form[key].style.border="1px solid white"
                    form[key].style.backgroundColor="white"
                    form[0].placeholder="Masukkan Username"
                    form[1].placeholder="Masukkan Password"
                }, 1000)
                // form[0].value="user"
                // form[1].value="password"
                event.preventDefault();
            }else if (usernameInput == "user" && passwordInput == "user"){
                // window.location.href="./Dashboard.html"
                alert('testqwqw');
            }else if (usernameInput != "user" && passwordInput != "user"){
                form[key].style.border="1px solid red"
                form[key].value= `${key} Salah`
                console.log(dataform);
                setTimeout(() => {
                    form[key].style.border="1px solid white"
                    form[key].style.backgroundColor="white"
                    // data[key].value=`${key}`
                    // form[0].value=""
                    form[key].value=""
                    form[0].placeholder="Masukkan Username"
                    form[1].placeholder="Masukkan Password"
                }, 1000)
                event.preventDefault();
            }
        })
    })
})
// }else if (form[1] != "password"){
//     form[key].style.border="1px solid red"
//     form[1].value="Password"
//     console.log(dataform);
//     setTimeout(() => {
//         form[key].style.border="1px solid white"
//         form[key].style.backgroundColor="white"
//         // data[key].value=`${key}`
//         form[1].value="password"
//         form[0].placeholder="Masukkan Username"
//         form[1].placeholder="Masukkan Password"
//     }, 1000)
//     event.preventDefault();
// }