previewTag = document.querySelector('#preview');
uploader   = document.querySelector('#image');

uploader.onchange = function(e) {
  var reader = new FileReader();
  reader.onloadend = function() {
    previewTag.src = reader.result;
  }
  reader.readAsDataURL(uploader.files[0]);
}
