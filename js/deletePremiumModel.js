// window.onload = function() {
var premiumDeleteForm = document.getElementsByClassName("premiumDeleteForm");

// // Get the button that opens the modal
var premiumDeleteBtn = document.getElementsByClassName("premiumDeleteBtn");

// // Get the <span> element that closes the modal
var closePremiumBtn = document.getElementsByClassName(
  "closeDeletePremiumFormBtn"
);

// // When the user clicks on the button, open the modal
for (let i = 0; i < premiumDeleteBtn.length; i++) {
  premiumDeleteBtn[i].addEventListener("click", () => {
    premiumDeleteForm[i].style.display = "block";
  });
}
// }
// When the user clicks on <span> (x), close the modal
for (let i = 0; i < closePremiumBtn.length; i++) {
  closePremiumBtn[i].addEventListener("click", () => {
    premiumDeleteForm[i].style.display = "none";
  });
}
// // When the user clicks anywhere outside of the modal, close it
// // window.onclick = function(event) {
// //   if (event.target == modal) {
// //     productEditForm.style.display = "none";
// //   }
// // }
// }
