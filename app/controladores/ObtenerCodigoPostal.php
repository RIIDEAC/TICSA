<?php
namespace app\controladores;
use \app\modelos\limpiar\Post;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\catalogos\CodigoPostal;
/**
 * 
 */
class ObtenerCodigoPostal
{
	private $_post,
			$_redirigir,
			$_codigo;
	
	public function __construct
	(
		Post $Post, 
		Redirigir $Redirigir,
		CodigoPostal $CodigoPostal
	)
	{
		$this->_post = $Post;
		$this->_redirigir = $Redirigir;
		$this->_codigo = $CodigoPostal;	
	}

	public function Index(): void
	{
		if(strlen($_POST['CP']) >= 3 && is_numeric($_POST['CP']))
		{
			if($codigo = $this->_codigo->obtener($_POST['CP']))
			{
				if($_POST['Vista'] == "Familiar")
				{
					echo '<div class="form-row"><div class="form-group col-md-12">
					<label for="FAM_CPOSTAL">Código Postal</label>
	      			<select data-live-search="true" id="FAM_CPOSTAL" name="COP_ID" class="form-control" required>';	
				}
				else
				{
					echo '<div class="form-row"><div class="form-group col-md-12">
					<label for="PAC_CPOSTAL">Código Postal</label>
	      			<select data-live-search="true" id="PAC_CPOSTAL" name="COP_ID" class="form-control" required>';
				}
						
				
				foreach ($codigo as $key => $value)
				{
					echo '<option value="'. $value->COP_ID .'">CP: '. $value->d_codigo . ' ' .$value->d_tipo_asenta. ': ' . $value->d_asenta . ' Municipio: ' . $value->D_mnpio . ' Entidad: ' . $value->d_estado . '</option>';
				}

				echo '</select></div></div>';
			}
		}	
	}

	public function Comprobacion(): void
	{
		if(!$this->_post = $this->_post->limpiar())
		{
			$this->_redirigir->a('Login');
		}
	}	
}