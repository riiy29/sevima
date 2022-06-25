(function ($) {
    "use strict";

    // Fixed Top Navbar		
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('#nav-top').addClass('sticky-top');
        } else {
            $('#nav-top').removeClass('sticky-top');
        }
    });

    $(document).ready(function () {
        $('#elearning').DataTable( {
            responsive: true
        } );
    });

})(jQuery);

