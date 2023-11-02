// function randomizer(event) {
//   event.preventDefault();
//   const names = [
//     "Yoga Wilanda",
//     "Zidan Irfan Zaky",
//     "Rizky Fauzan",
//     "Hafizh Fadillah",
//   ];
//   const prices = ["100000", "200000", "300000", "400000"];

//   randomIndex = Math.floor(Math.random() * names.length);

//   const randomName = names[randomIndex];
//   const randomPrice = prices[randomIndex];

//   document.getElementById("username").value = randomName;
//   document.getElementById("harga-properti").value = randomPrice;
// }

function randomizer(event) {
  event.preventDefault(); // Prevent form submission and page reload

  const names = [
    "Yoga Wilanda",
    "Zidan Irfan Zaky",
    "Rizky Fauzan",
    "Hafizh Fadillah",
  ];
  const prices = ["100000", "200000", "300000", "400000"];

  randomIndex = Math.floor(Math.random() * names.length);

  const randomName = names[randomIndex];
  const randomPrice = prices[randomIndex];

  document.getElementById("username").value = randomName;
  document.getElementById("harga-properti").value = randomPrice;
}

function sendToAlert(event) {
  event.preventDefault();
  let getUsername = document.getElementById("username").value;
  let getHarga = document.getElementById("harga-properti").value;

  alert(getUsername + " " + getHarga);
}
