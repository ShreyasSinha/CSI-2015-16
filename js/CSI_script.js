var top_menu_height =0;
var height=60;
function visitor_visible(){
    setInterval(function(){ 
    $('#visitor_email').fadeIn(500).removeClass("hiding");
   $('#CSI-about-menu').addClass("hiding");
     }, 20000);

    
}
jQuery(function($) {
        $(document).ready( function() {
            visitor_visible();
            // load google map
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
            'callback=initialize';
        document.body.appendChild(script);

        top_menu_height = $('.CSI-about-menu').height();
        // scroll spy to auto active the nav item
        $('body').scrollspy({ target: '#CSI-nav-bar', offset: top_menu_height+10 });



        // scroll to top
        $('#btn-back-to-top').click(function(e){
            e.preventDefault();
            scrollTo('#CSI-about');
        });

        // scroll to specific id when click on menu
        $('.CSI-about-menu .navbar-nav a').click(function(e){
            e.preventDefault(); 
            var linkId = $(this).attr('href');
            scrollTo(linkId);
            if($('.navbar-toggle').is(":visible") == true){
                $('.navbar-collapse').collapse('toggle');
            }
            $(this).blur();
            return false;
        });

        // to stick navbar on top
        $('.CSI-about-menu ').stickUp();

        // gallery category
        $('.CSI-gallery-category a').click(function(e){
            e.preventDefault(); 
            $(this).parent().children('a').removeClass('active');
            $(this).addClass('active');
            var linkClass = $(this).attr('href');
            $('.gallery').each(function(){
                if($(this).is(":visible") == true){
                   $(this).hide();
                };
            });
            $(linkClass).fadeIn();  
        });

        //gallery light box setup
        $('a.colorbox').colorbox({
                                    rel: function(){
                                        return $(this).data('group');

                                    }
        });
    });
});

function initialize() {
    var mapOptions = {
      zoom: 16,
      center: new google.maps.LatLng(28.7501986,77.1166573)
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions);
}

// scroll animation 
function scrollTo(selectors)
{

    if(!$(selectors).size()) return;
    var selector_top = $(selectors).offset().top +height - top_menu_height ;
    $('html,body').animate({ scrollTop: selector_top }, 'slow');

}