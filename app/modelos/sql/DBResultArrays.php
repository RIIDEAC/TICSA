<?php
namespace app\modelos\sql;
use \pdo;

class DBResultArrays
{
	public function do($query = null)
	{
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
}