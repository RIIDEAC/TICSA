<?php
namespace app\libreria\traductor;
/**
 * 
 */
class FormatosString
{
	private $_data = array();
            
	
	public function obtener($path)
	{
        $this->_data = require 'app/libreria/traductor/Data.php';
		
        if($path)
        {
            $path = explode('/', $path);
            
            $config = $this->_data;

            foreach($path as $bit)
            {
                if(isset($config[$bit]))
                {
                    $config = $config[$bit];
                }
            }
            
            if(!is_array($config))
            {
                return $config;
            }
            
        }
        
        return false;
       	
	}
}