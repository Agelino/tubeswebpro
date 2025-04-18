const resetButton = document.getElementById("resetButton");
const emailInput = document.getElementById("emailInput");

resetButton.addEventListener("click", function () {
  const email = emailInput.value.trim();
  if (email) {
    alert('Password ini telah direset');
  } else {
    alert("Mohon masukkan email atau nomor telepon!");
  }
});