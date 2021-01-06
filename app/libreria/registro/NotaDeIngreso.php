<?php
return array
(
	'PAC_ID' =>
		array(
			'minimo' => 1,
			'numero' => true
		),
	'TII_ID' =>
		array(
			'minimo' => 1,
			'maximo' => 1,
			'numero' => true
		),
	'PAC_FINGRESO' =>
		array(
			'minimo' => 10,
			'maximo' => 10
		),
	'PAC_HINGRESO' =>
		array(
			'maximo' => 5
		),
	'ESC_ID' =>
		array(
			'minimo' => 1,
			'maximo' => 1,
			'numero' => true
		),
	'ESC_ID' =>
	array(
		'minimo' => 1,
		'maximo' => 1,
		'numero' => true
	),
	'OCU_ID' =>
		array(
			'minimo' => 1,
			'maximo' => 1,
			'numero' => true
		),
	'COP_ID' =>
		array(
			'minimo' => 4,
			'maximo' => 5,
			'numero' => true,
			'existe' => 'CAT_CODIGOPOSTAL_COP',
			),		
	'TOKEN' =>
		array(
			'token' => true
		)		
);
