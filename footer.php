    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline">
          <strong> Potenciado por: <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </div>
        Anything you want
    </footer>
  </div>
  <!-- ./wrapper -->

  <script src="dist/plugins/jquery/jquery.min.js"></script>
  <script src="dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="dist/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
  <script src="dist/dist/js/adminlte.min.js"></script>
  <script src="dist/plugins/jquery-validation/jquery.validate.js"></script>
  <script src="dist/plugins/filterizr/jquery.filterizr.min.js"></script>
  <script src="dist/dist_L/plugins/TweenMax/TweenMax.min.js"></script>
  <script src="dist/dist_L/plugins/makecounter/makecounter.min.js"></script>

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