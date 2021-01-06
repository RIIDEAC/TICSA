<?php
return array(
	'NING_ID' => array(
	'numero' => true,
	'existe' => 'DAT_NINGRESO_NING'
	),
	'APORTA' => array(
	'minimo' => 1,
	'maximo' => 255,	
	),
	'TIA_ID' => array(
	'numero' => true,
	'minimo' => 1,
	'maximo' => 2,
	),
	'CANTIDAD' => array(
	'numero' => true,
	'minimo' => 1,
	'maximo' => 5,
	),
	'TIM_ID' => array(
	'numero' => true,
	'minimo' => 1,
	'maximo' => 1,
	'dependiente' => array(2,'TIPO_CAMBIO'),
	),
	'TOKEN' => array(
	'token' => true
	)
);