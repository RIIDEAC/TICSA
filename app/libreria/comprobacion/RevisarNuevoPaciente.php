<?php
namespace app\libreria\comprobacion;

return array
(
	'PAC_PATERNO' =>
		array(
			'minimo' => 3,
			'maximo' => 200
		),
	'PAC_NOMBRE' =>
		array(
			'minimo' => 3,
			'maximo' => 200
		),
	'SEX_ID' =>
		array(
			'numero' => true,
			'maximo' => 1
		),
	'PAC_FNACIMIENTO' =>
		array(
			'minimo' => 10,
			'maximo' => 10
		),
	'ENF_ID' =>
		array(
			'minimo' => 1,
			'maximo' => 2,
			'numero' => true
		),
	'NAC_ID' =>
		array(
			'minimo' => 3,
			'maximo' => 3,
			'numero' => true
		),
	'TOKEN' =>
		array(
			'tokenvalido' => true
		)		
);
