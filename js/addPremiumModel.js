// window.onload = function() {
var premiumAddForm = document.getElementById("premiumAddForm");
// // Get the button that opens the modal
var premiumAddBtn = document.getElementById("premiumAddBtn");
// // Get the <span> element that closes the modal
var closeAddPremiumBtn = document.getElementById("closeAddPremiumBtn");

// // When the user clicks on the button, open the modal

premiumAddBtn.onclick = () => {
  premiumAddForm.style.display = "block";
};

// }
// When the user clicks on <span> (x), close the modal

closeAddPremiumBtn.onclick = () => {
  premiumAddForm.style.display = "none";
};

// // When the user clicks anywhere outside of the modal, close it
// // window.onclick = function(event) {
// //   if (event.target == modal) {
// //     productEditForm.style.display = "none";
// //   }
// // }
// }
