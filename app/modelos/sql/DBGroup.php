<?php
namespace app\modelos\sql;
use \pdo;
use \app\modelos\sql\{DB};

class DBGroup 
{
	private $_db;

	public function __construct(DB $DB)
	{
		$this->_db = $DB;
	}
	/*
	PARA IMPLEMENTAR
	array(
		'COUNT_BY',
		'GORUP_BY'
	)
	*/

	public function obtener(string $table, array $fields = array())
	{
		$sql = "SELECT COUNT({$fields[0]}), {$fields[1]} FROM {$table} GROUP BY {$fields[1]} ";
		return $this->_db->query
		(	array
			(
				'sql' => $sql,
				//'values' => $fields
			)
		);
	}
}