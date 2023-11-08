document.addEventListener("DOMContentLoaded",(event)=>{
	let form = document.forms[0];
	form.addEventListener("submit",(evt)=>{
		evt.preventDefault();
		let datanya = new FormData(form);
		console.log([...datanya.entries()]);
		datanya.forEach((val,key)=>{
			if(val==''){
				alert(key+' tidak boleh kosong');
				form[key].style.backgroundColor="pink";
			}
		});
	})


});

//console.log("tes");