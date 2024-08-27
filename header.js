jQuery(function($) {
  function setHeaderHeights() {
    var commonHeaderHeight = $("header").outerHeight();
    $("#hb-menu").css("padding-top", commonHeaderHeight + "px");
  }

  $(window).on('resize', function() {
    setHeaderHeights();
  });
  setHeaderHeights();
  $('#openbtn').on('click', function() {
    $(this).toggleClass('active'); 
    $('#hb-menu').toggleClass('active', $(this).hasClass('active')); 
    if ($(this).hasClass('active')) {
      $('#openbtn .hamburger-lines').addClass('active');
      $('#openbtn .hamburger-lines .line:nth-child(1)').css('width', '60%'); 
      $('#openbtn .hamburger-lines .line:nth-child(2)').css('width', '60%'); 
      setTimeout(function() {
        
        $('#openbtn .hamburger-lines .line:nth-child(1)').css('bottom', '0').css('transform', 'rotate(45deg)');
        $('#openbtn .hamburger-lines .line:nth-child(2)').css('top', '0').css('transform', 'rotate(-45deg)');
      }, 300); 
    } else {
    
      $('#openbtn .hamburger-lines .line:nth-child(1)').css('transform', 'rotate(0deg)').css('bottom', 'auto');
      $('#openbtn .hamburger-lines .line:nth-child(2)').css('transform', 'rotate(0deg)').css('top', 'auto'); 
      setTimeout(function() {
        $('#openbtn .hamburger-lines .line:nth-child(1)').css('width', '100%');
        $('#openbtn .hamburger-lines .line:nth-child(2)').css('width', '100%'); 
        $('#openbtn .hamburger-lines').removeClass('active'); 
      }, 300); 
    }
  });
});