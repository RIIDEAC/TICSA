<footer class="container mt-5">
  <p>&copy; <?php echo date("Y"); ?></p>
</footer>
</main><!-- /.container -->
</div>
</div>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/snapappointments/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/snapappointments/bootstrap-select/dist/js/i18n/defaults-es_ES.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>vendor/DataTables/datatables.min.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>js/iconos.js"></script>
<script src="<?php echo $this->_config->obtener('app/webbase'); ?>js/main.js"></script>
<script>
$('select').selectpicker(); 
$(document).ready(function() {
    $('#Aportaciones').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },
        
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 5, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 5 ).footer() ).html(
                '$'+pageTotal +' ( $'+ total +' total)'
            );
        }
    } );
} );
</script>
</body>
</html>