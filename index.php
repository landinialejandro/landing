<?php
include("header.php");
?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Desarrollo de aplicaciones web optimizadas para dispositivos móviles, más rápido
          y mucho menos costoso.</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Basado AppGini, herramienta de desarrollo de <a href="https://bigprof.com/" target="_blank">BigProf</a></h1>
        <p>La plataforma de desarrollo es mundialmente difundida, cuenta con una comunidad de las miles de personas en todo el mundo.</p>
      </div><!-- /.col -->

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <!-- profile -->
      <div class="col-lg-6">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-info">
            <h3 class="widget-user-username">Alejandro Landini</h3>
            <h5 class="widget-user-desc">Founder &amp; CEO</h5>
          </div>
          <div class="widget-user-image">
            <img class="img-circle elevation-2" src="dist/dist_L/logo/Face.png" alt="User Avatar">
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header"><span class="counter" id="counter-sales" data-elapsetime="8" data-startcountvalue="199" data-endcountvalue="122">0</span></h5>
                  <span class="description-text">VENTAS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header"><span class="counter" id="counter-followers" data-elapsetime="8" data-startcountvalue="88" data-endcountvalue="96">0</span></h5>
                  <span class="description-text">SEGUIDORES</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header"><span class="counter" id="counter-productos" data-elapsetime="8" data-startcountvalue="4" data-endcountvalue="7">0</span></h5>
                  <span class="description-text">PRODUCTOS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
      <?php 
      include "products/snippetsGen/card.php";
      include "products/lat/card.php";
      include "products/erp_sp/card.php";
      include "products/tnz/card.php";
      include "products/mpi/card.php";
      ?>
      <!-- /.row -->
    </div><!-- /.container -->
  </div>
  <!-- /.content -->
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