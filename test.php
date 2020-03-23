<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <input name="valor" id="sales" value="3801">
    <h3>+<span class="counter" id="counter-lat" data-endvalue="3801">0</span> visitas!</h3>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
    include("footer.php");
    ?>
    <script>
 (function ($) {
    var defaults = {
        callback: function () { },
        runOnLoad: true,
        frequency: 100,
        previousVisibility : null
    };

    var methods = {};
    methods.checkVisibility = function (element, options) {
            if (jQuery.contains(document, element[0])) {
                var previousVisibility = options.previousVisibility;
                var isVisible = methods.isInScreen(element);
                options.previousVisibility = isVisible;
                var initialLoad = previousVisibility === null;

                if (initialLoad) {

                    //el elelmento está visible y es la primera vez qeu se ejecuta!

                    if (options.runOnLoad) {
                        //llama a la función callback
                        options.callback(element, isVisible, initialLoad);
                    }
                } else if (previousVisibility !== isVisible) {
                    options.callback(element, isVisible, initialLoad);
                }

                setTimeout(function() {
                    methods.checkVisibility(element, options);
                }, options.frequency);

            }
        }
        methods.isInScreen = function (e) {

            var estaEnPantalla = false;
            var posicionElemento = e.get(0).getBoundingClientRect();
            if (posicionElemento.top >= 0 && posicionElemento.left >= 0 &&
                posicionElemento.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                posicionElemento.right <= (window.innerWidth || document.documentElement.clientWidth)) {
                estaEnPantalla = true;
            }
            return estaEnPantalla;
            //    return true;
        }

    $.fn.visibilityChanged = function (options) {
        var settings = $.extend({}, defaults, options);
        return this.each(function () {
            methods.checkVisibility($(this), settings);
        });
    };
})(jQuery);



        // $.fn
        //     .extend({
        //         visible: function() {
        //             return estaEnPantalla($(this))
        //         },
        //         mcounter: function(){
        //             var h = $(this);
        //             h.hide();
        //             h.wrap('<span class="counter" id="counter-'+ h.attr('id') +'" data-endvalue="'+h.val()+'">0</span>');
        //         },
        //         anterior: function(){
        //             return estaEnPantalla($(this))
        //         }
        //     });
        
        // function estaEnPantalla(e) {
        //     var estaEnPantalla = false;
        //     var posicionElemento = e.get(0).getBoundingClientRect();
        //     if (posicionElemento.top >= 0 && posicionElemento.left >= 0 &&
        //         posicionElemento.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        //         posicionElemento.right <= (window.innerWidth || document.documentElement.clientWidth)) {
        //         estaEnPantalla = true;
        //     }
        //     return estaEnPantalla;
        // }

        function count(objeto) {
            //https://www.bufa.es/javascript-contador-numerico-con-animacion/
            var contador = objeto.data('endvalue');
            var counter = {
                var: contador / 1.008
            };
            TweenMax.to(counter, 4, {
                var: contador,
                onUpdate: function() {
                    var number = Math.ceil(counter.var);
                    objeto.html(number);
                    if (number === counter.var) {
                        return;
                    }
                },
                ease: Circ.easeOut
            });
        }

        //$('#sales').mcounter();
        $("#sales").visibilityChanged({
            callback: function(element, visible, initialLoad) {
                // do something
                //var o = $(this);
                //count(o);
                console.log("visible?");
            }
        });
        // $(document).on('scroll click load resize', function() {
        //     $(".counter").each(function() { 
        //         var o = $(this);
        //         if (o.visible()) {
        //             count(o);
        //         }
        //     })
        // });
        $(function(){
            $("#sales").visibilityChanged();
        })
    </script>