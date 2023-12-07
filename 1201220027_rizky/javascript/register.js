document.addEventListener("DOMContentLoaded", () => {
    let form = document.forms[0];
  
    form.addEventListener("submit", (event) => {
      event.preventDefault();
  
      let dataform = new FormData(form); // object form
      let datta = [...dataform.entries()]; // ditampilkan di console nya
      console.log(datta);
  
      for (let dataconsole of datta) {
        console.log(dataconsole);
      }
  
      let ValidasiSumbit = true;
      let error = "Tolong Masukan";
  
      daata.forEach((value, nama) => {
        console.log(nama + "=" + isi);
  
        if (value == "" || nama == 0) {
          form[nama].label = nama;
          form[nama].setAttribute("placeholder", error + "" + nama);
  
          ValidasiSumbit = false;
        } else {
          form[nama].setAttribute("placeholder", nama);
        }
      });
  
      if (ValidasiSumbit) {
        form.submit();
      }
    });
  });