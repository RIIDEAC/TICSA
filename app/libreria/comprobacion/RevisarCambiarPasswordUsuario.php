<?php
return array(
'USU_PASS' => array(
'cambiarpassword' => true
),
'NUSU_PASS' => array(
'minimo' => 8,
'maximo' => 20
),
'RUSU_PASS' => array(
'minimo' => 8,
'maximo' => 20,
'coincide' => 'NUSU_PASS'
),
'TOKEN' => array(
'tokenvalido' => true
)	
);