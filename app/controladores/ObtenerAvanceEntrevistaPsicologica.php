<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\paciente\ObtenerAvanceEntrevistaPsicologica as Avance;
use \app\modelos\vista\Vista;
/**
 * 
 */
class ObtenerAvanceEntrevistaPsicologica
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
				if($avance == 1)
				{
					$this->_vista->ver('psicologia/EntrevistaInicialParteUno');
				}
				if($avance == 2)
				{
					$this->_vista->ver('psicologia/EntrevistaInicialParteDos');
				}
			}
			else
			{
				$this->_vista->ver('template/FormatoCompleto');
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