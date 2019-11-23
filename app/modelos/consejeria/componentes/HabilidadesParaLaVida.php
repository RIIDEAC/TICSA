<?php
namespace app\modelos\consejeria\componentes;
use \app\modelos\consejeria\componentes\Habilidades;
/**
 * 
 */
class HabilidadesParaLaVida
{
	public $_habilidad,
		   $_accionesEspecificas;
	
	public function __construct(Habilidades $Habilidades)
	{
		$this->_habilidad = $Habilidades;
		$this->_accionesEspecificas = $Estrategias;
	}

	public function obtener($area,$habilidad)
	{
		 $this->{$area}($habilidad);
	}

	public function ObjetivoGeneral()
	{
		return 'Que el paciente adquiera y fortalezca competencias personales y psicosociales básicas';
	}

	public function Pensamiento($habilidad)
	{
		return $this->_habilidad->obtener($habilidad);
	}

	public function Sociales()
	{
		return $this->_habilidad->obtener($habilidad);
	}

	public function ManejoEmociones($habilidad)
	{
		return $this->_habilidad->obtener($habilidad);
	}
}