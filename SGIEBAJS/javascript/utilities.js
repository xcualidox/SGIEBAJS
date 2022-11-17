const message = document.querySelector(".msg-popup");
const closeMsg = document.querySelector(".close-msg");
function showMessage(msg){
    message.lastElementChild.innerHTML = msg;
    message.classList.add("msg-popup-active");
}
function closeMessage(){
    message.classList.add("msg-popup-close");
    setTimeout(()=>{
        message.classList.remove("msg-popup-close");
        message.classList.remove("msg-popup-active");
    },400)
    
}
closeMsg.addEventListener("click", closeMessage);
export {showMessage, closeMessage, message};