<?php
namespace app\modelos\consejeria;
/**
 * 
 */
class Componentes
{
	
	public function __construct(argument)
	{
		
	}

	public function plandeVida()
	{
		$objetivoGeneral = 'Que el paciente logre recuperar la orientación o el sentido de su vida';

		$acciones = array(
				'Analizar' => array(
					'que cosas ha logrado, le faltan por realizar o fortalecer en el área social, afectiva, intelectual y psicomotora',
				),
				'Especificar' => array(
					'los propositos (metas) y los objetivos específicos a los que desea llegar en cada una de las áreas'
				)
		);

		$tareas = array(
				'Realizar una reflexión acerca de'
		); 
	}

	public function habilidadesVida()
	{
		$objetivoGeneral = 'Que el paciente adquiera y fortalezca competencias personales y psicosociales básicas'; 
	}

	public function vinculos()
	{

	}

	public function reinsercion()
	{

	}
}