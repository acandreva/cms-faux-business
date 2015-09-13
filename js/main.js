$(document).ready( function () {

//HEADER/NAV 
    var header = document.querySelector("#header");

    new Headroom(header, {
      tolerance: {
        down : 2,
        up : 5
      },
      offset : 100,
      classes: {
        initial: "slide",
        pinned: "slide--reset",
        unpinned: "slide--up"
      }
    }).init();

//BACKSTRETCH
    $('.home-slideshow').backstretch([
      "http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/images/car-dealership.jpg"
    , "http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/images/handshake2.jpg"
    , "http://www.allisoncandreva.com/wp_2/wp-content/themes/slicks-template-allisonlogan/images/mechanic4.jpg"
  ], {duration: 4000, fade: 750});
});