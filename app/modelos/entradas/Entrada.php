<?php
namespace app\modelos\entradas;
/**
 * 
 */
class Entrada
{
	public function existe()
	{
		if(!empty($_POST))
		{
			return true;
		}

		return false;
	}
}