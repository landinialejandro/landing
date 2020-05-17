    <div class="col-md-4 involve-panel">
      <?php
      if (!isset($sales)) $sales = false;
      if ($sales) {
        include("sales_panel.php");
      } else {
        include("free_panel.php");
      }
      ?>
    </div>
  </div>
</body>
<script>
  $(function() {
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

</html>