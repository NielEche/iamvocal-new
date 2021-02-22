var script = new function (){
  var slider;
  var sliderInit = function(){

    slider = $("ul#hSlider").owlCarousel({
      loop: true,
      
      responsive: {
        0:{
          items: 1
        },
        992:{
          items: 1
        }
      }
    });

    sliderNavigation();
  };


  var sliderNavigation = function(){
    var navItem = $(".slide a");
    navItem.click(function(event){
      if($(this).hasClass("next")){
        slider.trigger("next.owl.carousel");
      }
      else{
        slider.trigger("prev.owl.carousel");
      }
      event.preventDefault();
    });
    snRepositioning();
    $(window).resize(function(){
      snRepositioning();
    });
  };

  var snRepositioning = function(){
    var sliderHeight = $("ul#hSlider").outerHeight();
    var navHeight = $(".slide a").outerHeight();
    var newHeight = (sliderHeight - navHeight) / 2;
    $(".slide").css({top: newHeight+"px"}); 
  };

  this.init = function(){
    sliderInit();
  };
};

$(function(){
  script.init();
});