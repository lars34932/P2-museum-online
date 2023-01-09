// kijken of pagina geladen is
window.addEventListener("load", () => {

  // var gemaakt hoever gescrolled is
  let lastKnownScrollPosition = 0;

  const header = document.querySelector("#header");

  const headerHeight = header.clientHeight;

  // kijken of er gescrolled word
  document.addEventListener("scroll", () => {

    // var aanpassen naar scroll punt
    lastKnownScrollPosition = window.scrollY;

    if (headerHeight <= lastKnownScrollPosition) {
      header.classList.add("header--fixed");
    }

    else {
      header.classList.remove("header--fixed");
    }

    console.log(lastKnownScrollPosition);
  });


});


// FOTO SLIDER STUFF


jQuery(document).ready(function ($) {
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});

