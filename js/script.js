(function ($) {
    $(document).ready(function () {
        $('.block-Project__slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            // items: 1,
            // merge: true,
            // loop: true,
            // margin: 25,
            // video: true,
            // dots: false,
            // nav:true,
            // lazyLoad: true,
            // center: true,
            // // navText: ["<img src='/images/project/seeAll.svg' />","<img src='/images/project/seeAll.svg' />"],
            // responsive: {
            //     320: {
            //         items: 1
            //     },
            //     499: {
            //         items: 2
            //     },
            //     992: {
            //         items: 2
            //     }
            // }
        });
    });
})(jQuery);