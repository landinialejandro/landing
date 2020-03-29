</div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
          <strong> Potenciado por: <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </div>
        Anything you want
      <!-- Default to the left -->
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="dist/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="dist/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
  <script src="dist/plugins/filterizr/jquery.filterizr.min.js"></script>
  <script src="dist/plugins/TweenMax/TweenMax.min.js"></script>
  <script src="dist/plugins/l-makecounter/l-makecounter.min.js"></script>
  

  <script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</body>

</html>