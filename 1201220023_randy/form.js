document.addEventListener("DOMContentLoaded", function () {
  let form = document.forms[0]; //DOM nya Form
  form.addEventListener("submit", function (event) {
    //isi function
    let dataform = new FormData(form); // objek dari FormData

    // dataform.append("gender", "Laki"); //menambahkan value baru dengan menggunakan append keys dan value

    let isi = [...dataform.entries()]; // menangkap entries langsung menjadi array [...dataform.entries()]
    for (let i of isi) {
      console.log(i);
    }
    // console.log([]...dataform.values()); //menampilkan value yang sudah di inputkan di form
    // dataform.delete("gender"); //menghapus data yang ditambahkan sesuai dengan keys
    // let isi2 = [...dataform.entries()];
    // console.log(isi2);
    event.preventDefault(); //menahan event agar tidak terlempar ke index.html
  });
});
