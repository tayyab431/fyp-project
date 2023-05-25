


function onclickMenu(){
    document.getElementById("menu").classList.toggle("icon");
    document.getElementById("navigation").classList.toggle("change");
  
}

//slider script//

var counter = 1;
setInterval(function(){
document.getElementById('radio' + counter).checked = true;
counter++;


if (counter > 6){
    counter = 1;}
}, 5000);



//slider 2 script//
$('.slick-carousel').slick({
    infinite: true,
    slidesToShow: 5, // Shows a three slides at a time
    slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
    arrows: true, // Adds arrows to sides of slider
    dots: false,
    autoplay: true,
    responsive: [
      {
        breakpoint: 988,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
     ], // Adds the dots on the bottom
  });



  //slider 3 script//
$('.grid-slider').slick({
    infinite: true,
    slidesToShow: 3, // Shows a three slides at a time
    slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
    arrows: false,                  // Adds arrows to sides of slider
    autoplay: true,
    dots: true, // Adds the dots on the bottom
    
    responsive: [
      {
        breakpoint: 1022,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
     
    ],

  });



  $('.slick-clients').slick({
    infinite: true,
    slidesToShow: 1, // Shows a three slides at a time
    slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
    arrows: true,                  // Adds arrows to sides of slider
    autoplay: true,
    dots: false, // Adds the dots on the bottom
    
    responsive: [
      {
        breakpoint: 1022,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
     
    ],

  });


  