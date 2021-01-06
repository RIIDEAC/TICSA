<div class="card mt-3">
    <div class="card-body">
    <?php foreach ($datos as $value) { ?>
        <p>Resumen del Convenio:</p>
        Fecha de inicio: <strong><?php echo $value->FECHA_INICIO; ?></strong>
        Fecha de termino: <strong><?php echo $value->FECHA_FINAL; ?></strong>
        Días transcurridos: <strong><?php echo $value->DIAS; ?></strong>
        <br>
        Periodicidad del pago: <strong><?php echo $value->CONVENIO->PER_MIN; ?></strong>
        Cantidad: <strong><?php echo $value->CONVENIO->CANTIDAD; ?> <?php echo $value->CONVENIO->TIM_MIN; ?></strong>
        <br>
        Cantidad de pagos que debería de tener cubiertos: <strong><?php echo $value->PAGOS; ?></strong>
        <br>
        <?php if(isset($value->DIASEXTRAS)){ ?>
            Días extras: <strong><?php echo $value->DIASEXTRAS; ?></strong>
            Cantidad por ajuste: <strong><?php echo $value->TOTALAJUSTE; ?> <?php echo $value->CONVENIO->TIM_MIN; ?></strong>
            <br>
            Total sin ajuste: <strong><?php echo $value->APAGARSINAJUSTE; ?> <?php echo $value->CONVENIO->TIM_MIN; ?></strong><br>
        <?php } ?>
        Total: <strong><?php echo $value->APAGAR; ?> <?php echo $value->CONVENIO->TIM_MIN; ?></strong><br>

        Cantidad que ha pagado: <strong><?php echo $value->PAGADO; ?> <?php echo $value->CONVENIO->TIM_MIN; ?></strong>
        <br>
        <?php if($value->RESTANTE > 0){ ?>
        <div class="alert alert-danger" role="alert">
        Se debe: <strong><?php echo $value->RESTANTE; ?> </strong><?php echo $value->CONVENIO->TIM_MIN; ?>
        </div>
        <?php }else{ ?>
        <div class="alert alert-success" role="alert">
        Saldo a favor de: <strong><?php echo $value->RESTANTE * -1; ?> </strong><?php echo $value->CONVENIO->TIM_MIN; ?>
        </div>
       <?php } ?>
        <hr>                    
    <?php } ?>
    </div>
</div>