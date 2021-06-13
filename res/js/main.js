$(document).ready(() => {


    $(document).on('mouseover', '#jsbutton', function() {

        $('header').addClass('red');
        $('main').addClass('green');
        $('footer').addClass('blue');

    });

    $(document).on('mouseout', '#jsbutton', function() {

        $('header').removeClass('red');
        $('main').removeClass('green');
        $('footer').removeClass('blue');

    });





}); // end ready