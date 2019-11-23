<?php
namespace app\modelos\instrumentos;
use \app\modelos\sql\{DBGet,DBResultCount,DBResultFirst};
use \app\libreria\traductor\Formatos;
/**
 * 	PARA IMPLEMENTAR INTRODUCIR LA ID DE LA PRUEBA
 	$this->_entrevista->obtener('EINI_ID');


-> ENTREVISTA 2
 	PRINCIPALCONSUMO 
 	
 	RAZONES DE CONSUMO (SACAR LAS 3 MAS FUERTES)
 	EMOCIONNEGATIVA
 	ENFERMEDAD
 	EMOCIONPOSITIVA
 	NECESIDAD
 	AUTOCONTROL
 	CONFLICTOS
 	AGRADABLES
 	PRESION

-> ENTREVISTA 3
	razones para dejar el consumo 
 	RAZON1
 	RAZON2
 	RAZON3
 */
class CalificarENTREVISTAINICIAL
{
	private $_db,
			$_count,
			$_result,
			$_formato;
	
	public function __construct
	(
		DBGet $DBGet,
		DBResultCount $DBResultCount,
		DBResultFirst $DBResultFirst,
		Formatos $Formatos
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultFirst;
		$this->_formato = $Formatos;
	}

	public function obtener($array)
	{
		$datos[1] = $this->parte2($array[2]);
		$datos[2] = $this->parte3($array[3]);
		$datos[3] = $this->parte8($array[8]);

		return $datos;
	}

	public function parte2($id_parte)
	{
		$datos = $this->partes('DAT_EINICIALII_EINII','EINII_ID',$id_parte);

		$drogaPrincipal = $datos->PRINCIPALCONSUMO;

		$principalConsumo = array(
			'ALCOHOL' => 1,
			'MARIHUANA' => 2,
			'COCAINA' => 3,
			'HEROINA' => 4,
			'METANFETAMINA' => 5,
			'INHALABLES' => 6,
			'ALUCINOGENOS' => 7,
			'DISENO' => 8,
			'ESTIMULANTES' => 9,
			'DEPRESORES' => 10,
			'TABACO' => 11,
			'OTROS' => 12
		);

		$datosdeConsumo = array(
			'FORMA',
			'FRECUENCIA',
			'CANTIDAD',
			'EDAD'
		);

		$resultados['SUSTANCIA'] = [];

		foreach ($principalConsumo as $key => $value)
		{
			if($value = $drogaPrincipal)
			{
				$resultados['SUSTANCIA']['SUSTANCIA'] = $key;

				foreach ($datosdeConsumo as $v)
				{
					$valor = $key.$v;
					if($v == 'FORMA' || $v == 'FRECUENCIA')
					{
						$resultados['SUSTANCIA'][$v] = $this->_formato->obtener($v.'/'.$datos->{$valor}); 
					}
					else
					{
						$resultados['SUSTANCIA'][$v] = $datos->{$valor};
					}	
						
				}
			}
		}

		// RAZONES DE CONSUMO

		$razonesConsumo =  array(
			'EMOCIONNEGATIVA',
		 	'ENFERMEDAD',
		 	'EMOCIONPOSITIVA',
		 	'NECESIDAD',
		 	'AUTOCONTROL',
		 	'CONFLICTOS',
		 	'AGRADABLES',
		 	'PRESION',
		);

		$resultados['RAZONES'] = [];

		foreach ($razonesConsumo as $value)
		{
			for ($i=1; $i < 9 ; $i++)
			{ 
				if($datos->{$value} == $i)
				{
					$resultados['RAZONES'][$value] = [$i];
				}
			}	
		}
				

		return $resultados;
	}

	public function parte3($id_parte)
	{
		$parte3 = $this->partes('DAT_EINICIALIII_EINIII','EINIII_ID',$id_parte);

		$resultados['RAZON'][1] = $parte3->RAZON1;
		$resultados['RAZON'][2] = $parte3->RAZON2;
		$resultados['RAZON'][3] = $parte3->RAZON3;

		return $resultados;
	}

	public function parte8($id_parte)
	{
		$datos = $this->partes('DAT_EINICIALVIII_EINVIII','EINVIII_ID',$id_parte);

		$comprobarMolestia = array(
			'FISICA' => array(
				'RITMO',
				'CIRCULACION',
				'INSUFICIENCIA',
				'INFARTO',
				'VARICES',
				'OTROFISICA',
				'DESNUTRICION',
				'DIABETES',
				'GASTRITIS',
				'HEPATITIS',
				'HIGADO',
				'ULCERAS',
				'ACIDO',
				'CIRROSIS',
				'PANCREATITIS',
				'APETITO',
				'OTRONUTRICION',
				'ALUCINACION',
				'INSOMNIO',
				'LAGUNAS',
				'CONVULSIONES',
				'DELIRIOS',
				'VISUALES',
				'CAMINAR',
				'TEMBLOR',
				'MOTORA',
				'COMA',
				'GOLP',
				'CAIDAS',
				'CONFUSION',
				'CONFABULACION',
				'ACCIDENTECE',
				'OTROSACCIDENTES',
				'DESCALCIFICACION',
				'FRACTURAS',
				'DIENTES',
				'OTROSHUESOS',
				'ENFISEMA',
				'TOS',
				'NEUMONIA',
				'TB',
				'OTROSPULMON',
				'IDEASCONFUSAS',
				'ATENCION',
				'CONCENTRAR',
				'MEMORIA',
				'DECICIONES',
				'OTROSPENSAMIENTO',			

			),
			'EMOCIONAL' => array(
				'CULPA',
				'DEPRESION',
				'DESESPERACION',
				'IDEASUICIDA',
				'INSEGURIDAD',
				'INTENTOSUICIDA',
				'IRRITABLE',
				'DRASTICO',
				'TEMOR',
				'AFECTAR',
				'OTROSANIMO',

			),
			'RELACIONES' => array(
				'AISLAR',
				'CORRERLO',
				'MENTIRAS',
				'CONFIANZA',
				'PERDERAMIGO',
				'COMUNICACION',
				'OTROSOCIAL',

			),
			'FAMILIARES' => array(
				'DIVORCIO',
				'RUPTURA',
				'SEPARACION',
				'SINCASA',
			),
			'LABORAL' => array(
				'ACCIDENTES',
				'AUSENTISMO',
				'PUESTO',
				'DESPIDO',
				'DESEMPLEO',
				'PROBCOM',
				'PROBSUP',
				'RETARDOS',
				'SUSPENSION',
				'NOPAGO',
			),	
			'ESCOLAR' => array(
				'EXPULSION',
				'INASISTENCIA',
				'REPROBAR',
				'MATERIA',
				'ERETARDO',
				'OTROSESCUELA',
			),
			'LEGAL' => array(
				'DEMANDA',
				'HOMI',
				'INTENTOH',
				'DETENCIONES',
				'ENCARCELAMIENTO',
				'ARMAS',
				'ROBOS',
				'TRANSPORTE',
				'OTROSLEY'
			),
			'ECONOMICO' => array(
				'DEUDAS',
				'GASTO',
				'EMPE',
				'PRESTAMO',
				'OTROSECONOMIA'

			),
			'SOCIALES' => array(
				'AGRESION',
				'PELEA',
				'GRITOS',
				'LESIONES',
				'GOLPES',
				'INSULTOS',
				'ROMPER',
				'OTROSAGREDIR'
			)
		);

		$resultados['MOLESTIA'] = [];

		foreach ($comprobarMolestia as $key => $value)
		{
			foreach ($value as $k => $v)
			{
				if($datos->{$v} == 2)
				{
					$resultados['MOLESTIA'][$v] = $this->_formato->obtener('MOLESTIA/'.$datos->{$v.'MOLESTIA'});
				}
			}
		}

		return $resultados;
	}

	public function partes($table,$field,$id_parte)
	{
		$datos = $this->_db->get(
			array(
			'table' => $table, 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array($field,'=',$id_parte),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_count->getCount($datos) !==0)
		{
			//SI HAY DATOS
			return $this->_result->getFirstObj($datos);	
		}

		return false;
	}
}