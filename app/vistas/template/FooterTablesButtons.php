<footer class="container mt-5">
  <p>&copy; <?php echo date("Y"); ?></p>
</footer>
</main><!-- /.container -->
</div>
</div>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/DataTables/datatables.min.js"></script>

<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/DataTables/Buttons-1.6.5/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/DataTables/jzip.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/DataTables/pdfmake.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/DataTables/vfs_fonts.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/DataTables/Buttons-1.6.5/js/buttons.html5.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/DataTables/Buttons-1.6.5/js/buttons.colVis.min.js"></script>

<script src="<?php echo $this->_config->obtener('app/webbase'); ?>js/iconos.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>js/main.js"></script>
<script>
$(document).ready(function() {
    $('Table').DataTable( {
    	
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5 ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5 ]
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5 ]
                }
            }            
        ]
    } );
} );
</script>
</body>
</html>