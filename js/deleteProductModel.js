// window.onload = function() {
var productDeleteForm = document.getElementsByClassName("productDeleteForm");

// // Get the button that opens the modal
var productDeleteBtn = document.getElementsByClassName("productDeleteBtn");

// // Get the <span> element that closes the modal
var closeProductBtn = document.getElementsByClassName("closeDeleteFormBtn");

// // When the user clicks on the button, open the modal
for (let i = 0; i < productDeleteBtn.length; i++) {
 productDeleteBtn[i].addEventListener('click', ()=> {
        productDeleteForm[i].style.display= "block";
})
}
// }
// When the user clicks on <span> (x), close the modal
for (let i = 0; i < closeProductBtn.length; i++) {
closeProductBtn[i].addEventListener('click', ()=> {
  productDeleteForm[i].style.display = "none";
});
}
// // When the user clicks anywhere outside of the modal, close it
// // window.onclick = function(event) {
// //   if (event.target == modal) {
// //     productEditForm.style.display = "none";
// //   }
// // }
// }   