function randomizer(event) {
  event.preventDefault();

  const namaRumah = [
    "Rumah murah di pusat kota",
    "Apartemen mewah di dekat mal",
    "Tanah kavling di lokasi strategis",
    "Villa view laut di Bali",
    "Kondominium di dekat stasiun",
    "Rumah cluster di kawasan elite",
    "Rumah minimalis di lingkungan asri",
    "Apartemen studio harga terjangkau",
    "Tanah siap bangun di pinggir jalan",
  ];

  const jenisProperti = ["Rumah", "Apartemen", "Tanah", "Gudang"];

  document.getElementById("username").value =
    namaRumah[acakNomorBerjarak(0, 8)];

  // Acak harga dengan rumus randomisasi 0.1 hinnga 10,
  // lalu hasil randomisasi dikalikan 1200000(Satu juta dua ratus ribu)
  // todo: buat modifikasi hasil value menjadi dalam hitungan rupiah.
  document.getElementById("harga-properti").value =
    acakNomorBerjarak(0.1, 10) * 1200000;

  // Acak jumlah Lantai
  document.getElementById("jumlah-lantai").value = acakNomorBerjarak(1, 4);

  // Acak Nomor HP dengan function acakNomorHP()
  document.getElementById("no-hp").value = acakNomorHP();

  // Acak Jenis Properti dengan function acakNomorBerjarak() dari 1 sampe 3
  document.getElementById("status-bangunan").value =
    jenisProperti[acakNomorBerjarak(0, 3)];

  // Acak
  document
    .querySelectorAll(".checkbox-btn")
    .forEach((checkbox) => (checkbox.checked = false));

  const randomIndexes = new Set();
  while (randomIndexes.size < 2) {
    const randomIndex = acakNomorBerjarak(0, 2);
    randomIndexes.add(acakNomorBerjarak(0, 3));
  }

  for (const randomIndex of randomIndexes) {
    document.querySelectorAll(".checkbox-btn")[randomIndex].checked = true;
  }

  acakRadioBtn();
}

function acakRadioBtn() {
  const radioButtons = document.querySelectorAll(".radio-btn");

  const randomIndex = Math.floor(Math.random() * radioButtons.length);

  radioButtons[randomIndex].checked = true;
}

function acakNomorHP() {
  const randomNumber = Math.floor(Math.random() * 9) + 1;

  const random9DigitNumber = Math.floor(Math.random() * 99999999);

  return `6281${randomNumber}${random9DigitNumber}`;
}

function acakNomorBerjarak(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

document.addEventListener("DOMContentLoaded", function () {
  let form = document.forms[0];

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    let datanya = new FormData(form);
    let isiform = [...datanya.entries()];

    const gallerySection = document.getElementById("getInputValue");
    // gallerySection.textContent = isiform.map((item) => item[1]);

    gallerySection.textContent = isiform.map((item) => item[1]).join(", ");

    console.log(form.name);

    if (value == "") {
      event.preventDefault();
      form[key].style.border = "1px solid red";
      form[2].value = "";
      alert("Data tidak boleh kosong");
    }

    datanya.forEach((value, key) => {
      console.log({ key }, { value });
      // form[key].style.border = "1px solid black";
      // }
    });
  });
});

function sendToAlert(event) {
  event.preventDefault();

  let getHarga = document.getElementById("harga-properti").value;
  let getJenis = document.getElementById("property-type-dropdown").value;
  let getStatus = document.getElementById("radioStatus").value;
  let getAdName = document.getElementById("username").value;
  alert(
    `nama: ${getAdName}\nharga: ${getHarga}\njenis: ${getJenis}\nstatus: ${getStatus}\n`
  );
}

// function loginValidationButton() {
//   const username = document.getElementsByName("username")[0];
//   const password = document.getElementsByName("password")[0];

//   if (username.value == "" || password.value == "") {
//     alert("tidak boleh kosong");
//   } else {
//     window.location = "/1201222013_YogaWilanda/index.html";
//   }
// }


function loginValidationButton() {
  const username = document.getElementsByName('username')[0].value;
  const password = document.getElementsByName('password')[0].value;

  const xhr = new XMLHttpRequest();
  xhr.open('POST', '/1201222013_YogaWilanda/server/loginServer.php');
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onload = function() {
    if (xhr.status === 200) {
      if (xhr.responseText.includes('Login Berhasil')) {
        window.location = 'berhasil_login.php';
      } else {
        alert('Email atau password Anda salah. Silakan coba lagi!');
      }
    } else {
      console.error('Error:', xhr.statusText);
    }
  };
  xhr.send(`username=${username}&password=${password}`);
  return false; // Prevent default form submission
}