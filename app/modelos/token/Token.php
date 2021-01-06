<?php
namespace app\modelos\token;
/**
 * 
 */
class Token
{
	public function crear(): string
	{
		$this->borrar();
		return $_SESSION['token'] = md5(time());
	}

	public function verificar($token = null): bool
	{
		if(!$token)
		{
			$token = $_POST['TOKEN'];
		}

		if($token === $_SESSION['token'])
		{
			$this->borrar();
			return true;
		}

		$this->borrar();
		return false;
	}

	public function borrar(): void
	{
		unset($_SESSION['token']);
	}
}