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
        <p>La plataforma de desarrollo es mundialmente difundida, cualquiera de las miles de personas de la
          comunidad puede seguir perfectamente su proyecto.</p>
      </div><!-- /.col -->

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="">
          <!-- Widget: user widget style 1 -->
          <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-info">
              <h3 class="widget-user-username">Alejandro Landini</h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle elevation-2" src="dist/img/Face.png" alt="User Avatar">
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
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tu Negocio Web!</h5>
            <br>
            <p class="card-text">
              Aplicación desarrollada de facturación para argentina, adpatación personalizada para cada tipo de
              negocio.
              Vos dedicate a tus negocios, tunegocioweb te hace el resto más fácil. <br>
              Facturación online, control de inventario, de clientes, de proveedores, o simplemente facturas lo
              que necesites.
              Totalmente desarrollada con AppGini.
            </p>
          </div>
          <div class="card-footer">
            <form id="tu-negocio-web" action="thanks.php" novalidate="novalidate" method="POST">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-default"><i class="fas fa-envelope"></i></button>
                </div>
                <!-- /btn-group -->
                <input name="tu-negocio-web-mail" id="tu-negocio-web-mail" type="email" class="form-control" placeholder="Email">
              </div>
            </form>
          </div>
        </div>

        <div class="card card-primary card-outline">
          <div class="card-body">
            <h5 class="card-title">Sistema Plus!</h5>
            <br>
            <p class="card-text">
              Sistema propietario, desarrollado para medianas empresas, gestión de presupuesto, pedido de
              compras, control de inventario.
              Gestión de documentos, recibos, cobranzas. <br>
              <i class="fas fa-star text-warning"></i> Versión disponible para laboratorios de metrología y
              centros de calibración de instrumentos.
            </p>
          </div>
          <div class="card-footer">
            <form id = "sistema-plus" novalidate="novalidate" method="POST" action ="thanks.php">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                <button type="submit" class="btn btn-default"><i class="fas fa-envelope"></i></button>
                </div>
                <input name="sistema-plus-mail" id="sistema-plus-mail" type="email" class="form-control" placeholder="Email">
              </div>
            </form>
          </div>
        </div><!-- /.card -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-lg-6">
        <div class="card card-primary">
          <div class="card-header">
            <h5 class="card-title m-0">Landini Admin Template</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title">Herramienta para desarrolladores</h6>

            <p class="card-text">Diseñada para desarrolladores de AppGini, <strong>plugin ready</strong>, practicamente sin
              codificar nada, instale, active el plugin y disfrute!</p>

            <h3>+<span class="counter" id="counter-lat" data-startcountvalue="3600" data-endcountvalue="3801">0</span> visitas!</h3>
            <div class="col-sm-12">
              <a href="products/lat/img/forum.PNG?text=1" data-toggle="lightbox" data-title="AppGini Forum" data-gallery="gallery">
                <img src="products/lat/img/forum.PNG" class="img-fluid mb-2" alt="forum">
              </a>
            </div>
          </div>
          <div class="card-footer">
            <a class="btn btn-app float-left bg-indigo" href="products/lat/index.php">
              <i class="fas fa-plus"></i> Información
            </a>
            <a class="btn btn-app float-right" href="https://github.com/myappgini/lteadmin">
              <i class="fab fa-github"></i> GitHub
            </a>
          </div>
        </div>

        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="card-title m-0">Membership profile image</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title">Herramienta para desarrolladores</h6>

            <p class="card-text">Integre, a sus sistemas creado en AppGini, la posibilidad de mostrar en la barra
              del menú una imagen del usuario. <br>
              Totalmente configurable y actualizable desde la ventana del perfil de
              usuario, agregue valor a sus aplicaciones. <br>
              Plugin ready, instale, active el plugin y disfrute!</p>
            <h3>+<span class="counter" id="counter-mpi" data-startcountvalue="4000" data-endcountvalue="4258">0</span> visitas!</h3>
            <div class="col-sm-12">
              <a href="products/mpi/img/forum.PNG?text=1" data-toggle="lightbox" data-title="AppGini Forum" data-gallery="gallery">
                <img src="products/mpi/img/forum.PNG" class="img-fluid mb-2" alt="forum">
              </a>
            </div>
          </div>
          <div class="card-footer">
            <a class="btn btn-app float-left bg-indigo" href="products/mpi/index.php">
              <i class="fas fa-plus"></i> Información
            </a>
            <a class="btn btn-app float-right" href="https://github.com/myappgini/mpi">
              <i class="fab fa-github"></i> GitHub
            </a>
          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
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