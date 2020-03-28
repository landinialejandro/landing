<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>last Version 4000</h1>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <input name="valor" id="sales" value="3801">
    <br><br><br><br><br>
    <h3>+<span class="counter" id="counter-lat" data-endcountvalue="3801">0</span> visitas!</h3>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
            <strong> Potenciado por: <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </div>
        Anything you want
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script>
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
            }
            $.fn.visibilityChanged = function(options) {
                return this.each(function() {
                    var $this = $(this);
                    var settings = $.extend({}, defaults,$this.data(), options);
                    methods.checkVisibility($this, settings);
                });
            }
            $.fn.mcounter = function(options) { //make counter as constructor, take the element and replace this with a span tag
                var settings = $.extend({}, defaults, options);
                var res = [];
                $.each(options, function(k,v){
                    res.push(`data-${k}="${v}"`);
                })
                $(this).hide().wrap(`<span class="counter" ${res.join(' ')}>0</span>`);
            }
        })(jQuery);

        $(function() {
            $('#sales').mcounter({
                endcountvalue: 4002,
                startcountvalue: 3995,
                elapsetime:8
            });
            $('.counter').visibilityChanged({
                callback: function(element, visible, initialLoad) {
                    // do something
                    console.log("visible?: " + visible);
                }
            });
        })
    </script>
</body>

</html>