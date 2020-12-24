// Product Page Tabs


const tabs = document.querySelectorAll(".tabs");
const tab = document.querySelectorAll(".tab");
const panel = document.querySelectorAll(".tab-content");
console.log('hi tabs');

tab[0].classList.add('active');

panel[0].classList.add("active");




function onTabClick(event) {

  // deactivate existing active tabs and panel

  for (let i = 0; i < tab.length; i++) {
    tab[i].classList.remove("active");
  }

  for (let i = 0; i < panel.length; i++) {
    panel[i].classList.remove("active");
  }


  // activate new tabs and panel
  event.target.classList.add('active');
  let classString = event.target.getAttribute('data-target');
  console.log(classString);
  document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
}

for (let i = 0; i < tab.length; i++) {
  tab[i].addEventListener('click', onTabClick, false);
}