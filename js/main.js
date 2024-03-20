const navItems = document.querySelector('.nav_items')
const openNavBtn = document.getElementById("open_nav-btn")
const closeNavBtn = document.getElementById('close_nav-btn')

// open nav menu dropdown
const openNav = () => {
    navItems.style.display = "flex";
    openNavBtn.style.display="none"
    closeNavBtn.style.display="inline-block"
}

// close nav menu dropdown

const closeNav = () => {
   navItems.style.display = "none"
   openNavBtn.style.display = "inline-block"
   closeNavBtn.style.display = "none"
}

openNavBtn.addEventListener("click", openNav)
closeNavBtn.addEventListener("click",closeNav)

const sidebar = document.querySelector("aside")
const showSidebarBtn = document.getElementById("show_sidebar-btn")
const hideSidebarBtn = document.getElementById("hide_sidebar-btn")

// SHOW SIDEBAR ON SMALL DEVICES
showSidebarBtn.addEventListener("click",()=>{
    sidebar.style.left = "0"
    showSidebarBtn.style.display = "none"
    hideSidebarBtn.style.display= "inline-block"
})

// HIDE SIDEBAR ON SMALL DEVICES
hideSidebarBtn.addEventListener("click", ()=> {
    sidebar.style.left="-100%"
    hideSidebarBtn.style.display="none"
    showSidebarBtn.style.display="inline-block"
})