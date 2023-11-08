document.addEventListener("DOMContentLoaded", (event) => {
    let form = document.forms[0];//DOM

    form.addEventListener("submit", (evt) => {
        evt.preventDefault();

        let dataa = new FormData(form);//Object Form Data
        let Error = "Please enter your";
        let ValidasiSubmit = true;

        dataa.forEach((isi, nama) => {
            console.log(nama + " = " + isi);

            if (isi == '' || isi == 0) {
                form[nama].style.border = "1px solid red";
                form[nama].style.transition = "0.5s ease";
                form[nama].label = nama;

                form[nama].setAttribute('placeholder', Error + ' ' + nama);
                form[nama].classList.add('placeholderMerah');

                ValidasiSubmit = false;
            } else {
                form[nama].style.border = "none";
                form[nama].style.transition = "0.5s ease";
                form[nama].setAttribute('placeholder', nama);

                // alert(nama + ' : ' + isi);
            }
        });

        if (ValidasiSubmit) {
            form.submit();
        }
    });
});