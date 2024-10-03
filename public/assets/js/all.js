jQuery(document).ready(function ($) {
    if (is.ie(11)) {
        jQuery('body').addClass('ie11');
    }
    $('.home_slider').owlCarousel({
        items: 1,
        nav: true,
        autoplay: true,
        rtl: false,
        dots: false,
        loop: true,
        //animateOut: 'fadeOut',

        //responsive:{0:{items: 1,margin:0}, 769:{items: 2,margin:20,}, },
    });

    $(window).resize(function () {
        $('.owl-carousel').trigger('refresh.owl.carousel');
    });

    $('.testimonial_slider').owlCarousel({
        items: 1,
        nav: false,
        autoplay: true,
        rtl: false,
        dots: true,
        loop: true,
        //animateOut: 'fadeOut',
        //responsive:{0:{items: 1,margin:0}, 769:{items: 2,margin:20,}, },
    });

    $(".accordion_tab").click(function () {
        $(".accordion_tab").each(function () {
            $(this).parent().removeClass("active");
            $(this).removeClass("active");
        });
        $(this).parent().addClass("active");
        $(this).addClass("active");
    });
    /*
            * Super lightbox
            */
    if ($('.superLightBox').length) {
        $('.superLightBox').superLightBox();
    }

    /*
     * Gallery page sortable
     */
    if ($('.gallery-filter').length) {
        $('.gallery-filter').imagesLoaded(function () {
            $('.gallery-filter .gallery-list').isotope({
                itemSelector: '.gallery-item',
            });

            $('.gallery-tab-menu a').on('click', function (event) {
                event.preventDefault();
                var a = $(this);
                $('.gallery-tab-menu > li').removeClass('active');
                a.parent().addClass('active');
                var filter = a.data('filter');
                $('.gallery-filter .gallery-list').isotope({
                    filter: filter,
                });
            });
        });
    }
    /*
     * tab
     */
    $('ul.tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })
});
