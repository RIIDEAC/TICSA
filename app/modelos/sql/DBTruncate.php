<?php
namespace app\modelos\sql;

/**
 * 
 */
class DBTruncate
{
	private $_db;
	
	public function __construct(\app\modelos\sql\DB $DB)
	{
		$this->_db = $DB;
	}

	public function vaciar($table = array()): bool
	{
		if($table)
		{
			foreach ($table as $value)
			{
				$this->_db->query(
					array(
						'sql' => "TRUNCATE TABLE {$value}"
					)
				);
			}

			return true;
		}

		return false;
	}
}