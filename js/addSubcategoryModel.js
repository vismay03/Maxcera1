// window.onload = function() {
var subcategoryAddForm = document.getElementById("subcategoryAddForm");

// // Get the button that opens the modal
var subcategoryAddBtn = document.getElementById("subcategoryAddBtn");
// // Get the <span> element that closes the modal
var closeAddSubcategoryBtn = document.getElementById("closeAddSubcategoryBtn");

// // When the user clicks on the button, open the modal

subcategoryAddBtn.onclick = () => {
  
  subcategoryAddForm.style.display = "block";
};

// }
// When the user clicks on <span> (x), close the modal

closeAddSubcategoryBtn.onclick = () => {
  subcategoryAddForm.style.display = "none";
};

// // When the user clicks anywhere outside of the modal, close it
// // window.onclick = function(event) {
// //   if (event.target == modal) {
// //     productEditForm.style.display = "none";
// //   }
// // }
// }
