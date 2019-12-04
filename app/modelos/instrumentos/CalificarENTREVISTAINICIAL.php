<?php
namespace app\modelos\instrumentos;

class CalificarENTREVISTAINICIAL
{
	private $_parte,
			$_datosEntrevista;

	public function obtener(object $array, int $parte)
	{
		$this->_parte = $parte;
		$this->_datosEntrevista = $array;

		echo '<pre>';

		print_r($array);
	}
}