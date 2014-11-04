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

    console.log("ehllo");


    // load gallery scripts if there is a gallery.

    $('div.gallery').exists(function() {
         $(this).magnificPopup(popup.gallery);
    });

    $('ul.clients-gallery.popup').exists(function() {
         $(this).magnificPopup(popup.clients);
    });

})