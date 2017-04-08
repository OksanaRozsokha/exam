jQuery(function($) {
    $(document).ready(function () {

        $(".clients").owlCarousel({
            loop:true,
            margin:10,
            dots: false,
            responsive:{
                0:{
                    items:1

                },
                830:{
                    items: 4
                }
            }
        });

    });
});