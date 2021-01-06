<?php
namespace app\modelos\sql;
use \pdo;

class DBResultArray
{
	private $_where;

	public function __construct($where = array(), $options = array())
	{
		$this->_where = $where;
	}

	public function do($query = null)
	{
		return $query->fetch(PDO::FETCH_ASSOC);
	}
}