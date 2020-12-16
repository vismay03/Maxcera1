// window.onload = function() {
var categoryAddForm = document.getElementById("categoryAddForm");
// // Get the button that opens the modal
var categoryAddBtn = document.getElementById("categoryAddBtn");
// // Get the <span> element that closes the modal
var closeAddCategoryBtn = document.getElementById("closeAddCategoryBtn");

// // When the user clicks on the button, open the modal

categoryAddBtn.onclick = () => {
  categoryAddForm.style.display = "block";
};

// }
// When the user clicks on <span> (x), close the modal

closeAddCategoryBtn.onclick = () => {
  categoryAddForm.style.display = "none";
};

// // When the user clicks anywhere outside of the modal, close it
// // window.onclick = function(event) {
// //   if (event.target == modal) {
// //     productEditForm.style.display = "none";
// //   }
// // }
// }
