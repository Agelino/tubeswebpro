const button = document.getElementById("button");

button.addEventListener("click", function () {
  alert("akun sudah dibuat dan anda akan langsung dialihkan ke halaman login");
  window.location.href = 'login.php';
});
