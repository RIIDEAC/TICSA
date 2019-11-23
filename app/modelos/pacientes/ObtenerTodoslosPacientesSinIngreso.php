<?php
namespace app\modelos\pacientes;
use \app\modelos\clinico\{TodasLasNotasDeIngreso};
use \app\modelos\pacientes\{ObtenerTodosLosPacientes,NumeroDeNotasDeIngresoPorPaciente,NumeroDeNotasDeEgresoPorPaciente};

class ObtenerTodoslosPacientesSinIngreso
{
	public function __construct
	(
		ObtenerTodosLosPacientes $ObtenerTodosLosPacientes, 
		TodasLasNotasDeIngreso $TodasLasNotasDeIngreso,
		NumeroDeNotasDeIngresoPorPaciente $NumeroDeNotasDeIngresoPorPaciente,
		NumeroDeNotasDeEgresoPorPaciente $NumeroDeNotasDeEgresoPorPaciente
	)
	{
		$this->_pacientes = $ObtenerTodosLosPacientes->obtener();
		$this->_ingresos = $TodasLasNotasDeIngreso->obtener();
		$this->_notaIngreso = $NumeroDeNotasDeIngresoPorPaciente;
		$this->_notaEgreso = $NumeroDeNotasDeEgresoPorPaciente;
		
	}

	public function obtener()
	{
		if(!empty($this->_pacientes))
		{
			if(empty($this->_ingresos))
			{
				return $this->_pacientes;
			}
			else
			{
				$resultados = (object) array();

				foreach ($this->_pacientes as $key => $value)
				{
					if($this->verificarActivos($value->PAC_ID))
					{
						$resultados->{$key} = $value;		
					}
				}

				if(!empty($resultados))
				{
					return $resultados;
				}
			}
		}

		return false;
	}

	public function verificarActivos($idpaciente)
	{
		if($this->_notaIngreso->obtener($idpaciente) === $this->_notaEgreso->obtener($idpaciente))
		{
			return true;
		}

		return false;
	}
}