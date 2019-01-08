$(document).ready(function() {

$(window).scroll(function() {

  if ($(window).scrollTop() > 200) { $('#sticky').fadeIn(1000);
  }
  if ($(window).scrollTop() < 200) { $('#sticky').fadeOut(1000);
  }
});
});