<?php
namespace app\modelos\sql;
use \app\modelos\sql\{DB};
class DBGet
{
	private $_where,
			$_fields,
			$_table,
			$_limit = '',
			$_orderby = '',
			$_donde = '',
			$_and = '',
			$_bvalor = null,
			$_bavalor = null,
			$_bcampo = null,
			$_bacampo = null;

	public  $_db; 
	/*
	PARA IMPLEMENTAR
		array(
			'table' => '', 
			'limit' => '', 
			'orderby' => '', 
			'order' => '', 
			'where' => array('','',''),
			'and' => array('', '', ''),
			'between' => array('','',''),
			), 
		array(
			'*'
			)
	*/		

	public function __construct(DB $DB)
	{
		$this->_db = $DB;
	}
	/**
+        * @param ((mixed|string)[]|string)[] $where
+        * @param string[] $fields
+        */
	public function get(array $where = array(), array $fields = array(), array $datos = null)
	{
		$this->_where = $where;	
		$this->_fields = $fields;
		$this->_table = $this->_where['table'];

		if(isset($this->_where['limit']))
		{
			$this->_limit = 'LIMIT '. $this->_where['limit'];
		}
		else
		{
			$this->_limit = '';
		}

		if(isset($this->_where['orderby']) && isset($this->_where['order']))
		{
			$this->_orderby = 'ORDER BY '. $this->_where['orderby']. ' '. $this->_where['order'];
		}
		else
		{
			$this->_orderby = '';
		}
		
		if(isset($this->_where['where']))
		{			
			$this->_bcampo = $this->_where['where'][0];
			$signo = $this->_where['where'][1];
			$this->_bvalor = $this->_where['where'][2];

			$this->_donde = 'WHERE '. $this->_bcampo. ' '. $signo. ' ?';
		}
		else
		{
			$this->_donde = '';
		}

		if(isset($this->_where['between']) && !empty($this->_donde))
		{
			$this->_between = " AND {$this->_where['between'][0]} BETWEEN '{$this->_where['between'][1]}' AND '{$this->_where['between'][2]}'";
		}
		else
		{
			$this->_between = '';
		}
        
        $arrayValues = array($this->_bcampo => $this->_bvalor);
        
		if(isset($this->_where['and']))
		{			
			$this->_bacampo = $this->_where['and'][0];
			$signo = $this->_where['and'][1];
			$this->_bavalor = $this->_where['and'][2];

            $this->_and = 'AND '. $this->_bacampo. ' '. $signo. ' ?';
            
            $arrayValues[$this->_bacampo] = $this->_bavalor;
		}
		else
		{
			$this->_and = '';
		}

		$fields = '';

		foreach($this->_fields as $field)
		{
			$fields = $fields.','.$field; 
		}
		
		$this->_fields = substr($fields,1);

		$sql = "SELECT $this->_fields FROM $this->_table $this->_donde $this->_between $this->_and  $this->_orderby $this->_limit";

		return $this->_db->query
		(
			array
			(
				'sql' => $sql,
				'values' => $arrayValues
			),$datos

		);
	}
}