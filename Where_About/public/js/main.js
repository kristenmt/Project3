// Targeting with JQurey classes
(function ($) {
    var resultsCard= $('.card'),
        nv = $('.nv'),
        tl = new TimelineLite();

// Time line for targeted classes for animations on results page.
        tl

        .from(resultsCard, 1.1, { autoAlpha: 0,  ease: Bounce.easeOut, y: +400 })
        .from(nv, .5, {x:-70, autoAlpha: 0, ease: Power1.easeOut}, '=.1')
        
        console.log("ran ");
    })(jQuery);



    