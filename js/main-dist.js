!function(){$.fn.exists=function(e){var n=[].slice.call(arguments,1);return this.length&&e.call(this,n),this}}(jQuery),jQuery(function(e){function n(){if(/iP(hone|od|ad)/.test(navigator.platform)){var e=navigator.appVersion.match(/OS (\d+)_(\d+)_?(\d+)?/);return[parseInt(e[1],10),parseInt(e[2],10),parseInt(e[3]||0,10)]}return!1}function i(){var n=e(window).height();e("body.home #main-header").css("height",n)}e("#navigation-dropdown").click(function(n){n.preventDefault(),e("#menu-container").toggleClass("closed"),e("#navigation-dropdown i").toggleClass("fa-bars").toggleClass("fa-caret-up")}),ver=n(),console.log(ver),ver[0]<8&&ver[0]&&(console.log("ios version below 8"),e("body.home #main-header").css("height",e(window).height()),e("body:not(.home) #main-header").css("height","400px"),e("body:not(.home) #header").css("height","200px").css("top","60px"),i(),e(window).bind("resize",i));var a={gallery:{type:"image",delegate:"a",gallery:{enabled:!0},removalDelay:300,mainClass:"mfp-fade"},clients:{type:"inline",delegate:"li",gallery:{enabled:!0},removalDelay:300,mainClass:"mfp-fade",midClick:!0},under500cal:{type:"inline",gallery:{enabled:!0},mainClass:"mfp-fade"}};e("div.gallery").exists(function(){e(this).magnificPopup(a.gallery)}),e("ul.clients-gallery.popup").exists(function(){e(this).magnificPopup(a.clients)});var t={slides:"> li",fx:"fade",delay:5e3},l=e("#carousel-slides").cycle(t);e("#prev-btn").click(function(e){e.preventDefault(),l.cycle("prev")}),e("#next-btn").click(function(e){e.preventDefault(),l.cycle("next")});var o=function(){var e={};return function(n,i,a){a||(a="Don't call this twice without a uniqueId"),e[a]&&clearTimeout(e[a]),e[a]=setTimeout(n,i)}}();e(window).resize(function(){o(function(){l.cycle("destroy").cycle(t).cycle("resume")},500,"cycleResizeDelay")})});
//# sourceMappingURL=main-dist.js.map