<?php
namespace app\libreria\comprobacion;

return array
(
	'USU_CORREO' =>
		array(
			'correo' => true,
			'minimo' => 8,
			'maximo' => 100
		),
	'USU_PASS' =>
		array(
			'minimo' => 8,
			'maximo' => 20,
			'password' => 'USU_CORREO'
		),
	'TOKEN' =>
		array(
			'tokenvalido' => true
		)		
);
