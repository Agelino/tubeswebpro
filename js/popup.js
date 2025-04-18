document.getElementById('bookImage-1').addEventListener('click', function() {
    document.getElementById('popup').classList.add('active');
    });
    document.getElementById('bookImage-2').addEventListener('click', function() {
    document.getElementById('popup-2').classList.add('active');
    });
    document.getElementById('bookImage-3').addEventListener('click', function() {
    document.getElementById('popup-3').classList.add('active');
    });
    document.getElementById('bookImage-4').addEventListener('click', function() {
    document.getElementById('popup-4').classList.add('active');
    });
    document.getElementById('bookImage-5').addEventListener('click', function() {
    document.getElementById('popup-5').classList.add('active');
    });
    document.getElementById('bookImage-6').addEventListener('click', function() {
    document.getElementById('popup-6').classList.add('active');
    });
    document.getElementById('bookImage-7').addEventListener('click', function() {
    document.getElementById('popup-7').classList.add('active');
    });
    document.getElementById('bookImage-8').addEventListener('click', function() {
    document.getElementById('popup-8').classList.add('active');
    });
    document.getElementById('bookImage-9').addEventListener('click', function() {
    document.getElementById('popup-9').classList.add('active');
    });
    document.getElementById('bookImage-10').addEventListener('click', function() {
    document.getElementById('popup-10').classList.add('active');
    });
    document.getElementById('bookImage-11').addEventListener('click', function() {
    document.getElementById('popup-11').classList.add('active');
    });
    document.getElementById('bookImage-12').addEventListener('click', function() {
    document.getElementById('popup-12').classList.add('active');
    });


    
    var closeButtons = document.querySelectorAll('.close-btn');
    closeButtons.forEach(function(button) {
    button.addEventListener('click', function() {
    button.closest('.popup-overlay').classList.remove('active');
    });
    });
    
      