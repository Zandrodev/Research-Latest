let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

function toggleSidebar() {
  sidebar.classList.toggle("open");
  menuBtnChange();
}

closeBtn.addEventListener("click", toggleSidebar);

searchBtn.addEventListener("click", toggleSidebar);

// Add a media query listener to automatically close the sidebar when the window size changes
window.matchMedia('(max-width: 1000px)').addEventListener('change', (e) => {
  if (e.matches) {
    // Close the sidebar when the window size is less than or equal to 768px
    sidebar.classList.remove("open");
    menuBtnChange();
  } else {
    // Open the sidebar when the window size is greater than 768px
    sidebar.classList.add("open");
    menuBtnChange();
  }
});
function openReg(){
document.getElementById("empregister").style.width = "100%";
document.getElementById("Rag").style.marginLeft = "230px";
}
function closeReg() {
  document.getElementById("empregister").style.width = "0";
   document.getElementById("Rag").style.marginLeft= "0";
 }

function menuBtnChange() {
  if(sidebar.classList.contains("open")){
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
  } else {
    closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
  }
}
