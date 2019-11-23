<?php
namespace app\libreria\comprobacion;

return array
(
	'PAC_ID' =>
		array(
			'minimo' => 1,
			'numero' => true
		),
	'RESPONSABLE_ID' =>
		array(
			'minimo' => 1,
			'numero' => true
		),	
	'TIC_TIPO' =>
		array(
			'minimo' => 1,
			'maximo' => 2,
			'numero' => true
		),
	'TIC_ESTADO' => 
		array(
			'minimo' => 1,
			'maximo' => 1,
			'numero' => true
		),
	'TIC_OBSERVACIONES' =>
		array(
			'minimo' => 0,
			'maximo' => 255
		),	
	'TOKEN' =>
		array(
			'tokenvalido' => true
		)		
);
