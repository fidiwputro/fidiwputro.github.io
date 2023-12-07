document.addEventListener("DOMContentLoaded", (Event) => {
    let form = document.forms[0];
    form.addEventListener("submit", (evt) => {
        evt.preventDefault();

        let data = new FormData(form);
        var alter = document.querySelectorAll('span')
        var formValid = true

        data.forEach((value, key) => {
            if (value == "" || value == 0) {
                form[key].style.backgroundColor = "grey"
                form[key].style.transition = "0.5s ease-in-out"

                if (key == 'f-name') {
                    alter[0].style.display = 'block'
                    alter[0].style.transition = "0.5s ease-in-out"
                }
                else if (key == 'l-name') {
                    alter[1].style.display = 'block'
                    alter[1].style.transition = "0.5s ease-in-out"
                }

                else if (key == 'email') {
                    alter[2].style.display = 'block'
                    alter[2].style.transition = "0.5s ease-in-out"
                }
                else if (key == 'password') {
                    alter[3].style.display = 'block'
                    alter[3].style.transition = "0.5s ease-in-out"
                }
                else if (key == 'val-password') {
                    alter[5].style.display = 'block'
                    alter[5].style.transition = "0.5s ease-in-out"
                }
                else {
                    alter[0].style.display = 'block'
                    alter[0].style.transition = "0.5s ease-in-out"
                    alter[1].style.display = 'block'
                    alter[1].style.transition = "0.5s ease-in-out"
                    alter[2].style.display = 'block'
                    alter[2].style.transition = "0.5s ease-in-out"
                    alter[3].style.display = 'block'
                    alter[3].style.transition = "0.5s ease-in-out"
                    alter[5].style.display = 'block'
                    alter[5].style.transition = "0.5s ease-in-out"
                }

                setTimeout(() => {
                    alter[0].style.display = 'none'
                    alter[1].style.display = 'none'
                    alter[2].style.display = 'none'
                    alter[3].style.display = 'none'
                    alter[5].style.display = 'none'
                    form[key].style.backgroundColor = "white"
                }, 950);

                formValid = false
            }
        })
        if (formValid) {
            if (form['password'].value == form['val-password'].value) {
                let kode = "12345678"
                alert(kode)

                let validasi = ""
                validasi = prompt('input kode : ')

                if (validasi == kode) {
                    window.location.href = "Login.html"
                }
                else {
                    alert('kode salah')
                }
            }
            else {
                form['password'].style.backgroundColor = 'grey'
                form['val-password'].style.backgroundColor = 'grey'
                alter[4].style.display = 'block'
                alter[4].style.transition = "0.5s ease-in-out"
                alter[6].style.display = 'block'
                alter[6].style.transition = "0.5s ease-in-out"

                setTimeout(() => {
                    alter[4].style.display = 'none'
                    alter[6].style.display = 'none'
                    form['password'].style.backgroundColor = 'white'
                    form['val-password'].style.backgroundColor = 'white'
                }, 950);
            }


        }


    })
})