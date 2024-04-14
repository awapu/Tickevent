var imageInput = document.getElementById("image-input");
var imagePreview = document.getElementById("image-preview");

imageInput.onchange = function(event) {
  var reader = new FileReader();
  reader.onload = function(e) {
    imagePreview.style.backgroundImage = "url(" + e.target.result + ")";
  }
  reader.readAsDataURL(event.target.files[0]);
}
