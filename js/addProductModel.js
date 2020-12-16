// window.onload = function() {
var productAddForm = document.getElementById("productAddForm");

// // Get the button that opens the modal
var productAddBtn = document.getElementById("productAddBtn");
// // Get the <span> element that closes the modal
var closeProductBtn = document.getElementById("closeAddFormBtn");

// // When the user clicks on the button, open the modal

 productAddBtn.onclick = ()=> {
        productAddForm.style.display= "block";
}

// }
// When the user clicks on <span> (x), close the modal

closeProductBtn.onclick = ()=> {
  console.log('66');
  productAddForm.style.display = "none";
};

// // When the user clicks anywhere outside of the modal, close it
// // window.onclick = function(event) {
// //   if (event.target == modal) {
// //     productEditForm.style.display = "none";
// //   }
// // }
// }   