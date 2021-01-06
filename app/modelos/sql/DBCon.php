<?php
namespace app\modelos\sql;
use \pdo;
use \app\nucleo\Config;

class DBCon
{
	private $_pdo,
			$_config,
			$_dbData,
			$_dbDefault = array(
					'host' => '127.0.0.1',
                    'dbname' => 'ticsa',
                    'dbuser' => 'root',
                    'dbpass' => '',
					),
            $_dbProduccion = 
            	array(
                    'host' => '127.0.0.1',
                    'dbname' => 'XXXXXXX',
                    'dbuser' => 'XXXXXXX',
                    'dbpass' => 'XXXXXXX',
                    ); 

	public function getCon($datos = null): pdo
	{
		if(!empty($datos))
		{
			$this->_dbData = $datos;
		}
		else
		{
			$this->_dbData = $this->_dbDefault;
		}

		try
		{
			$this->_pdo = new PDO('mysql:host=127.0.0.1;dbname='.$this->_dbData["dbname"].';chartset=utf8mb4',$this->_dbData["dbuser"],$this->_dbData["dbpass"]);
			
			$this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(\PDOException $e)
		{
			die($e->getMessage());
		}

		return $this->_pdo;
	}

}