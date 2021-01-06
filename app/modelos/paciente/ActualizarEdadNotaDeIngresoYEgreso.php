<?php 
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultObj,DBResultFirst,DBUpdate};
use \DateTime;

class ActualizarEdadNotaDeIngresoYEgreso
{
	private $_db,
			$_count,
			$_result,
			$_update;
	
	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj,
		DBUpdate $DBUpdate,
		DBResultFirst $DBResultFirst
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;
		$this->_update = $DBUpdate;
		$this->_first = $DBResultFirst;	
	}

	public function actualizar($id_paciente, $fecha_nacimiento):void
	{
		$dato = $this->_db->get(
		array(
		'table' => 'DAT_NINGRESO_NING', 
		//'limit' => '', 
		//'orderby' => '', 
		//'order' => '', 
		'where' => array('PAC_ID','=',$id_paciente),
		//'and' => array('', '', '')
		), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($dato) !== 0)
		{
			$notas = $this->_result->getObj($dato);

			foreach ($notas as $value)
			{
				$cumpleanos = new DateTime($fecha_nacimiento);
			    $fechaingreso = new DateTime($value->PAC_FINGRESO);
			    $annos = $fechaingreso->diff($cumpleanos);
			    $fecha = [];
			    $fecha['PAC_EDAD'] = $annos->y;
			    //Actualizar edad nota de ingreso
				$this->_update->update(
					array(
						'TABLE' => 'DAT_NINGRESO_NING',
						'SET' => $fecha,
						'WHERE' => array('NING_ID','=',$value->NING_ID)
					)
				);

				//BUSCAR NOTA DE EGRESO
				$egreso = $this->_db->get(
				array(
				'table' => 'DAT_NEGRESO_NEGR', 
				//'limit' => '', 
				//'orderby' => '', 
				//'order' => '', 
				'where' => array('NING_ID','=',$value->NING_ID),
				//'and' => array('', '', '')
				), 
				array(
					'*'
					)
				);

				if($this->_count->getCount($egreso) !== 0)
				{
					$egreso = $this->_first->getFirstObj($egreso);

					$cumpleanos = new DateTime($fecha_nacimiento);
				    $hoy = new DateTime($egreso->PAC_FEGRESO);
				    $annos = $hoy->diff($cumpleanos);
				    $datosegreso = [];
				    $datosegreso['EDAD_EGRE'] = $annos->y;

				    $this->_update->update(
						array(
							'TABLE' => 'DAT_NEGRESO_NEGR',
							'SET' => $datosegreso,
							'WHERE' => array('NEGR_ID','=',$egreso->NEGR_ID)
						)
					);
				}

			}
		}
	}
}

