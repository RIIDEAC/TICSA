	</main><!-- /.container -->
	<footer class="footer">
      <div class="container">
        <span class="text-muted"><strong>TICSA</strong> es una aplicación de <a href="<?php echo $this->_config->obtener('app/webauthor'); ?>" target="_blank"><?php echo $this->_config->obtener('app/webauthor'); ?></a></span>
      </div>
    </footer>
<script>
$(function() {
  // ------------------------------------------------------- //
  // Multi Level dropdowns
  // ------------------------------------------------------ //
  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
    event.preventDefault();
    event.stopPropagation();

    $(this).siblings().toggleClass("show");


    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });

  });
});
// ------------------------------------------------------- //
  // Bootstrap Select - Picker
  // ------------------------------------------------------ //
$('select').selectpicker();
</script>
</body>
</html>