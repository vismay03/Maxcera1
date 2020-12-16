// window.onload = function() {
var subcategoryDeleteForm = document.getElementsByClassName("subcategoryDeleteForm");

// // Get the button that opens the modal
var subcategoryDeleteBtn = document.getElementsByClassName("subcategoryDeleteBtn");

// // Get the <span> element that closes the modal
var closeSubcategoryBtn = document.getElementsByClassName("closeDeleteSubcategoryFormBtn");

// // When the user clicks on the button, open the modal
for (let i = 0; i < subcategoryDeleteBtn.length; i++) {
  subcategoryDeleteBtn[i].addEventListener("click", () => {
    subcategoryDeleteForm[i].style.display = "block";
  });
}
// }
// When the user clicks on <span> (x), close the modal
for (let i = 0; i < closeSubcategoryBtn.length; i++) {
  closeSubcategoryBtn[i].addEventListener("click", () => {
    subcategoryDeleteForm[i].style.display = "none";
  });
}
// // When the user clicks anywhere outside of the modal, close it
// // window.onclick = function(event) {
// //   if (event.target == modal) {
// //     productEditForm.style.display = "none";
// //   }
// // }
// }
