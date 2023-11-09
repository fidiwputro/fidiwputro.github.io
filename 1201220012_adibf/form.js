document.addEventListener("DOMContentLoaded", () => {
  let form = document.getElementById("form");
  form.addEventListener("submit", function (event) {
    let dataform = new FormData(form);
    let pesan = 0;

    dataform.forEach((value, key) => {
      if (value === "") {
        pesan = 1;
        event.preventDefault();
        form[key].style.backgroundColor = "red";
      } else {
        form[key].style.backgroundColor = "white";
      }
    });

    if (pesan == 1) {
      alert("Ada data yang kosong");
    } else {
      alert("login berhasil");
    }
  });
});
