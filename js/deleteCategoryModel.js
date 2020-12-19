// window.onload = function() {
var categoryDeleteForm = document.getElementsByClassName(
  "categoryDeleteForm"
);

// // Get the button that opens the modal
var categoryDeleteBtn = document.getElementsByClassName(
  "categoryDeleteBtn"
);

// // Get the <span> element that closes the modal
var closeCategoryBtn = document.getElementsByClassName(
  "closeDeleteCategoryFormBtn"
);

// // When the user clicks on the button, open the modal
for (let i = 0; i < categoryDeleteBtn.length; i++) {
  categoryDeleteBtn[i].addEventListener("click", () => {
    categoryDeleteForm[i].style.display = "block";
  });
}
// }
// When the user clicks on <span> (x), close the modal
for (let i = 0; i < closeCategoryBtn.length; i++) {
  closeCategoryBtn[i].addEventListener("click", () => {
    categoryDeleteForm[i].style.display = "none";
  });
}
// // When the user clicks anywhere outside of the modal, close it
// // window.onclick = function(event) {
// //   if (event.target == modal) {
// //     productEditForm.style.display = "none";
// //   }
// // }
// }
