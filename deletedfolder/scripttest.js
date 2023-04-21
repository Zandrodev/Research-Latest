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
function filterTable() {
  // Get input value and convert to lowercase
  var input = document.getElementById("myInput");
  var filter = input.value.toLowerCase();



  // Get table rows and loop through them
  var table = document.getElementById("content-table");
  var rows = table.getElementsByTagName("tr");
  for (var i = 1; i < rows.length; i++) {
    var cells = rows[i].getElementsByTagName("td");
    var rowText = "";

    // Loop through cells and concatenate text
    for (var j = 0; j < cells.length; j++) {
      rowText += cells[j].textContent.toLowerCase() + " ";
    }

    // If search term is found, show row; otherwise hide it
    if (rowText.indexOf(filter) > -1) {
      rows[i].style.display = "";
    } else {
      rows[i].style.display = "none";
    }
  }
}
function filterAttendance() {
  // Get the selected date from the date picker
  const selectedDate = document.getElementById("date-picker").value;

  // Get the rows of the present table
  const presentRows = document.querySelectorAll("#attentable tbody tr");

  // Get the rows of the absent table
  const absentRows = document.querySelectorAll("#absent-table tbody tr");

  // Loop through the rows of the present table
  presentRows.forEach((row) => {
    // Get the date from the row
    const date = row.querySelector("td:nth-child(4)").textContent;

    // Show or hide the row based on whether it matches the selected date
    row.style.display = date === selectedDate ? "table-row" : "none";
  });

  // Loop through the rows of the absent table
  absentRows.forEach((row) => {
    // Get the date from the row
    const date = row.querySelector("td:nth-child(4)").textContent;

    // Show or hide the row based on whether it matches the selected date
    row.style.display = date === selectedDate ? "table-row" : "none";
  });
}
