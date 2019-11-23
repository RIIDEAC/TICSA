<?php
namespace app\modelos\entradas;
/**
 * 
 */
class LimpiarEntradas
{
	
	public function todas()
	{
		return $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	}

	public function una($entrada)
	{
		return htmlentities($entrada);
	}
}