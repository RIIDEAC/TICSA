<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\paciente\{DatosReporteDeValoracion,DatosPlanDeConsejeria};
use \app\modelos\vista\Vista;
/**
 * 
 */
class ObtenerPlanDeConsejeriaIndividual
{
	private $_post,
			$_valoracion,
			$_plan,
			$_vista;
	
	public function __construct
	(
		Post $Post,
		DatosReporteDeValoracion $DatosReporteDeValoracion,
		DatosPlanDeConsejeria $DatosPlanDeConsejeria,
		Vista $Vista
	)
	{
		$this->_post = $Post;
		$this->_valoracion = $DatosReporteDeValoracion;
		$this->_plan = $DatosPlanDeConsejeria;
		$this->_vista = $Vista;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if(isset($_POST['NING_ID']) && is_numeric($_POST['NING_ID']))
		{
			if(!$this->_plan->obtener($_POST['NING_ID']))
			{
				if($valoracion = $this->_valoracion->obtener($this->_post['NING_ID']))
				{
					$this->_vista->ver('consejeria/PlanDeConsejeriaIndividual', (object) $valoracion);
				}
				else
				{
					//INCOMPLETO
					$this->_vista->ver('template/RegistrosFaltantes');
				}
			}
			else
			{
				//COMPLETO
				$this->_vista->ver('template/FormatoCompleto');
			}
			
		}
		else
		{
			// no hay post 
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