const dialog = document.querySelector("dialog");
const showButton = document.querySelector(".btn_open");
const closeButton = document.querySelector(".btn_close");

// "Show the dialog" button opens the dialog modally
showButton.addEventListener("click", () => {
  dialog.showModal();
});

// "Close" button closes the dialog
closeButton.addEventListener("click", () => {
  dialog.close();
});