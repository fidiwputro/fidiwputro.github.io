document.addEventListener("DOMContentLoaded", (event) => {
    let form = document.forms[0];
    form.addEventListener("submit", (evt) => {
        let datanya = new FormData(form);
        console.log([...datanya.entries()])

        datanya.forEach((val, key) => {
            console.log("work")
            form[key].style.background = pink;
            // if (key.includes("rp")) {
            //     let pls = 0;
            //     if (val !== "") {
            //         pls = parseInt(val);
            //     }
            //     let take = parseInt(form.getAttribute("uangOffline"));
            //     let gas = take + pls;
            //     form.setAttribute("uangOffline", gas);
            // };
        });
    });
});