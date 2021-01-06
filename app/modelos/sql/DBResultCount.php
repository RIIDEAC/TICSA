<?php
namespace app\modelos\sql;
use \pdo;

class DBResultCount
{
	public function getCount($query = null)
	{
		return $query->rowCount();
	}
}