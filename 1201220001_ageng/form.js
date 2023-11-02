// console.log("test");
document.addEventListener("DOMContentLoaded", (event)=>{
    let form = document.forms[0]; // DOM
    form.addEventListener("submit", (evt)=>{
        evt.preventDefault();
        let data = new FormData(form); // object Form Data
        // console.log([...data.entries()]);
        // data.forEach((val,key)=>{
        //     console.log(key + " " + val);
        //     if (val=='' || val==0){
        //         alert(key + ' tidak boleh kosong');
        //         // form[key].style.backgroundColor = 'pink';
        //     } else if (val){
        //         alert(key + ' Terisi');
        //     }
        // });
        console.log(...data.entries());
        // data.append('kota','Wonogiri');
        // console.log(...data.entries());
        // data.delete('txtnama');
        // console.log(...data.entries());
        // console.log(data.get('txtnama'));
        console.log(data.has('txtnama'));

    })
});