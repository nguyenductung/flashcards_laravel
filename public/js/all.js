$(function(){
  var percentage = 0;
  // Init scroll animation
  $(window).scroll(function() {
    // Scrolling Top
    if ($(this).scrollTop() > 100) {
      $('#back-to-top').removeClass('hide');
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
    // Scrolling Progress Bar
    var scrollY = $(window).scrollTop();
    var documentHeight = $(document).height();
    var windowHeight = $(window).height();
    var maxScroll = documentHeight - windowHeight;
    percentage = (scrollY / maxScroll) * 100;
    $('#scrolling-progress-bar').width(percentage + '%');
  });

  // Scroll body to top
  $('#back-to-top').click(function() {
    $('body,html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
});
