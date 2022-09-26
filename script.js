document.getElementById('file-upload').addEventListener('change', event => {
  let file = event.target.files[0];

  let reader = new FileReader();

  reader.onload = (evt) => {
    console.log(evt.target.result);
  };

  // Read in the image file as a data URL.
  console.log(reader.readAsDataURL(file));
});
