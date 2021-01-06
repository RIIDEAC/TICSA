<?php
namespace app\modelos\sql;
use \app\modelos\sql\DB;
use \app\modelos\sql\DBResultCount;
/*
	PARA IMPLEMENTAR
	array(
		'TABLE' => 'test',
		'SET' => array(
			'testfield' => 6,
			'testf' => 6,
		),
		'WHERE' => array('test_id','=',1)
	)

	DEVUELVE EL NUMERO DE FILAS AFECTADAS CON COUNTROW O FALSE SI ES 0
*/
class DBUpdate
{
	private $_db,
			$_result;

	public function __construct
	(
		DB $DB,
		DBResultCount $DBResultCount
	)
	{
		$this->_db = $DB;
		$this->_result = $DBResultCount;
	}
       /**
+        * @param (array|string)[] $where
+        */
	public function update(array $where = array())
	{
		$this->_table = $where['TABLE'];
		$this->_set = $where['SET'];
		$this->_where = $where['WHERE'];

		$where = $this->_where[0]. ' '. $this->_where[1]. ' ?';

		$set = "";
		$values = [];

		foreach ($this->_set as $key => $value)
		{
			$set = $set. ' ' .$key. ' = ?,';
			array_push($values, $value);
		}

		array_push($values, $this->_where[2]);

		$this->_set = trim($set, ',');

		$sql = "UPDATE {$this->_table} SET {$this->_set} WHERE {$where}";

		return $this->_result->getCount($this->_db->query
		(
			array
			(
				'sql' => $sql,
				'values' => $values
			)
		));
	}
}