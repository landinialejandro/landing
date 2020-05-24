<?php
include("header.php");
?>
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-12 col-md-6">
        <h1 class="m-0 text-dark">Desarrollo de aplicaciones web optimizadas para dispositivos móviles, más rápido
          y mucho menos costoso.</h1>
      </div>
      <div class="col-12 col-md-6">
        <h1 class="m-0 text-dark">Desarrollado con AppGini, herramienta de <a href="https://bigprof.com/" target="_blank">BigProf</a></h1>
        <p>La plataforma de desarrollo es mundialmente difundida, cuenta con una comunidad de miles de personas en todo el mundo.</p>
        <p>Potenciado con AdminLTE, generando Experiencias de usuarios increíbles!.</p>
      </div>
    </div>
  </div>
</div>
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <?php
        include "products/profile/card.php";
        include "products/wp/card.php";
        include "products/erp_sp/card.php";
        ?>
      </div>
      <div class="col-12 col-md-6">
        <?php
        include "products/snippetsGen/card.php";
        include "products/lat/card.php";
        include "products/mpi/card.php";
        include "products/tnz/card.php";
        ?>
      </div>
    </div>
  </div>
  <?php
  include("footer.php");
  ?>
  <script>
    $(function() {
      $('form').each(function() {
        $(this).validate({
          rules: {
            "tu-negocio-web-mail": {
              required: true,
              email: true
            },
            "sistema-plus-mail": {
              required: true,
              email: true
            }
          },
          messages: {
            "tu-negocio-web-mail": "ingrese un correo valido por favor",
            "sistema-plus-mail": "ingrese un correo valido por favor"
          },
          errorElement: "em",
          errorPlacement: function(error, element) {
            error.addClass("invalid-feedback");
            element.parents(".col-sm-5").addClass("invalid-feedback");
            error.insertAfter(element);
            if (!element.next("span")[0]) {
              $("<span class='fas fa-times invalid-feedback'></span>").insertAfter(element);
            }
          },
          success: function(label, element) {
            $el = $(element);
            if (!$el.next("span")[0]) {
              $("<span class='fas fa-thumbs-up valid-feedback'></span>").insertAfter($el);
            }
          },
          highlight: function(element, errorClass, validClass) {
            $el = $(element);
            $el.addClass("is-invalid").removeClass("is-valid");
            $el.next("span").addClass("fa-times").removeClass("fa-thumbs-up");
          },
          unhighlight: function(element, errorClass, validClass) {
            $el = $(element);
            $el.addClass("is-valid").removeClass("is-invalid");
            $el.next("span").addClass("fa-thumbs-up valid-feedback ").removeClass("fa-times invalid-feedback");
          }
        })
      });
    })
  </script>