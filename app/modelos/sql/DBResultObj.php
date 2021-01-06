<?php
namespace app\modelos\sql;
use \pdo;

class DBResultObj
{
	public function getObj($query = null)
	{
		return $query->fetchAll(PDO::FETCH_OBJ);
	}
}