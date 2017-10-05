
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var Gallery = require('./gallery');

// Using the module pattern for a jQuery feature

var Home = (function() {
  var body = $(".view-home");
  var links = $("[data-behavior~=anchor-link]");
  var cover = $(".cover");

  var init = function() {
    $(window).on("load", coverFadeOut);
    if (body.length > 0) { scrollDown(); }
  }

  var coverFadeOut = function() {
    cover.fadeOut(1000, function() {
      $(this).remove();
    });
  }

  var scrollDown = function() {
    links.click(animateScroll);
  }

  var animateScroll = function(event) {
    if ($(this.hash)) {
      $("html, body").animate({
        scrollTop: $(this.hash).offset().top
      }, 500);
    }
  };

  return {
    init: init,
  };
})();

Home.init();
Gallery.init();
