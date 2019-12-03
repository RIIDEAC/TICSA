<?php
namespace app\modelos\sql;
use pdo;

class DBCon
{
	private $_pdo,
			$_config =  
                array(
                    'host' => '127.0.0.1',
                    'dbname' => 'test',
                    'dbuser' => 'root',
                    'dbpass' => ''
                    );

	public function __construct()
	{
		
		try
		{
			$this->_pdo = new PDO('mysql:host=127.0.0.1;dbname=test;chartset=utf8',"root","");
			$this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

	public function getCon()
	{
		return $this->_pdo;
	}

}