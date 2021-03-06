  <!-- sistema web -->
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tu Negocio Web!</h5>
        <br>
        <p class="card-text">
          Aplicación desarrollada de facturación para argentina, adaptación personalizada para cada tipo de
          negocio.
          Dedícate a tus negocios, tunegocioweb te hace el resto más fácil. <br>
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
          <div class="offset-sm-2 col-sm-10">
            <div class="g-recaptcha" data-sitekey="<?php echo $captcha_html; ?>"></div>
          </div>
        </form>
      </div>
    </div>
  </div>