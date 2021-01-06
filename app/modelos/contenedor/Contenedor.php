<?php
namespace app\modelos\contenedor;
/**
 * 
 */
class Contenedor
{	
	private $_bindings = [];

	private function buildDependencies(\ReflectionClass $reflection): array
	{
		if(!$constructor = $reflection->getConstructor())
		{
			return [];
		}

		$params = $constructor->getParameters();

		return array_map(function ($param)
		{
			if(!$type = $param->getType())
			{
				throw new \RuntimeException();
			}

			return $this->get($type->getName());

		}, $params);

	}

	public function get(string $abstract)
	{
		if(isset($this->_bindings[$abstract]))
		{
			return $this->_bindings[$abstract]($this);
		}
		
		$reflection = new \ReflectionClass($abstract);

		$dependencies = $this->buildDependencies($reflection);

		return $reflection->newInstanceArgs($dependencies);
	}
}