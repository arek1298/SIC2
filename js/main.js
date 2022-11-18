document.querySelector('#pdffFile').addEventListener('change', () => {

    let pdffFile = document.querySelector('#pdffFile').files[0];
    let pdffFileURL = URL.createObjectURL(pdffFile) + "#toolbar=0";

    document.querySelector('#vistaPrevia').setAttribute('src', pdffFileURL);
})
mdb.Alert.getInstance(document.getElementById("alertExample")).update({
  position: "top-right",
  delay: 2000,
  autohide: false,
  width: "600px",
  offset: 20,
  stacking: true,
  appendToBody: true,
});