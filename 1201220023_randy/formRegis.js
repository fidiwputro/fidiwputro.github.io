document.addEventListener("DOMContentLoaded", function () {
  let form = document.forms[0];

  form.addEventListener("submit", function (event) {
    let dataform = new FormData(form);

    let alertTampil = false;

    dataform.forEach(function (value, key) {
      if (value === "") {
        if (!alertTampil) {
          alert("Lengkapi Field yang kosong!");
          alertTampil = true;
        }
        event.preventDefault();
        form[key].style.border = "1px solid black";
        form[key].style.backgroundColor = "red";
      } else {
        form[key].style.border = "1px solid black";
        form[key].style.backgroundColor = "white";
      }
    });
    if (!alertTampil) {
      alert("Registrasi Sukses!");
    }
  });
});
