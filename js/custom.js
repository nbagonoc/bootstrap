$(document).ready(function(){
    //$('.carousel-inner').find('.item:first').addClass('active');/*adds active class to the 1st child for banner slider*/

  /*adds hover effect to thumbnails*/
  $('.hover-image').hover(doThis, doThis);
    function doThis(){
    var $this = $(this);
    $this.toggleClass('opacity70');
  }

  /*adds the animation class to trigger animate.css*/
  $('.post-a').addClass("hide-animation").viewportChecker({
      classToAdd: 'view-animation animated fadeIn',
      offset: 150
  });
  $('.post-b').addClass("hide-animation").viewportChecker({
      classToAdd: 'view-animation animated flipInX',
      offset: 150
  });
  $('.post-c').addClass("hide-animation").viewportChecker({
      classToAdd: 'view-animation animated bounceIn',
      offset: 150
  });
  $('.post-d').addClass("hide-animation").viewportChecker({
      classToAdd: 'view-animation animated fadeInUp',
      offset: 150
  });
  $('.post-e').addClass("hide-animation").viewportChecker({
      classToAdd: 'view-animation animated fadeInLeft',
      offset: 150
  });
  $('.post-f').addClass("hide-animation").viewportChecker({
      classToAdd: 'view-animation animated fadeInRight',
      offset: 150
  });

  //fix ie BUG on fixed-background CSS
  if(navigator.userAgent.match(/Trident\/7\./)) { // if IE
    $('body').on("mousewheel", function () {
        // remove default behavior
        event.preventDefault(); 

        //scroll without smoothing
        var wheelDelta = event.wheelDelta;
        var currentScrollPosition = window.pageYOffset;
        window.scrollTo(0, currentScrollPosition - wheelDelta);
    });
  }

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("to-top").style.display = "block";
    } else {
        document.getElementById("to-top").style.display = "none";
    }
}
//scroll to top
$("a[href='#top']").click(function() {
   $("html, body").animate({ scrollTop: 0 }, "slow");
   return false;
});

});