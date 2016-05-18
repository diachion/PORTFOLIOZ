// ------------ affix the navbar after scroll below header ------------
    $(".index .navbar").affix({
      offset: {
        top: $("header").outerHeight(true)
      } 
    });

// ------------ scroll down ------------
    $("a.smooth-scroll").click(function(){
      $("html, body").animate({
          scrollTop: $( $.attr(this, "href") ).offset().top+2
      }, 500);
      return false;
    });

// ------------ scroll down tooltip ------------
    $(".down-arrow").tooltip();

// ------------ carousel ------------
    $(".webapps").click(function(){
      $(".carousel").carousel(0);
    });

    $(".uiux").click(function(){
      $(".carousel").carousel(1);
    });

    $(".designs").click(function(){
      $(".carousel").carousel(2);
    });

// form validation
$(function () {
  $('#form').parsley().on('field:validated', function() {
     console.log("Validating");
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    $("#submit").addClass("processing");
    return true;
  });
});

// Fancy underline stuff
$("input").focus(function() { $(this).prev().addClass("focus"); });
$("input").blur(function() { $(this).prev().removeClass("focus"); });

$("textarea").focus(function() { $(this).prev().addClass("focus"); });
$("textarea").blur(function() { $(this).prev().removeClass("focus"); });