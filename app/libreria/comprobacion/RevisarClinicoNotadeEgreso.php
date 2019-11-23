<?php
namespace app\libreria\comprobacion;

return array
(
	'NING_ID' => array(
		'numero' => true,
		'existe' => 'DAT_NINGRESO_NING'
		),
	'TIE_ID' =>
		array(
			'minimo' => 1,
			'maximo' => 1,
			'numero' => true
		),
	'PAC_FEGRESO' =>
		array(
			'minimo' => 10,
			'maximo' => 10
		),
	'PAC_HEGRESO' =>
		array(
			'minimo' => 5,
			'maximo' => 5
		),
	'CUMPLIO' =>
		array(
			'minimo' => 1,
			'maximo' => 1,
			'numero' => true
		),
	'OBJETIVOS' =>
		array(
			'minimo' => 1,
			'maximo' => 1,
			'numero' => true
		),
	'SESIONES' =>
		array(
			'minimo' => 1,
			'maximo' => 1,
			'numero' => true
		),
	'ABSTINENCIA' =>
		array(
			'minimo' => 1,
			'maximo' => 1,
			'numero' => true
		),
	'SEGUIMIENTO' =>
		array(
			'minimo' => 1,
			'maximo' => 1,
			'numero' => true
		),
	'TOKEN' =>
		array(
			'tokenvalido' => true
		)		
);
