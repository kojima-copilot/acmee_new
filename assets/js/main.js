console.log("Test from main.js")

$(document).ready(function(){
    $('.office__imgArea').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000
    });
  });