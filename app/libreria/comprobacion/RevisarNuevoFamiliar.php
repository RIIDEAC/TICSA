<?php
namespace app\libreria\comprobacion;

return array
(
	'PAC_ID' =>
		array(
			'minimo' => 1,
			'numero' => true
		),
	'PAE_ID' =>
		array(
			'minimo' => 1,
			'maximo' => 2,
			'numero' => true
		),
	'FAM_PATERNO' =>
		array(
			'minimo' => 3,
			'maximo' => 200
		),
	'FAM_NOMBRE' =>
		array(
			'minimo' => 3,
			'maximo' => 200
		),
	'SEX_ID' =>
		array(
			'numero' => true,
			'maximo' => 1
		),
	'FAM_FNACIMIENTO' =>
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
	'FAM_CALLE' => 
		array(
			'minimo' => 1,
			'maximo' => 255
		),
	'FAM_NEXTERIOR' => 
		array(
			'minimo' => 1,
			'maximo' => 255
		),
	'FAM_NINTERIOR' => 
		array(
			'minimo' => 0,
			'maximo' => 25
		),
	'COP_ID' => 
		array(
			'minimo' => 4,
			'maximo' => 5,
			'numero' => true
		),
	'RPR_ID' => 
		array(
			'minimo' => 1,
			'maximo' => 1,
			'numero' => true
		),
	'FAM_TELEFONOF' => 
		array(
				'minimo' => 10,
				'maximo' => 10,
				'numero' => true,
			),
	'FAM_TELEFONOM' => 
		array(
				'minimo' => 10,
				'maximo' => 10,
				'numero' => true,
			),
	'TOKEN' =>
		array(
			'tokenvalido' => true
		)		
);
