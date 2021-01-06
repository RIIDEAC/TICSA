<?php
namespace app\modelos\sql;
use \pdo;

class DBResultFirst
{
	public function getFirstObj($query = null)
	{
		return $query->fetch(PDO::FETCH_OBJ);
	}
}