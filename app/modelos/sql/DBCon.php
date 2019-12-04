<?php
namespace app\modelos\sql;
use \app\nucleo\Config;
use pdo;

class DBCon
{
	private $_pdo,
			$_config,
			$_dbDefault =  
                array(
                    'host' => '127.0.0.1',
                    'dbname' => 'ticsalogin',
                    'dbuser' => 'root',
                    'dbpass' => ''
                    ),
            $_dbProyectos = 
            	array(
            		'CRACAC' => array(
            		'host' => '127.0.0.1',
                    'dbname' => 'ticsa',
                    'dbuser' => 'root',
                    'dbpass' => ''
            		),

            	);

	public function __construct(Config $Config)
	{
		$this->_config = $Config;

		if(array_key_exists($_SESSION[$this->_config->obtener('sesion/db')], $this->_dbProyectos))
		{
			$this->_dbDefault = $this->_dbProyectos[$_SESSION[$this->_config->obtener('sesion/db')]];
		}

		try
		{
			$this->_pdo = new PDO('mysql:host=127.0.0.1;dbname='.$this->_dbDefault["dbname"].';chartset=utf8',$this->_dbDefault["dbuser"],$this->_dbDefault["dbpass"]);
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