// script.js
document.addEventListener("DOMContentLoaded", function () {
  const registrasiForm = document.querySelector(".Registrasi form");
  const usernameR = document.querySelector(".UsernameR");
  const passwordR = document.querySelector(".PasswordR");
  const konfirmasiR = document.querySelector(".KonfirmasiR");
  const registeredMessage = document.querySelector("#registered");

  registrasiForm.addEventListener("submit", function (e) {
    e.preventDefault();
    
    // Validasi input
    if (usernameR.value.trim() === "") {
      registeredMessage.innerText = "Username harus diisi.";
      return;
    }else if (passwordR.value.trim() === "") {
      registeredMessage.innerText = "Password harus diisi.";
      return;
    }else if (passwordR.value !== konfirmasiR.value) {
      registeredMessage.innerText = "Password dan konfirmasi password tidak cocok.";
      return;
    }

    // Jika semua input valid, Anda dapat menambahkan kode untuk mengirim data ke server di sini.
    // Misalnya, menggunakan fetch() untuk mengirim data ke endpoint registrasi.

    // Set pesan sukses
    registeredMessage.innerText = "Registrasi berhasil!";
  });
});
