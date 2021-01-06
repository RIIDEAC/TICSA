<?php
namespace app\nucleo;

class Config
{
	protected	
        $_data = 
        array(
    		'app' => 
                array(
                    'name' => 'APP',
                    'author' => 'RIIDE',
                    'webauthor' => 'OS.COM',
                    'descripcion' => 'TICSA',
                    'webbase' => 'http://localhost/TICSA/', //https://amanecer.ticsa.org.mx/
                    'since' => '2015' 
                    ),
            'sesion' => 
                array(
                    'caducidad' => '3600',
                    'noLogin' => array(
                            'Login',
                            'CerrarSesion',
                            'VerificarCredenciales',
                        ),
                    'Login' => array(
                            'Login',
                            'VerificarCredenciales',
                        ),
                    'roles' => array(
                            '1' => array( //EXCLUSIVOS PARA ROL 1
                                '',
                            ),
                            '2' => array(
                                'Prueba', //EXCLUSIVOS ROL 2
                            ),
                            '3' => array( 
                                '',
                            ),
                        ),
                    ),
            'dir' => 
                array(
                    'principal' => 'Inicio',
                    'controladores' => 'app/controladores/',
                    'vistas' => 'app/vistas/',
                    ),
    	);
       /**
        * @param null|string $path
+        */
    public function obtener(?string $path = null, $datos = array())
	{
		if($path)
        {
            $path = explode('/', $path);
            
            if(!empty($datos))
            {
                $this->_data = $datos;
            }

            $config = $this->_data;
            
            foreach($path as $bit)
            {
                if(isset($config[$bit]))
                {
                    $config = $config[$bit];
                }
            }
            
            return $config;
        }
        
        return false;
       	
	}
}