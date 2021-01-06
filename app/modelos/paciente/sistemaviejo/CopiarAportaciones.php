<?php
namespace app\modelos\paciente\sistemaviejo;
use \app\modelos\sql\{DBResultCount,DBResultObj,DBGet,DBInsert};
use \app\modelos\paciente\DatosNotaDeIngresoSinRl;

/**
 * 
 */
class CopiarAportaciones
{
	private $_db,
			$_result,
			$_count,
			$_insert,
			$_paciente;
	
	public function __construct
	(
		DBResultObj $DBResultObj,
		DBGet $DBGet,
		DBResultCount $DBResultCount,
		DBInsert $DBInsert,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl
		
	)
	{
		$this->_db = $DBGet;
		$this->_result = $DBResultObj;
		$this->_count = $DBResultCount;
		$this->_insert = $DBInsert;
		$this->_paciente = $DatosNotaDeIngresoSinRl;
		
	}

	public function obtener(): void
	{
		$sis = $this->_db->get(
			array(
				'table' => 'DAT_SISTEMAVIEJO_SIV'
			),
			array('*')
		);

		if($this->_count->getCount($sis) !== 0)
		{
			$sis = $this->_result->getObj($sis);

			foreach ($sis as $value)
			{
				$datos = $this->_db->get(
					array(
					'table' => 'donaciones_ua',
					'where' => array('idexp','=',$value->SIV_ID)
					), 
					array(
					'*'
					),
					array(
		            'host' => '127.0.0.1',
		            'dbname' => 'aman_admin',
		            'dbuser' => 'root',
		            'dbpass' => '',
		            )
				);
				
				if($this->_count->getCount($datos) !== 0)
				{
					$donaciones = $this->_result->getObj($datos);

					//INSERTAR EN EL NUEVO SISTEMA

					foreach ($donaciones as $donacion)
					{
						//TRASLADAR DATOS Y CLAVES
						$ins = array();

						$ins['NING_ID'] = $value->NING_ID;
						$ins['USU_ID'] = $_SESSION['id'];
						$ins['PAC_ID'] = $this->_paciente->obtener($value->NING_ID)->PAC_ID;
						$ins['APORTA'] = $donacion->aporta;
						$ins['CANTIDAD'] = $donacion->cantidad;

						if($donacion->moneda == 'pesos')
						{
							$ins['TIM_ID'] = 1;
						}
						else
						{
							$ins['TIM_ID'] = 2;
							$ins['TIPO_CAMBIO'] = 19;
						}

						if($donacion->efectivodescripcion == 'Aportacion periodica')
						{
							$ins['TIA_ID'] = 1;
						}
						if($donacion->efectivodescripcion == 'Aportacion primer semestre')
						{
							$ins['TIA_ID'] = 2;	
						}
						if($donacion->efectivodescripcion == 'Taller plastilina')
						{
							$ins['TIA_ID'] = 99;
						}
						if($donacion->efectivodescripcion == 'Revision medica')
						{
							$ins['TIA_ID'] = 3;
						}
						if($donacion->efectivodescripcion == 'Revisión psiquiatrica')
						{
							$ins['TIA_ID'] = 4;
						}
						if($donacion->efectivodescripcion == 'Revisión psicológica')
						{
							$ins['TIA_ID'] = 5;
						}
						if($donacion->efectivodescripcion == 'Medicamento')
						{
							$ins['TIA_ID'] = 13;
						}
						if($donacion->efectivodescripcion == 'Gastos del usuario(a)')
						{
							$ins['TIA_ID'] = 11;
						}
						if($donacion->efectivodescripcion == 'Examen laboratorio')
						{
							$ins['TIA_ID'] = 9;
						}
						if($donacion->efectivodescripcion == 'Especial')
						{
							$ins['TIA_ID'] = 99;
						}
						if($donacion->efectivodescripcion == 'Aportacion traslado')
						{
							$ins['TIA_ID'] = 12;
						}
						if($donacion->efectivodescripcion == 'Curso sensiblizacion')
						{
							$ins['TIA_ID'] = 99;
						}
						
						$ins['FECHA_REGISTRO'] = Date("Y-m-d",$donacion->fecha);

						//print_r($ins);

						$this->_insert->registrar('DAT_APORTACION_APO',$ins);
					}

				}
			}
		}
	}	
}