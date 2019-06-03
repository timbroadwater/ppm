// Mobile Navigation
$(document).ready(function() {
});

$(function () {
  $("#mobiletoggle").click(function () {
      $("#mobiletoggle .fa-bars").toggleClass("destroy");
      $("#mobiletoggle .fa-times").toggleClass("destroy");
      $("#mobilemenu").slideToggle();
  });
});