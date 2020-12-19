// window.onload = function () {
var premiumEditForm = document.getElementsByClassName("premiumEditForm");

//   // Get the button that opens the modal
var premiumEditBtn = document.getElementsByClassName("premiumEditBtn");

//   // Get the <span> element that closes the modal
var closePremiumEditFormBtn = document.getElementsByClassName(
  "closePremiumEditFormBtn"
);

//   // When the user clicks on the button, open the modal
for (let i = 0; i < premiumEditBtn.length; i++) {
  premiumEditBtn[i].addEventListener("click", () => {
    premiumEditForm[i].style.display = "block";
  });
}
//   // CLOSE EDIT FORM
for (let i = 0; i < closePremiumEditFormBtn.length; i++) {
  closePremiumEditFormBtn[i].addEventListener("click", () => {
    premiumEditForm[i].style.display = "none";
  });
}
//   // When the user clicks anywhere outside of the modal, close it
//   // window.onclick = function(event) {
//   //   if (event.target == modal) {
//   //     productEditForm.style.display = "none";
//   //   }
//   // }
// };
