
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(window).on('load', function () {
  $('.cover').fadeOut(1000, function() {
    $(this).remove();
  });
});

$(document).on('click', '[data-behavior~=anchor-link]', function (event) {
  if(window.location.hash) {
    $('html, body').animate({
      scrollTop: $(this.hash).offset().top
    }, 500);
  }
});
