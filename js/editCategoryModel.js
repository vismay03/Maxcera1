// window.onload = function () {
var categoryEditForm = document.getElementsByClassName(
  "categoryEditForm"
);

//   // Get the button that opens the modal
var categoryEditBtn = document.getElementsByClassName("categoryEditBtn");

//   // Get the <span> element that closes the modal
var closeCategoryEditFormBtn = document.getElementsByClassName(
  "closeCategoryEditFormBtn"
);

//   // When the user clicks on the button, open the modal
for (let i = 0; i < categoryEditBtn.length; i++) {
  categoryEditBtn[i].addEventListener("click", () => {
    categoryEditForm[i].style.display = "block";
  });
}
//   // CLOSE EDIT FORM
for (let i = 0; i < closeCategoryEditFormBtn.length; i++) {
  closeCategoryEditFormBtn[i].addEventListener("click", () => {
    categoryEditForm[i].style.display = "none";
  });
}
//   // When the user clicks anywhere outside of the modal, close it
//   // window.onclick = function(event) {
//   //   if (event.target == modal) {
//   //     productEditForm.style.display = "none";
//   //   }
//   // }
// };
