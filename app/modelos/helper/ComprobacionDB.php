<?php
namespace app\modelos\helper;
use \app\modelos\sql\DB;
/**
 * 
 */
class ComprobacionDB
{
	
	public function __construct(DB $DB)
	{
		$this->_db = $DB;
	}

	public function do($table)
	{
		unset($_POST['TOKEN']);
		unset($_POST['NING_ID']);

		foreach ($_POST as $key => $value)
		{
			echo "
			'$key' => array(<br>
				'minimo' => 1,<br>
				'maximo' => 1,<br>
				'numero' => true<br>
			),<br>
			";
		}

		foreach ($_POST as $key => $value)
		{
			$this->_db->query(
				array(
					'sql' => "ALTER TABLE {$table} ADD {$key} INT(11) NOT NULL"
				)
			);
		}
	}
}