<?php
namespace app\modelos\sql;
use \pdo;
use \app\modelos\sql\{DB};

class DBInsert 
{
	private $_db,
			$_lastinsert;

	public function __construct(DB $DB)
	{
		$this->_db = $DB;
	}

	public function registrar(string $table,array $fields = array(), $database = null)
	{
		if(count($fields))
		{
			$keys = array_keys($fields);
			$values = '';
			$x=1;

			foreach($fields as $field)
			{
				$values.= "?";

				if($x < count($fields))
				{
					$values.= ', ';
				}

				$x++;
			}

			$sql = "INSERT INTO {$table} (`". implode('`, `', $keys) ."`) VALUES ({$values})";

			//REALIZAMOS EL QUERY
			$this->_db->query
			(	array
				(
					'sql' => $sql,
					'values' => $fields
				), $database
			);

			//SI EL VALOR DE LA ULTIMA ID REGISTRADA NO ES 0 LA DEVUELVE
			if($this->_db->UltimaId() !== 0)
			{
				return $this->_db->UltimaId();
			}
		}

		return false;
	}
}