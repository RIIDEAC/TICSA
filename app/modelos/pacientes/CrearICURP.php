<?php
namespace app\modelos\pacientes;

class CrearICURP
{
	public function crear( $array = array())
	{
		$data['PAC_NOMBRE'] = $array['PAC_NOMBRE'];
		$data['PAC_PATERNO'] = $array['PAC_PATERNO'];
		$data['PAC_MATERNO'] = $array['PAC_MATERNO'];
		$data['SEX_ID'] = $array['SEX_ID'];
		$data['PAC_FNACIMIENTO'] = $array['PAC_FNACIMIENTO'];
		$data['ENF_ID'] = $array['ENF_ID'];
		$data['NAC_ID'] = $array['NAC_ID'];

		$iCURP = '';

		foreach ($data as $value)
		{
			$iCURP = $value.$iCURP;
		}

		return md5($iCURP);
	}
}