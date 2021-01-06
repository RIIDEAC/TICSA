<?php
namespace app\modelos\limpiar;
/**
 * 
 */
class Post
{
	
	public function existe(): bool
	{
		if(!empty($_POST))
		{
			return true;
		}
		
		return false;
	}
    /**
	 * @return (array|mixed)[]|null
	 *
	 * @psalm-return array<array-key, array|mixed>|null
	 */
	public function limpiar(): ?array
	{
		if($this->existe())
		{
			$array = array();

			foreach ($_POST as $key => $value)
			{
				if(is_array($value))
				{
					foreach ($value as $k => $val)
					{
						$array[$key][$k] = filter_var($val, FILTER_SANITIZE_STRING);
					}
				}
				else
				{
					$array[$key] = filter_var($value, FILTER_SANITIZE_STRING);
				}				
			}

			return $array;
		}
	}
}