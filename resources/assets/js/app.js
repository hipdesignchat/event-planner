require('./bootstrap');
const flatpickr = require('flatpickr');

window.onload = function() {
  flatpickr('.flatpickr',{
    enableTime: true,
    altInput: true
  });
}
