const header = document.querySelector(".page-header");
const logout = document.querySelector(".logout-icon");
const mainContent = document.querySelector(".main-content");
const sideBar = document.querySelector(".side-section");
const sideBarClose = document.querySelector(".side-section .close");
const sideBarOpen = document.querySelector(".page-header .open");
const footer = document.querySelector(".page-footer");
function closeBar(){
    header.classList.toggle("normal-width");
    mainContent.classList.toggle("normal-width");
    footer.classList.toggle("normal-width");
    sideBar.classList.toggle("close-side");
    sideBarOpen.classList.add("show-open");
}
sideBarClose.addEventListener("click",closeBar);
sideBarOpen.addEventListener("click",()=>{
    sideBarOpen.classList.add("hide-open");
    closeBar()
    setTimeout(()=>{
        sideBarOpen.classList.remove("show-open");
        sideBarOpen.classList.remove("hide-open");
    },700)
})
logout.addEventListener("click",()=>{
    document.location.href="../controller/c_login.php?logout=true";
})