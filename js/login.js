document.getElementById('submit').addEventListener('click', function() {
  const username = document.querySelector('.username').value;

  if (username) {
      localStorage.setItem('username', username);
      window.location.href = '../php/index.php';
  } else {
      alert('Harap masukkan username!');
  }
});
