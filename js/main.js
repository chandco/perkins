(function() { 
    $.fn.exists = function(callback) {
    var args = [].slice.call(arguments, 1);

    if (this.length) {
    callback.call(this, args);
    }

    return this;
    };


})(jQuery);


jQuery(function($) { 

    $("#navigation-dropdown").click(function(e) {
        e.preventDefault();
        $("#menu-container").toggleClass("closed");
        $("#navigation-dropdown i").toggleClass('fa-bars').toggleClass('fa-caret-up');
       
    });


    // fix for broken iphones
    function iOSversion() {
      if (/iP(hone|od|ad)/.test(navigator.platform)) {
        // supports iOS 2.0 and later: <http://bit.ly/TJjs1V>
        var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
        return [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];
      } else {
        return false; // not on IOS
      }
    }
    ver = iOSversion();
    console.log(ver);
    if(1) { //ver[0] < 8 && ver[0]){

        console.log('ios version below 8');

        $("body.home #main-header").css( 'height', ( 0.88 * 800 ) );
        $("body.home #menu-container").css('min-height',( 0.12 * 800 ));

        $("body:not(.home) #main-header").css('height', '400px');
        $("body:not(.home) #header").css('height', '200px').css("top",'60px');
        $("body:not(.home) #menu-container").css('min-height','80px');

        function iosVhHeightBug() {

            $("body.home #main-header").css( 'height', ( 0.88 * 800 ) );
            $("body.home #menu-container").css('min-height',( 0.12 * 800 ));

            $("body:not(.home) #main-header").css('height', '400px');
            $("body:not(.home) #header").css('height', '200px').css("top",'60px');
            $("body:not(.home) #menu-container").css('min-height','80px');
        }

        iosVhHeightBug();
        $(window).bind('resize', iosVhHeightBug);

    }  


    var popup = {
        gallery : {
                    type:'image', 
                    delegate: 'a', 
                    gallery:
                        {
                            enabled:true
                        },// gallery:{
                    removalDelay: 300,
                    mainClass: 'mfp-fade'  

                },


        clients : {
                    type:'inline', 
                    delegate: 'li', 
                    gallery:
                        {
                            enabled:true
                        },// gallery:{
                    removalDelay: 300,
                    mainClass: 'mfp-fade',
                    midClick: true
                },

        under500cal : {
            type:'inline', 
            gallery : {
                enabled:true
                },// gallery:{
            mainClass: 'mfp-fade',
        }



    }




    // load gallery scripts if there is a gallery.

    $('div.gallery').exists(function() {
         $(this).magnificPopup(popup.gallery);
    });

    $('ul.clients-gallery.popup').exists(function() {
         $(this).magnificPopup(popup.clients);
    });


    var cycleOptions = {

    slides  : '> li',
    fx      : 'fade',
    delay   : 5000,

    }

    var $slides = $('#carousel-slides').cycle(cycleOptions);



    $('#prev-btn').click(function(e) {
        e.preventDefault();
       $slides.cycle('prev');
    });

    $('#next-btn').click(function(e) {
        e.preventDefault();
        $slides.cycle('next');
    });

    var delayCycleResize = (function () {
      var timers = {};
      return function (callback, ms, uniqueId) {
        if (!uniqueId) {
          uniqueId = "Don't call this twice without a uniqueId";
        }
        if (timers[uniqueId]) {
          clearTimeout (timers[uniqueId]);
        }
        timers[uniqueId] = setTimeout(callback, ms);
      };
    })();


    $(window).resize( function() {
         delayCycleResize(function(){
            //console.log("resize finished");
              $slides.cycle('destroy').cycle(cycleOptions).cycle('resume');
              
                }, 500, "cycleResizeDelay");
            //console.log("resize event");
        
    } );


})