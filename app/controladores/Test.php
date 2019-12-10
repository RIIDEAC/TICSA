<?php
namespace app\controladores;
use \app\modelos\sql\{DB,DBGet,DBResultObj,DBInsert};
use \app\modelos\fechas\CalcularEdadPorFechadeNacimiento;
/**
 * 
 */
class Test
{
	public function __construct
	(
		DB $DB,
		DBGet $DBGet,
		DBResultObj $DBResultObj,
		CalcularEdadPorFechadeNacimiento $CalcularEdadPorFechadeNacimiento,
		DBInsert $DBInsert
	)
	{
		$this->_db = $DB;
		$this->_get = $DBGet;
		$this->_re = $DBResultObj;
		$this->_edad = $CalcularEdadPorFechadeNacimiento;
		$this->_insert = $DBInsert;
	}
	
	public function Index()
	{
		$sql = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'DAT_EINICIALI_EINI'";

		$datos = $this->_db->query(
			array(
				'sql' => $sql
			)
		);

		echo '<pre>';
		$columnas = $this->_re->getObj($datos);

		foreach ($columnas as $key => $value)
		{
			echo "'".$value->COLUMN_NAME."',<br>";
		}



	}
}