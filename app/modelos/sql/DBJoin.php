<?php
namespace app\modelos\sql;
use \app\modelos\sql\DB;

class DBJoin
{
	private $_db;

	public function __construct
	(
		DB $DB
	)
	{
		$this->_db = $DB;
	}

	public function obtener($datos = array())
	{
		$this->_datos = $datos['datos'];
		$this->_desde = $datos['desde'];
		$this->_join = $datos['join'];
		
		$sql = "
		SELECT 
		{$this->datos()} 
		FROM 
		{$this->desde()}
		{$this->join()}
		";

		if(isset($datos['repetir']))
		{
			foreach ($datos['repetir'] as $value)
			{
				$this->_desde = $value['desde'];
				$this->_join = $value['join'];

				$sql = $sql.' '.$this->join();
			}
		}

		if(isset($datos['where']))
		{
			$this->_where = $datos['where'];
			$sql = $sql.$this->where();
			$values = array($this->_where[0] => $this->_where[2]);
		}
		else
		{
			$values = '';
		}

		if(isset($datos['and']))
		{
			foreach ($datos['and'] as $value)
			{
				$this->_and = $value;
			
				$sql = $sql.$this->and();

				$values[$this->_and[0]] = $this->_and[2];
			}
			
		}

		if(isset($datos['or']))
		{
			
			foreach ($datos['or'] as $value)
			{
				foreach ($value as $key => $val)
				{
					if($key == 0)
					{
						$this->_or = $val;
			
						$sql = $sql.$this->or();

						$values[$this->_or[0]] = $this->_or[2];
					}
					else
					{
						$this->_and = $val;
			
						$sql = $sql.$this->and();

						$values[$this->_and[0]] = $this->_and[2];
					}
				}
				
			}
			
		}
	
		return $this->_db->query
		(
			array
			(
				'sql' => $sql,
				'values' => $values
			)
		);
	}

	protected function datos()
	{
		$text = '';

		foreach ($this->_datos as $key => $value)
		{
			
			foreach ($value as $v)
			{
				$text = $key.'.'.$v.','.$text;
			}	
		}

		return trim($text, ',');

	}

	protected function desde()
	{
		$text = '';

		foreach ($this->_desde as $key => $value)
		{
			$text = $key. ' ' .$value;
		}

		return $text;
	}

	protected function desdeAlias()
	{
		foreach ($this->_desde as $key => $value)
		{
			 return $value;
		}
	}

	protected function join()
	{
		$text = '';

		foreach ($this->_join as $key => $joins)
		{
			$text = 'LEFT JOIN ' . $key . ' ' . $joins['ALIAS'] . ' ON '
			. $this->desdeAlias() . '.' . $joins['ON'] . '=' . $joins['ALIAS'] . '.' .$joins['ON']. ' '
			. $text;
		}

		return $text;
	}

	protected function where()
	{
		if(count($this->_where))
		{
			return " WHERE {$this->_where[0]} {$this->_where[1]} ?"; 
		}

		return '';
	}

	protected function and()
	{
		if(count($this->_and))
		{
			return " AND {$this->_and[0]} {$this->_and[1]} ?"; 
		}

		return '';
	}

	protected function or()
	{
		if(count($this->_or))
		{
			return " OR {$this->_or[0]} {$this->_or[1]} ?"; 
		}

		return '';
	}
}