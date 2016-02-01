$(document).ready(function(){
  
    /* affix the navbar after scroll below header */
    $(".index .navbar").affix({
      offset: {
        top: $("header").outerHeight(true)
      } 
    });

    // scroll down
    $("a").click(function(){
      $("html, body").animate({
          scrollTop: $( $.attr(this, "href") ).offset().top
      }, 500);
      return false;
    });

    // scroll down tooltip
    $(".down-arrow").tooltip();

}); 