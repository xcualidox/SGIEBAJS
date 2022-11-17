import {showMessage, closeMessage, message} from "./utilities.js";
const content = document.querySelectorAll("[data-id]");
const root = document.querySelector(":root");
const loginButton = document.querySelector(".login-icon");
const accederButton = document.querySelector("#btn-login");
const loginSection = document.querySelector(".login-section")
const closeLoginBtn = document.querySelector(".close-login");
const loginForm = document.querySelector(".login-form");
const errorMsg = document.querySelectorAll(".error-msg");
const loginInputs = document.querySelectorAll(".login-input");
function showLogin(){
    root.style.setProperty("--opacity", "0.75");
    root.style.setProperty("--pointer-events", "all");
    loginSection.classList.add("login-show")
}
function closeLogin(){
    loginSection.classList.add("login-close");
    if(message.classList.contains("msg-popup-active")){
        closeMessage();
    }
    loginForm.reset();
    setTimeout(()=>{
        loginSection.classList.remove("login-show");
        loginSection.classList.remove("login-close");
        root.style.setProperty("--opacity", "0");
        root.style.setProperty("--pointer-events", "none");
    },700)
}
function showArticle(){
    const showed = document.querySelector(".show-article");
    const id = this.dataset.id;
    const article = document.getElementById(id)
    if(showed){
        showed.classList.remove("show-article")
    }
    article.classList.add("show-article")
}
function validateInputs(){
    let result = true;
    loginInputs.forEach((element,index,arr) => {
        if(element.value.length==0){
            errorMsg[index].innerHTML="El campo no puede estar vacio"
            errorMsg[index].classList.add("error-msg-show");
            element.classList.add("error-msg-input");
            result = false;
        }
    });
    if(!errorMsg[0].classList.contains("error-msg-show") && isNaN(loginInputs[0].value)){
            errorMsg[0].innerHTML="El campo debe ser numerico"
            errorMsg[0].classList.add("error-msg-show");
            loginInputs[0].classList.add("error-msg-input");
            result = false;
    }
    return result;
}
function login(){
    if(validateInputs()){
        const data = new FormData(loginForm);
        fetch("php/controller/c_login.php",{
            method: "POST",
            body: data
        })
        .then((response)=>response.json())
        .then((result)=>{
            if(result[0]){
                const ope = document.createElement("input");
                ope.type="hidden";
                ope.value="ok";
                ope.name = "ope";
                ope.value = result[1];
                loginForm.appendChild(ope);
                loginForm.submit();
                loginForm.reset();
            }
            else{
                showMessage("Usuario o contraseña incorrectos!");
            }
        })
        .catch((e)=>console.log(e))
    }
   return false;
}
function removeError(){
    errorMsg.forEach((element,index,arr)=>{
        if(element.classList.contains("error-msg-show")){
            element.classList.remove("error-msg-show");
            loginInputs[index].classList.remove("error-msg-input");
        }
    })
    if(message.classList.contains("msg-popup-active")){
        closeMessage();
    }
}
loginButton.addEventListener("click",showLogin);
closeLoginBtn.addEventListener("click",closeLogin);
content.forEach((element)=>{
    element.addEventListener("click",showArticle)
})
accederButton.addEventListener("click",login)
loginInputs.forEach((element)=>{
    element.addEventListener("input",(e)=>{
        if(e.target.value.length>20){
            e.target.value = e.target.value.slice(0,-1);
        }
    })
    element.addEventListener("focus",removeError)
})
// accederButton.addEventListener("click",()=>{
//     document.location.href="../php/view/admin.html";
// })
