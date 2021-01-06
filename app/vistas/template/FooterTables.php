<footer class="container mt-5">
  <p>&copy; <?php echo date("Y"); ?></p>
</footer>
</main><!-- /.container -->
</div>
</div>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/DataTables/datatables.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>js/iconos.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>js/main.js"></script>
<script>
$(document).ready(function() {
    $('Table').DataTable();
} );
</script>
</body>
</html>