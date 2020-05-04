jQuery("#feature_carousel").owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: true,
    margin: 20,
    rows: 2,
    /*
   animateOut: 'fadeOut',
   animateIn: 'fadeIn',
   */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },

        600: {
            items: 3
        },
        1024: {
            items: 4
        },

        1366: {
            items: 4
        }
    }
});


jQuery("#news_carousel").owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: true,
    margin: 20,
    rows: 2,
    /*
   animateOut: 'fadeOut',
   animateIn: 'fadeIn',
   */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },

        600: {
            items: 3
        },
        1024: {
            items: 4
        },

        1366: {
            items: 4
        }
    }
});