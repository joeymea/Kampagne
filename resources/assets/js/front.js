$(document).ready(function(e) {
    var video_wrapper = $('.youtube-placeholder');
//  Check to see if youtube wrapper exists
    if(video_wrapper.length){
// If user clicks on the video wrapper load the video.
        $('.youtube-placeholder').on('click', function(){
            /* Dynamically inject the iframe on demand of the user.
             Pull the youtube url from the data attribute on the wrapper element. */
            let html = '<div class="embed-responsive embed-responsive-16by9">' +
                '<div class="youtube-video embed-responsive-item" data-src="' + $(this).data('yt-url') + '">' +
                    '<iframe class="embed-responsive-item" src="' + $(this).data('yt-url') + '" data-src="' + $(this).data('yt-url') + '" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' +
                '</div>' +
            '</div>';

            //console.log('html', html);
            $(this).hide().after(html);
        });
    }


    /*$('[data-toggle="dropdown"]').on('click', function(e) {
        e.preventDefault();
        let sub = $(this).next('.dropdown-menu');
        if (sub.hasClass('show')) {
            sub.removeClass('show');
        } else {
            sub.addClass('show');
        }
    })*/
    initKBScroller();
    initTestimonialSlider();

    $('.faq-dynamic').click(function () {
        $($(this).data('target')).collapse();
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
});

/**
 * Automatically open a kb answer if it's in the anchor
 */
function initKBScroller() {
    if ($('.faq-categories').length === 0) {
        return;
    }

    let hash = window.location.hash;
    if (!hash) {
        return;
    }
    $(hash + '-answer').collapse();
}

function initTestimonialSlider() {
    if ($('#testimonials').length === 0) {
        return;
    }
    return;

    $('#testimonials .items').slick({
        dots: true,
        infinite: true,
        autoplay: false,
        speed: 800,
    });
}


require('./community-votes');
