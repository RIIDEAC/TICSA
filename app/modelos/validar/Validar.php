<?php
namespace app\modelos\validar;
use \app\modelos\validar\ManejadordeError;
use \app\modelos\sql\{DBGet,DBResultCount};
use \app\nucleo\Config;
use \app\modelos\token\Token;

class Validar
{
	protected	$_manejadordeError,
				$_rules = [
					'minimo',
					'maximo',
					'correo',
					'alfanum',
					'coincide',
					'numero',
					'inpost',
					'nopost',
					'vacio',
					'token',
					'password',
					'existe',
					'array',
					'cambiarpassword',
					'google',
					'dependiente',
					'unico'
				],
				$_items,
				$_token,
				$_entradas,
				$_validarPassword,
				$_db,
				$_dbCount,
				$_config;

	public 		$_messages = 
				[
					'required' 	=> 'Omitiste un campo requerido',
					'minimo' 	=> 'Un campo necesita un minimo de caracteres',
					'maximo' 	=> 'Un campo :field permite un máximo de caracteres',
					'correo' 	=> 'No es un email valido',
					'alfanum'	=> 'Un campo debe contener numeros o letras',
					'coincide'	=> 'Un campo debe de coincidir con otro',
					'numero'	=> 'Un campo debe ser número',
					'inpost' 	=> 'Falta un elemento :field obligatorio',
					'vacio'		=> 'Hay un elemento vacio',
					'nopost'	=> 'No hay elementos',
					'token'	=> 'Reenvio de formulario',
					'password'	=> 'Usuario o contraseña incorrectos',
					'existe' => 'Falta algun dato :field obligatorio',
					'array' => 'Uno de los datos no se encuentra en el formato correcto',
					'cambiarpassword' => 'La contraseña es incorrecta',
					'google' => 'Eres un robot :)',
					'dependiente' => 'Falta un elemento activado por otro obligatorio',
					'unico' => 'Elemento repetido'
				];

	public function __construct
	(
		ManejadordeError $ManejadordeError,
		DBGet $DBGet,
		DBResultCount $DBResultCount,
		Config $Config,
		Token $Token
	)
	{
		$this->_manejadordeError = $ManejadordeError;
		$this->_db = $DBGet;
		$this->_dbCount = $DBResultCount;
		$this->_config = $Config;
		$this->_token = $Token;
	}

	/**
	 * @return null|self
	 */
	public function entrada($items, $rules)
	{
		$this->_items = $items;
		
		if(!empty($this->_items))
		{
			$x=0;

			foreach($items as $item => $value)
			{
				if(in_array($item, array_keys($rules)))
				{
					$this->validate([

						'field' => $item,
						'value' => $value,
						'rules' => $rules[$item]
					]);

					$x++;
				}
			}

			//Si falta un elemento en el POST devuelve error
			if(count($rules) !== $x)
			{
				$this->_manejadordeError->addError(str_replace(['Campo', 'x'], ['Campo', 'x'], $this->_messages['inpost']),'inpost');
			}			

			return $this;
		}
		else
		{
			//SI NO HAY POST

			$this->_manejadordeError->addError(str_replace(['Campo', 'x'], ['Campo', 'x'], $this->_messages['nopost']),'nopost');
		}

	}

	public function errors(): ManejadordeError
	{
		return $this->_manejadordeError;
	}

	public function fails()
	{
		return $this->_manejadordeError->hasErrors();
	}

	protected function validate(array $item): void
	{
		$field = $item['field'];

		foreach($item['rules'] as $rule => $satisifer)
		{
			if(in_array($rule, $this->_rules))
			{
				if(!call_user_func_array([$this, $rule], [$field, $item['value'], $satisifer]))
				{
					$this->_manejadordeError->addError(
						str_replace([':field', ':satisifer'], [$field, $satisifer], $this->_messages[$rule]), 
						$field
					);
				}
			}
		}
	}

	/**
	 * @return true
	 */
	protected function google($field, $value, $satisifer): bool
	{
		/*
		ACTIVAR PARA VERIFICACION CON GOOGLE V2
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = array(
			'secret' => '6LcGiMcUAAAAAJnEUQ23dhwt1VWmsElgl4_BvOuj',
			'response' => $value
		);
		$options = array(
			'http' => array (
				'method' => 'POST',
				'content' => http_build_query($data)
			)
		);
		$context  = stream_context_create($options);
		$verify = file_get_contents($url, false, $context);
		$captcha_success = json_decode($verify);
		if ($captcha_success->success)
		{
			return true;
		}

		return false;
		*/

		return true;
	}

	protected function existe($field, $value, $satisifer): bool
	{
		$existe = $this->_db->get(
			array(
			'table' => $satisifer, 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array($field,'=',$value),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_dbCount->getcount($existe) !== 0)
		{
			return true;
		}

		return false;
	}

	protected function unico($field, $value, $satisifer): bool
	{
		$existe = $this->_db->get(
			array(
			'table' => $satisifer, 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array($field,'=',$value),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		if($this->_dbCount->getcount($existe) !== 0)
		{
			return false;
		}

		return true;
	}

	protected function array($field, $value, $satisifer): bool
	{
		return is_array($value);
	}

	protected function password($field, $value, $satisifer)
	{
		return $this->_validarPassword->validar($this->_items[$satisifer],$value);
	}

	protected function cambiarpassword($field, $value, $satisifer)
	{
		return $this->_validarPassword->validar($_SESSION[$this->_config->obtener('sesion/correo')],$value);
	}	

	protected function token($field, $value, $satisifer): bool
	{
		return $this->_token->verificar($value);
	}

	protected function vacio($field, $value, $satisifer): bool
	{
		return !empty($value);
	}

	protected function minimo($field, $value, $satisifer): bool
	{
		return mb_strlen($value) >= $satisifer; 
	}

	protected function maximo($field, $value, $satisifer): bool
	{
		return mb_strlen($value) <= $satisifer; 
	}

	/**
	 * @return false|string
	 */
	protected function correo($field, $value, $satisifer)
	{
		return filter_var($value, FILTER_VALIDATE_EMAIL);
	}

	protected function alfanum($field, $value, $satisifer): bool
	{
		return ctype_alnum($value);
	}

	protected function coincide($field, $value, $satisifer): bool
	{
		return $value === $this->_items[$satisifer];
	}

	protected function numero($field, $value, $satisifer): bool
	{
		return is_numeric($value); 
	}

	protected function dependiente($field, $value, $satisifer): bool
	{
		//dado un valor en un campo comprueba que exista otro campo		
		if($value == $satisifer[0])
		{

			return isset($this->_items[$satisifer[1]]);
		}

		return true;
	}
}