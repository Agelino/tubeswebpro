document.addEventListener('DOMContentLoaded', function () {
  const username = localStorage.getItem('username');

  if (username) {
      document.querySelectorAll('.displayUsername').forEach((element) => {
          element.textContent = username;
          // alert('hai ' + username +' selamat datang')
      });
      
  } else {
   
       window.location.href = '../php/login.php';
  }
});

document.querySelector('.logoutButton').addEventListener('click', function () {
  console.log(localStorage.getItem('username'));  

  localStorage.removeItem('username');
  alert('Anda telah logout');
  window.location.href = 'login.php';
});



