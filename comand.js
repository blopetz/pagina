document.addEventListener('DOMContentLoaded', function() {
// Carousel Functionality
let index = 0;
const carouselItems = document.querySelectorAll('.carousel-item');
const numItems = carouselItems.length;

function showItem(index) {
  carouselItems.forEach((item, i) => {
    if (i === index) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  });
}

function nextItem() {
  index = (index + 1) % numItems;
  showItem(index);
}

function prevItem() {
  index = (index - 1 + numItems) % numItems;
  showItem(index);
}

document.getElementById('prev-button').addEventListener('click', prevItem);
document.getElementById('next-button').addEventListener('click', nextItem);

showItem(index);
});

//Botones Principales

document.addEventListener("DOMContentLoaded", function() {
  var boton1 = document.getElementById('boton1');
  var boton2 = document.getElementById('boton2');
  var boton3 = document.getElementById('boton3');

  boton1.addEventListener('click', function(e) {
      e.preventDefault();
  });
  boton2.addEventListener('click', function(e) {
      e.preventDefault();
  });
  boton3.addEventListener('click', function(e) {
      e.preventDefault();
  });
});
