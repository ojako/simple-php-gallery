$(document).ready(function(){
		$('.lb').nivoLightbox({
		    effect: 'fade',                             // The effect to use when showing the lightbox
			theme: 'default',                           // The lightbox theme to use
			keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
			clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
			onInit: function(){},                       // Callback when lightbox has loaded
			beforeShowLightbox: function(){},           // Callback before the lightbox is shown
			afterShowLightbox: function(lightbox){},    // Callback after the lightbox is shown
			beforeHideLightbox: function(){},           // Callback before the lightbox is hidden
			afterHideLightbox: function(){},            // Callback after the lightbox is hidden
			onPrev: function(element){},                // Callback when the lightbox gallery goes to previous item
			onNext: function(element){},                // Callback when the lightbox gallery goes to next item
			errorMessage: 'The requested content cannot be loaded. Please despair and turn to God.' // Error message when content can't be loaded	
		});
	});
	/*
	$(window).resize(function() {
		var viewportWidth = $( window ).width();
		console.log("resize: " + viewportWidth);
		//$(".container").css("width", viewportWidth-200);
		console.log($(".container").css('width'));;
	});
	*/
	$(function() {
	   	$("img.lazy").lazyload({
	   		threshold : 0,
		    effect : "fadeIn"
		});
	   });
	/*
	randomize images 
	http://james.padolsey.com/javascript/shuffling-the-dom/ 
	shuffles all elements
	*/
	/*
	 $.fn.shuffle = function() {
 
        var allElems = this.get(),
            getRandom = function(max) {
                return Math.floor(Math.random() * max);
            },
            shuffled = $.map(allElems, function(){
                var random = getRandom(allElems.length),
                    randEl = $(allElems[random]).clone(true)[0];
                allElems.splice(random, 1);
                return randEl;
           });
 
        this.each(function(i){
            $(this).replaceWith($(shuffled[i]));
        });
 
        return $(shuffled);
 
    };
    $('ul.g li').shuffle();
    */
    

    /*on appear effects and animations*/
    /*
		$('img').onScreen({
		   container: window,
		   direction: 'vertical',
		   doIn: function() {
		     // Do something to the matched elements as they come in
		     TweenLite.from(this, 1.5, {scaleX: 0, scaleY: 0});
		   },
		   doOut: function() {
		     // Do something to the matched elements as they get off scren
		   },
		   tolerance: 0,
		   throttle: 50,
		   toggleClass: 'onScreen',
		   lazyAttr: 'data-source',
		   lazyPlaceholder: 'someImage.jpg',
		   debug: false
		});
	});
	*/