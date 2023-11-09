document.addEventListener("DOMContentLoaded", (event) => {
    let form = document.forms[0]; // DOM
    form.addEventListener("submit", (evt) => {
        evt.preventDefault(); // mencegah submit
        let data = new FormData(form); // Object Form Data
        console.log([...data.entries()]);
    });
});

console.log("tes");