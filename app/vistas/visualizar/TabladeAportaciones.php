<?php //echo '<pre>'; print_r($datos); ?>
<table id="table" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th style="white-space: nowrap;">#</th>
                <th>Fecha</th>
                <th>Aporta</th>
                <th>Tipo</th>
                <th>Moneda</th>
                <th>Cantidad</th>
                <th>Tipo de cambio</th>
                <th>Total en pesos</th>
            </tr>
        </thead>
        <tbody>
            <?php $x=1; foreach ($datos as $key => $value){ ?>
            <tr>
                <td><?php echo $x; ?></td>
                <td><?php echo $value->FECHA_APORTACION; ?></td>
                <td><?php echo $value->APORTA; ?></td>
                <td><?php echo $value->TIA_MIN; ?></td>
                <td><?php echo $value->TIM_MIN; ?></td>
                <td><?php echo $value->CANTIDAD; ?></td>
                <td><?php echo $value->TIPO_CAMBIO; ?></td>
                <td><?php 
                if($value->TIM_ID == 2){ echo round($value->CANTIDAD * $value->TIPO_CAMBIO,2); }else{
                    echo $value->CANTIDAD; } ?></td>
            </tr>
            <?php $x++; } ?>
        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
<script>
    $(document).ready(function() {
    $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ], 
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

        footerCallback: function ( row, data, start, end, display ) {
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
                .column( 7 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 7, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update DIV

            $( api.column( 7 ).footer() ).html(
                '$'+pageTotal +' ( $'+ total +' total)'
            );
        }
    } );
} );
</script>