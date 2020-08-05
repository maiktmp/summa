$(document).ready(function (e) {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
        animateOut: 'fadeOut'
    })

    var aboutHeader = {
        element: $("#about-header"),
        animated: false
    };

    var aboutCard = {
        element: $("#card-content-about"),
        animated: false
    };

    var servicesHeader = {
        element: $("#services-header"),
        animated: false
    };

    var cardServiceSheet = {
        element: $("#card-sheet"),
        animated: false
    };


    var cardServicePaint = {
        element: $("#card-paint"),
        animated: false
    };


    var cardServiceService = {
        element: $("#card-service"),
        animated: false
    };

    var headerLocation = {
        element: $("#about-location"),
        animated: false
    };


    var headerContact = {
        element: $("#contact-header"),
        animated: false
    };


    $(window).scroll(function () {

        if (aboutHeader.element.isInViewport()) {
            animate(aboutHeader, "slideInLeft")
        } else {

        }

        if (aboutCard.element.isInViewport()) {
            animate(aboutCard, "zoomIn")
        } else {

        }

        if (servicesHeader.element.isInViewport()) {
            animate(servicesHeader, "slideInLeft")
        } else {

        }

        if (cardServiceSheet.element.isInViewport()) {
            animate(cardServiceSheet, "zoomIn")
        } else {

        }

        if (cardServicePaint.element.isInViewport()) {
            animate(cardServicePaint, "zoomIn")
        } else {

        }

        if (cardServiceService.element.isInViewport()) {
            animate(cardServiceService, "zoomIn")
        } else {

        }

        if (headerLocation.element.isInViewport()) {
            animate(headerLocation, "slideInLeft")
        } else {

        }
        if (headerContact.element.isInViewport()) {
            animate(headerContact, "slideInLeft")
        } else {

        }


    });

    function animate(element, animated) {
        if (!element.animated) {
            element.animated = true;
            element.element.addClass(animated).addClass("animated")
        }
    }

    $.fn.isInViewport = function () {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

});
