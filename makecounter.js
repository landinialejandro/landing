(function($) {
    var defaults = {
        callback: function() {},
        runOnLoad: true,
        frequency: 100,
        previousVisibility: null,
        startcountvalue: 0, //start count value in counter
        endcountvalue: 3000, //end count value in counter
        elapsetime: 4 //in seconds
    };

    var methods = {
        checkVisibility: function(element, options) {
            if (jQuery.contains(document, element[0])) {
                var previousVisibility = options.previousVisibility; 
                var isVisible = methods.isInScreen(element); //get the element visibility
                options.previousVisibility = isVisible; //set the element visibility
                var initialLoad = previousVisibility === null; //check if initial load
                if (initialLoad) {
                    //the element is visible and is the first time in load is user option is true
                    if (options.runOnLoad) {
                        if (isVisible) methods.count(element, options);
                        options.callback(element, isVisible, initialLoad);
                    }
                } else if (previousVisibility !== isVisible) {
                    if (isVisible) methods.count(element, options);
                    options.callback(element, isVisible, initialLoad);
                }
                options.frequency = options.frequency < 100 ? 100 : options.frequency;
                setTimeout(function() {
                    methods.checkVisibility(element, options);
                }, options.frequency);
            }
        },
        isInScreen: function(e) {
            var isOnScreen = false;
            var elementPosition = e.get(0).getBoundingClientRect();
            if (elementPosition.top >= 0 && elementPosition.left >= 0 &&
                elementPosition.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                elementPosition.right <= (window.innerWidth || document.documentElement.clientWidth)) {
                isOnScreen = true;
            }
            return isOnScreen;
        },
        count: function(element, options) {
            var counter = {var: options.startcountvalue };
            TweenMax.to(counter, options.elapsetime, {
                var: options.endcountvalue,
                onUpdate: function() {
                    var number = Math.ceil(counter.var);
                    element.text(number);
                    if (number === counter.var) { return;}
                },
                ease: Circ.easeOut
            });
        }
    };
    $.fn.visibilityChanged = function(options) {
        return this.each(function() {
            var $this = $(this);
            var settings = $.extend({}, defaults,$this.data(), options);
            methods.checkVisibility($this, settings);
        });
    };
    $.fn.mcounter = function(options) { //make counter as constructor, take the element and replace this with a span tag
        var settings = $.extend({}, defaults, options);
        var res = [];
        $.each(options, function(k,v){
            res.push(`data-${k}="${v}"`);
        });
        $(this).hide().wrap(`<span class="counter" ${res.join(' ')}>0</span>`);
    };
})(jQuery);