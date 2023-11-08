// console.log("test");
document.addEventListener("DOMContentLoaded",(event)=>{
    let form = document.forms[0];
    form.addEventListener("submit", (evt)=>{
        evt.preventDefault();
        let data = new FormData(form);
        data.forEach((val,key)=>{
            if(val==''){
                form[0].placeholder='masukkan username'
                form[1].placeholder='masukkan email'
                form[2].placeholder='masukkan password'
                form[3].placeholder='masukkan password'
                form[key].style.border= "2px dashed red"
                form[key].style.transition= "0.5s ease-in-out"
                setTimeout(()=>{
                    form[key].style.border="2px dashed white"
                },1000)
            }else{
                window.location.href = "/1201222041_Muhammad/index.html"
            }
        })

        // console.log([...data.entries()]);
        // data.append('kota','pamekasan');
        // console.log([...data.entries()]);
        // data.delete('commpas')
        // console.log(data.get('user'))
        // data.set('user','muhammad')
        // data.forEach((val,key)=>{
        //     // console.log(val+" "+key)
        //     if(val==''){
        //         // form[key].style.backgroundColor="red";
        //         form[key].style.border="2px dashed Red";
        //         form[key].style.transition="all 1s ease-in-out";
        //     setTimeout(()=>
        //     {
        //         form[key].style.border="2px dashed white";
                
        //     },1000
        //     )
        //     }
        // })
        // console.log('tes submit')













    })
})