window.onload = function () {
  var productEditForm = document.getElementsByClassName("productEditForm");

  // Get the button that opens the modal
  var productEditBtn = document.getElementsByClassName("productEditBtn");

  // Get the <span> element that closes the modal
  var closeEditFormBtn = document.getElementsByClassName("closeEditForm");

  // When the user clicks on the button, open the modal
  for (let i = 0; i < productEditBtn.length; i++) {
    productEditBtn[i].addEventListener("click", () => {
      
      productEditForm[i].style.display = "block";
    });
  }
  // CLOSE EDIT FORM
  for (let i = 0; i < closeEditFormBtn.length; i++) {
    closeEditFormBtn[i].addEventListener("click", () => {
      productEditForm[i].style.display = "none";
    });
  }
  // When the user clicks anywhere outside of the modal, close it
  // window.onclick = function(event) {
  //   if (event.target == modal) {
  //     productEditForm.style.display = "none";
  //   }
  // }
};
