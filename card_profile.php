 <!-- profile -->
 <div class="col">
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
             <h5 class="description-header"><span class="counter" id="counter-sales" data-elapsetime="8" data-startcountvalue="199" data-endcountvalue="<?php echo $sales; ?>">0</span></h5>
             <span class="description-text">VENTAS</span>
           </div>
           <!-- /.description-block -->
         </div>
         <!-- /.col -->
         <div class="col-sm-4 border-right">
           <div class="description-block">
             <h5 class="description-header"><span class="counter" id="counter-followers" data-elapsetime="8" data-startcountvalue="88" data-endcountvalue="<?php echo $followers; ?>">0</span></h5>
             <span class="description-text">SEGUIDORES</span>
           </div>
           <!-- /.description-block -->
         </div>
         <!-- /.col -->
         <div class="col-sm-4">
           <div class="description-block">
             <h5 class="description-header"><span class="counter" id="counter-productos" data-elapsetime="8" data-startcountvalue="4" data-endcountvalue="<?php echo $products; ?>">0</span></h5>
             <span class="description-text">PRODUCTOS</span>
           </div>
           <!-- /.description-block -->
         </div>
         <!-- /.col -->
       </div>
       <div class="row">
         <div class="col-12">
           <form id="profile" novalidate="novalidate" method="POST" action="thanks.php">
             <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <button type="submit" class="btn btn-default"><i class="fas fa-envelope"></i></button>
               </div>
               <input name="profile-mail" id="profile-mail" type="email" class="form-control" placeholder="Your email">
             </div>
             <div class="offset-sm-2 col-sm-10">
               <div class="g-recaptcha" data-sitekey="<?php echo $captcha_html; ?>"></div>
             </div>
           </form>
         </div>
       </div>
       <!-- /.row -->
     </div>
   </div>
   <!-- /.widget-user -->
 </div>