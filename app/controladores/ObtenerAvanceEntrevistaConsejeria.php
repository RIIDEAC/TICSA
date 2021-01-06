<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\paciente\ObtenerAvanceEntrevistaConsejeria as Avance;
use \app\modelos\vista\Vista;
/**
 * 
 */
class ObtenerAvanceEntrevistaConsejeria
{
	private $_post,
			$_avance,
			$_vista;
	
	public function __construct
	(
		Post $Post,
		Avance $Avance,
		Vista $Vista
	)
	{
		$this->_post = $Post;
		$this->_avance = $Avance;
		$this->_vista = $Vista;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if(isset($_POST['NING_ID']) && is_numeric($_POST['NING_ID']))
		{
			if($avance = $this->_avance->obtener($this->_post['NING_ID']))
			{
				foreach ($avance as $key => $value)
				{
					if($value == 0)
					{
						$this->_vista->ver(array('consejeria/EntrevistaInicialParte'.$key));
						die();
					}

				}

				$this->_vista->ver(array('template/FormatoCompleto'));
			}
		}
		else
		{
			//
		}	
		
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			//
		}
	}
}