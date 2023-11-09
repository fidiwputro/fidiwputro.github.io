document.addEventListener("DOMContentLoaded", (event) => {
    let form = document.forms[0];
    form.addEventListener("submit", (evt) => {
        evt.preventDefault();
        let datanya = new FormData(form);
        console.log([...datanya.entries()])
        console.log("ini");
        let cek = 0;

        datanya.forEach((val, key) => {
            if (val == "") {
                form[key].style.backgroundColor = "pink";
                // form[key].style.backgroundColor = "pink";
                cek = 1;
            } else {
                if (key == "Password" && val.length < 8) {
                    alert("password kurang dari 6");
                    cek = 1;
                } else {
                    form[key].style.backgroundColor = "white";
                }
            }


        });
        if (cek == 0) {
            window.location.href = "index.html";

        }
    });
});