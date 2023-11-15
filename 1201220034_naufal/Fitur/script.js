// script.js
document.addEventListener("DOMContentLoaded", function () {
  const registrasiForm = document.querySelector(".Registrasi form");
  const loginForm = document.querySelector(".Login form");
  const usernameR = document.querySelector(".UsernameR");
  const passwordR = document.querySelector(".PasswordR");
  const konfirmasiR = document.querySelector(".KonfirmasiR");
  const usernameL = document.querySelector(".UsernameL");
  const passwordL = document.querySelector(".PasswordL");
  const registeredMessage = document.querySelector("#registered");
  const loginMessage = document.querySelector("#loginMessage");

  registrasiForm.addEventListener("submit", function (e) {
    e.preventDefault();
    
    // Validasi input registrasi
    if (usernameR.value.trim() === "") {
      registeredMessage.innerText = "Username harus diisi.";
      return;
    }else if (passwordR.value.trim() === "") {
      registeredMessage.innerText = "Password harus diisi.";
      return;
    }else if (passwordR.value !== konfirmasiR.value) {
      registeredMessage.innerText = "Password dan konfirmasi password tidak cocok.";
      return;
    }else{
      window.location.href = "./Forum.html";
    }

    // Jika semua input valid, Anda dapat menambahkan kode untuk mengirim data ke server di sini.
    // Misalnya, menggunakan fetch() untuk mengirim data ke endpoint registrasi.

    // Set pesan sukses
    registeredMessage.innerText = "Registrasi berhasil!";
  });

  loginForm.addEventListener("submit", function (e) {
    e.preventDefault();

    // Validasi input login
    if (usernameL.value.trim() === "") {
      loginMessage.innerText = "Username harus diisi.";
      return;
    }else if (passwordL.value.trim() === "") {
      loginMessage.innerText = "Password harus diisi.";
      return;
    }

    // Jika semua input login valid, Anda dapat menambahkan kode untuk melakukan autentikasi sesuai kebutuhan.
    // Misalnya, memeriksa username dan password di database.

    // Set pesan sukses
    loginMessage.innerText = "Login berhasil!";
  });
});
