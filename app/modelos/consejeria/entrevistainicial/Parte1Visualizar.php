<?php
namespace app\modelos\consejeria\entrevistainicial;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
/**
 * 
 */
class Parte1Visualizar
{
	private $_db,
			$_count,
			$_result,
			$_entrevista;
	
	public function __construct
	(
		DBGet $DBGet,
		DBResultCount $DBResultCount,
		DBResultFirst $DBResultFirst
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
	}

	public function obtener($id)
	{
		$datos = $this->_db->get(
		array(
			'table' => 'DAT_EINICIALI_EINI', 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('EINI_ID','=',$id),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			$this->_entrevista = $this->_result->getFirstObj($datos);

			return (object) array(
				'SALARIO' => $this->salario(),
				'EMPLEO' => $this->empleo(),
				'DESEMPLEADO' => $this->desempleado(),
				'DEPENDE' => $this->depende(),
				'DEPENDIENTES' => $this->dependientes(),
				'VIVE' => $this->viveCon(),
				'PAREJA' => $this->pareja()
			);
		}
	}

	public function salario()
	{
		return $this->_entrevista->SALARIO;
	}

	public function empleo()
	{
		if($this->_entrevista->EMPLEO == '1')
		{
			return $this->_entrevista->EMPLEO.' mes';
		}

		return $this->_entrevista->EMPLEO.' meses';
	}

	public function desempleado()
	{
		if($this->_entrevista->DESEMPLEADO == '1')
		{
			return 'Sí: hace '.$this->tiempoDesempleado().' meses';
		}

		return 'No';
	}

	public function tiempoDesempleado()
	{
		return $this->_entrevista->TIEMPODESEMPLEADO;
	}

	public function depende()
	{
		if($this->_entrevista->DEPENDE == '1')
		{
			return 'Sí: de '.$this->dependeDE();
		}

		return 'No';
	}

	public function dependeDE()
	{
		$array = ['DEPENDEPAREJA' => 'pareja','DEPENDEHIJOS' => 'hijos','DEPENDEPADRES' => 'madre o padre','DEPENDEFAMILIA' => 'familiares o amigos'];
		
		$depende = '';

		foreach ($array as $key => $value)
		{
			

			if($this->_entrevista->{$key} == '1')
			{
				$depende = $depende.', '.$value;	
			}
		}	

		return trim($depende, ', ');
	}

	public function dependientes()
	{
		if($this->_entrevista->DEPENDIENTES == '1')
		{
			return 'Sí: '.$this->dependientesDE();
		}

		return 'No';
	}

	public function dependientesDE()
	{
		$array = ['DEPENDIENTESPAREJA' => 'pareja','DEPENDIENTESHIJOS' => 'hijos','DEPENDIENTESPADRES' => 'madre o padre','DEPENDIENTESFAMILIA' => 'familiares o amigos'];
		
		$depende = '';

		foreach ($array as $key => $value)
		{
			

			if($this->_entrevista->{$key} == '1')
			{
				$depende = $depende.', '.$value;	
			}
		}	

		return trim($depende, ', ');
	}

	public function viveCon()
	{
		$array = ['VIVEPAREJA' => 'pareja','VIVEHIJOS' => 'hijos','VIVEPADRES' => 'madre o padre','VIVEFAMILIA' => 'familiares o amigos'];
		
		$depende = '';

		foreach ($array as $key => $value)
		{
			

			if($this->_entrevista->{$key} == '1')
			{
				$depende = $depende.', '.$value;	
			}
		}

		if(strlen($depende) > 4)
		{
			return trim($depende, ', ');
		}

		return 'Solo';		
	}

	public function pareja()
	{
		if($this->_entrevista->PAREJA == '1')
		{
			return 'Sí: '.$this->tiempoRelacion();
		}

		return 'No';
	}

	public function tiempoRelacion()
	{
		if($this->_entrevista->TIEMPORELACION == '1')
		{
			return $this->_entrevista->TIEMPORELACION. ' mes';
		}

		return $this->_entrevista->TIEMPORELACION. ' meses';
	}


}