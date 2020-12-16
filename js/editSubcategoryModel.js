// window.onload = function () {
  var subcategoryEditForm = document.getElementsByClassName("subcategoryEditForm");

//   // Get the button that opens the modal
  var subcategoryEditBtn = document.getElementsByClassName("subcategoryEditBtn");

//   // Get the <span> element that closes the modal
  var closeSubcategoryEditFormBtn = document.getElementsByClassName("closeSubcategoryEditFormBtn");

//   // When the user clicks on the button, open the modal
  for (let i = 0; i < subcategoryEditBtn.length; i++) {
    subcategoryEditBtn[i].addEventListener("click", () => {
      subcategoryEditForm[i].style.display = "block";
    });
  }
//   // CLOSE EDIT FORM
  for (let i = 0; i < closeSubcategoryEditFormBtn.length; i++) {
    closeSubcategoryEditFormBtn[i].addEventListener("click", () => {
    subcategoryEditForm[i].style.display = "none";
    });
  }
//   // When the user clicks anywhere outside of the modal, close it
//   // window.onclick = function(event) {
//   //   if (event.target == modal) {
//   //     productEditForm.style.display = "none";
//   //   }
//   // }
// };
