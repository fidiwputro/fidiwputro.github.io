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
                
                if (key == 'password') {
                    alter[1].style.display = 'block'
                    alter[1].style.transition = "0.5s ease-in-out"
                } 
                else if (key == 'email'){
                    alter[0].style.display = 'block'
                    alter[0].style.transition = "0.5s ease-in-out"
                }
                else {
                    alter[1].style.display = 'block'
                    alter[1].style.transition = "0.5s ease-in-out"
                    alter[0].style.display = 'block'
                    alter[0].style.transition = "0.5s ease-in-out"
                }

                setTimeout(() => {
                    alter[0].style.display = 'none'
                    alter[1].style.display = 'none'
                    form[key].style.backgroundColor = "white"
                }, 950);

                formValid = false
            }

        })
        if (formValid) {
            window.location.href = "index.html"
        }
    })
})