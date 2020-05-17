 <!-- Sistema plus -->
 <div class="col">
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
       <a class="btn btn-app float-left bg-indigo" href="products/erp_sp/index.php">
              <i class="fas fa-plus"></i> Información
            </a>
       <form id="sistema-plus" novalidate="novalidate" method="POST" action="thanks.php">
         <div class="input-group mb-3">
           <div class="input-group-prepend">
             <button type="submit" class="btn btn-default"><i class="fas fa-envelope"></i></button>
           </div>
           <input name="sistema-plus-mail" id="sistema-plus-mail" type="email" class="form-control" placeholder="Email">
         </div>
         <div class="offset-sm-2 col-sm-10">
           <div class="g-recaptcha" data-sitekey="<?php echo $captcha_html; ?>"></div>
         </div>
       </form>
     </div>
   </div><!-- /.card -->
 </div>