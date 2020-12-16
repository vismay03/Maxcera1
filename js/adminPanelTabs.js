// Product Page Tabs

const tabs = document.querySelectorAll(".tabs");
const table = document.querySelectorAll(".table");
const tableContent = document.querySelectorAll(".table-content");

function onTableClick(event) {
  // deactivate existing active tabs and panel
   
  for (let i = 0; i < table.length; i++) {
    table[i].classList.remove("active");
  }

  for (let i = 0; i < tableContent.length; i++) {
    tableContent[i].classList.remove("active");
  }

  // activate new tabs and panel
  event.target.classList.add("active");
  let classString = event.target.getAttribute("data-target");
  
  document
    .getElementById("tables")
    .getElementsByClassName(classString)[0]
    .classList.add("active");
}

for (let i = 0; i < table.length; i++) {
  table[i].addEventListener("click", onTableClick, false);
}
