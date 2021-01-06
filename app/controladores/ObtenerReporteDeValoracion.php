<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\paciente\{DatosReporteDeValoracion,ObtenerDatosDeFormatosDeSeleccionYPreseleccion};
use \app\modelos\vista\Vista;
/**
 * 
 */
class ObtenerReporteDeValoracion
{
	private $_post,
			$_valoracion,
			$_formatos,
			$_vista;
	
	public function __construct
	(
		Post $Post,
		DatosReporteDeValoracion $DatosReporteDeValoracion,
		ObtenerDatosDeFormatosDeSeleccionYPreseleccion $ObtenerDatosDeFormatosDeSeleccionYPreseleccion,
		Vista $Vista
	)
	{
		$this->_post = $Post;
		$this->_valoracion = $DatosReporteDeValoracion;
		$this->_formatos = $ObtenerDatosDeFormatosDeSeleccionYPreseleccion;
		$this->_vista = $Vista;
		$this->Comprobacion();
	}

	public function Index(): void
	{
		if(isset($_POST['NING_ID']) && is_numeric($_POST['NING_ID']))
		{
			if(!$this->_valoracion->obtener($this->_post['NING_ID']))
			{
				if($formatos = $this->_formatos->obtener($this->_post['NING_ID']))
				{
					$this->_vista->ver('consejeria/ReporteParaLaconsejeria', (object) $formatos);
				}
				else
				{
					//INCOMPLETO
					$this->_vista->ver('template/RegistrosFaltantes');
				}
			}
			else
			{
				//REPORTE INTEGRADO
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