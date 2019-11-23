<?php
namespace app\modelos\pacientes;

class CrearICURPFamiliar
{
	public function crear( $array = array())
	{
		$data['PAC_ID'] = $array['PAC_ID'];
		$data['FAM_NOMBRE'] = $array['FAM_NOMBRE'];
		$data['FAM_PATERNO'] = $array['FAM_PATERNO'];
		$data['FAM_MATERNO'] = $array['FAM_MATERNO'];
		$data['SEX_ID'] = $array['SEX_ID'];
		$data['FAM_FNACIMIENTO'] = $array['FAM_FNACIMIENTO'];
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