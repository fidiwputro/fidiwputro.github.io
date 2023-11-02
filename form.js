document.addEventListener("DOMContentLoaded",()=>{
    let form = document.forms[0]; //DOM nya form
    form.addEventListener("submit",(event)=>{     
        event.preventDefault();//mencegah untuk submit   
        
        let datanyaform = new FormData(form);// object dari FormData 
        let isbenar = true;       
        datanyaform.forEach((value,key) => {
            if(value=="" || value==0){
                console.log(form[key]);
                form[key].style.backgroundColor="pink";
                console.log(key+" tidak boleh kosong");
                isbenar = false;
            }else{
                isbenar = true;
            }
            
        }); 
        console.log([...datanyaform.entries()]);
        console.log(isbenar);
        if(isbenar){
            if(confirm("Apakah anda yakin?")){
                form.submit();
            }
            return false;
            
        }else{
            alert("tidak boleh kosong");
        }
        
    });

    form.querySelectorAll('input,select').forEach((item)=>{
        item.addEventListener("change",(event)=>{
            if(item.value==''||item.value==0){
                item.style.backgroundColor="pink";
            }else{
                item.style.backgroundColor="white";
            }
            
        })
    });
    
})
