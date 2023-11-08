document.addEventListener("DOMContentLoaded", ()=>{
    if (window.location.href.endsWith("login.html")) {
        LoginForm()
    }else{
        RegisterForm()
    }
        
})

const NAME_REQUIRED = "Please enter your name";
const EMAIL_REQUIRED = "Please enter your email";
const EMAIL_INVALID = "Please enter a correct email address format";

function showError(input, message, isHaveIcon) {
	return showMessage(input, message, false, isHaveIcon);
}

function showSuccess(input, isHaveIcon) {
	return showMessage(input, "", true, isHaveIcon);
}

function hasValue(input, message, Icon) {
    let isHaveIcon = corceBoolean(Icon)
	if (input.value.trim() === "") {
		return showError(input, message, isHaveIcon);
	}
	return showSuccess(input, isHaveIcon);
}
function mustSameInput(input1, input2, message, Icon) {
    let isHaveIcon = corceBoolean(Icon)
	if (input1.value !== input2.value) {
		return showError(input2, message, isHaveIcon);
	}else if (input1.value == "" || input2.value == "") {
        input1.value  == "" ? showError(input1, `${input1.name} harus diisi`, isHaveIcon): ''
        input2.value  == "" ? showError(input2, `Konfirmasi password harus diisi`, isHaveIcon): ''
        return false
    }
	return showSuccess(input2, isHaveIcon);
}

function corceBoolean(value){
    if (value) {
        return true;
    }
    return false
}

function showMessage(input, message, type, isHaveIcon) {
    let msg;
    if (isHaveIcon) {
        msg = input.parentNode.parentNode.querySelector("span");
    }else{
        msg = input.parentNode.querySelector("span");
    }
	msg.innerText = message;
	return type;
}


function LoginForm() {
    let form = document.getElementById("diform")
    form.addEventListener("submit", (evt)=>{
        // let formData = new FormData(form)
        evt.preventDefault();
        let usernameValid = hasValue(form.elements["username"], NAME_REQUIRED);
        let passwordValid = hasValue(form.elements["password"], "password invalid", true);
        if (usernameValid && passwordValid) {
            window.location.href = "index.html"
        }
    })
}

function RegisterForm(){
    let form = document.getElementById("regForm")
    form.addEventListener("submit",(event)=>{
        event.preventDefault();
        let formData = new FormData(form)
        const val = [...formData.entries()]
        let valid = true;
        val.forEach(([key, val])=>{
            if (key == "password" || key == "confirmPassword") {
                valid = !mustSameInput(form.elements["password"], form.elements["confirmPassword"], "Konfirmasi password dan password harus sama", true) ? false : valid
            }else{
                valid = !hasValue(form.elements[key], `${key} harus diisi`) ? false : valid
            }
            // console.log(key)
        })
        if (valid) {
            
        }
    })
}


function seePassword(idEl) {
    let pass = document.getElementById(idEl);
    if (pass.type == "password") {
        pass.parentNode.querySelectorAll("svg")[0].classList.add("d-hidden")
        pass.parentNode.querySelectorAll("svg")[1].classList.remove("d-hidden")
        pass.type = "text"
    }else{
        pass.type = "password"
        pass.parentNode.querySelectorAll("svg")[0].classList.remove("d-hidden")
        pass.parentNode.querySelectorAll("svg")[1].classList.add("d-hidden")
    }
    
}