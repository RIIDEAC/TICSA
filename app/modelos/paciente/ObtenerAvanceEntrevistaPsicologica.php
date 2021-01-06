<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBGet,DBResultCount};
/**
 * 
 */
class ObtenerAvanceEntrevistaPsicologica
{
	private $_db,
			$_count;
	
	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
	}
	/**
	 * @param int $ning
	 *
	 * @return false|int|null
	 *
	 * @psalm-return 1|2|false|null
	 */
	public function obtener(int $ning)
	{
		if($this->entrevista('DAT_ENTPSIINI_EPI',$ning) == 1 && $this->entrevista('DAT_ENTPSIINII_EPII',$ning) == 1)
		{
			return false;
		}
		if($this->entrevista('DAT_ENTPSIINI_EPI',$ning) == 0)
		{
			return 1;
		}
		if($this->entrevista('DAT_ENTPSIINII_EPII',$ning) == 0)
		{
			return 2;
		}
	}

	public function entrevista(string $table, int $ning)
	{

		$dato = $this->_db->get(
			array(
			'table' => $table, 
			//'limit' => '', 
			//'orderby' => '', 
			//'order' => '', 
			'where' => array('NING_ID','=', $ning),
			//'and' => array('', '', '')
			), 
		array(
			'*'
			)
		);

		return $this->_count->getCount($dato);

	}
}