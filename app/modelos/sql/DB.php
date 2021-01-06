<?php
namespace app\modelos\sql;
use \app\modelos\sql\DBCon;
use \pdo;

class DB
{
	private  	$_con = null,
				$_method = null,
				$_query;

	public function __construct(DBCon $DBCon)
	{
		$this->_connect = $DBCon;
	}
	 /**
	 * @param (array|mixed|string)[] $method
	 */
	public function query(array $method = array(), array $datos = null)
	{
		
		$this->con($datos);

		$this->_method = $method;

		if($this->_query = $this->_con->prepare($this->_method['sql']))
		{

			if(!empty($this->_method['values']))
			{
				$x=1;
				foreach ($this->_method['values'] as $value)
				{
					$this->_query->bindValue($x,$value);
					$x++;	
				}
			}			

			if(!$this->_query->execute())
			{
				return false;				
			}

			
		
			return $this->_query;
		}
		
		return false;		
	}

	private function con(array $datos = null): void
	{
		if(!empty($datos))
		{
			$this->_con = $this->_connect->getCon($datos);
		}
		else
		{
			$this->_con = $this->_connect->getCon();
		}
		
	}

	public function UltimaId()
	{
		return $this->_con->lastInsertId();
	}
}