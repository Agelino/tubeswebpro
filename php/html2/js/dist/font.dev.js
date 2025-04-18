"use strict";

var slider = document.getElementById('font-slider');
var content = document.getElementById('content');
slider.addEventListener('input', function () {
  var fontSize = slider.value; // Mendapatkan nilai slider

  content.style.fontSize = "".concat(fontSize, "px"); // Mengubah ukuran font
});
//# sourceMappingURL=font.dev.js.map
